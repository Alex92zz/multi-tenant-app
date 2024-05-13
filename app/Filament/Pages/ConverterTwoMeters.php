<?php

namespace App\Filament\Pages;

use App\Models\CompletedConversion;
use Carbon\Carbon;
use Filament\Actions\Action;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Filament\Forms\Form;
use Filament\Forms\Components\Card;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Pages\Page;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Log;
use BezhanSalleh\FilamentShield\Traits\HasPageShield;

class ConverterTwoMeters extends Page implements HasForms
{
    use WithFileUploads;
    use InteractsWithForms;
    use HasPageShield;
    protected static ?string $model = CompletedConversion::class;


    protected static string $view = 'filament.pages.converter-two-meters';
    protected static ?string $navigationIcon = 'heroicon-o-calculator';

    protected static ?string $navigationLabel = '2 Meters: 1min to 15min';

    protected static ?string $navigationGroup = 'Converter';

    protected static ?int $navigationSort = 3;
    public function mount(): void
    {
        $this->form->fill();
    }

    public $attachment;
    public $attachmentTwo;
    public $formData = [];
    public $formDataTwo = [];
    public $start_time_for_conversion = '';
    public $start_time_for_conversion_two = '';

    public function form(Form $form): Form
    {

        return $form
            ->schema([
                Card::make()
                    ->schema([
                        FileUpload::make('attachment')
                            ->label(__('1 Minute to 15 Minute converter for Meter 1'))
                            ->acceptedFileTypes(['text/csv'])
                            ->directory('conversion-inputs')
                            ->afterStateUpdated(fn() => $this->getData('attachment')), // Trigger getData after state update
                        Select::make('start_time_for_conversion')
                            ->options(fn() => $this->formData)
                            ->required(),
                        FileUpload::make('attachmentTwo')
                            ->label(__('1 Minute to 15 Minute converter for Meter 2'))
                            ->acceptedFileTypes(['text/csv'])
                            ->directory('conversion-inputs')
                            ->afterStateUpdated(fn() => $this->getData('attachmentTwo')), // Trigger getData after state update
                        Select::make('start_time_for_conversion_two')
                            ->options(fn() => $this->formDataTwo)
                            ->required(),
                    ]),
            ]);
    }

    protected function getFormActions(): array
    {
        return [

            Action::make('convert')
                ->label(__('Convert'))
                ->submit('handle'),
        ];
    }

    public function getData($fileKey): void
    {
        $data = $this->{$fileKey};


        // Loop through each uploaded file
        foreach ($data as $key => $file) {

            $savedFile = $file->store('conversion-inputs');

            // Get the public URL of the saved file
            $publicUrl = Storage::url($savedFile);


            // Now you can perform any additional operations with the saved file
            // For example, if it's a CSV file, you can read its contents using Laravel's File facade:
            // Inside the loop
            $fileContents = Storage::get($savedFile);

            $data = array_map('str_getcsv', explode("\n", $fileContents));

            $rowCounter = 0;

            //looping thorough the file
            foreach ($data as $row) {
                $rowCounter++;

                //skipping process until row 24
                if ($rowCounter <= 23) {
                    continue;
                }

                if ($rowCounter < 50) {
                    // Add each row to formData
                    if ($fileKey === 'attachment') {
                        $this->formData[$rowCounter] = $row[0];
                    } elseif ($fileKey === 'attachmentTwo') {
                        $this->formDataTwo[$rowCounter] = $row[0];
                    }

                }

                // Check if the row is empty
                if (empty($row[0]) && empty($row[1])) {
                    Log::info("exited the loop because encoutered empty row");
                    break; // Exit the loop if an empty row is encountered
                }

            }
        }
    }


    public function handle(Form $form)
    {
        Log::info('Handle function started.');
        $data = $this->form->getState();

        $startTimeForConversion = basename(public_path($data['start_time_for_conversion']));
        $startTimeForConversionTwo = basename(public_path($data['start_time_for_conversion_two']));

        // Get the file path from the public folder
        $file = public_path($data['attachment']);
        $fileTwo = public_path($data['attachmentTwo']);

        $averages = $this->processFile($file, $startTimeForConversion);
        $averagesTwo = $this->processFile($fileTwo, $startTimeForConversionTwo);

        $currentDateTime = now();

        // Generate a unique filename based on the current date and time
        $filename = '1_minute_to_15_minute_conversion_' . $currentDateTime->format('Ymd_His') . '.csv';
        // Construct the output file path
        $outputFilePath = storage_path('app/conversion-outputs/' . $filename);

        // Write data to a new CSV file with averages
        $output = fopen($outputFilePath, 'x');

        // Write $averages to columns 0 and 1 starting from row 0
        $rowIndex = 0;
        foreach ($averages as $dateTime => $average) {
            $data = [$dateTime, $average];
            fputcsv($output, array_merge($data, ['', '']), ',', '"', ($rowIndex < 2) ? $rowIndex : null);
            $rowIndex++;
        }

        // Reset the row index for $averagesTwo
        $rowIndex = 0;

        // Write $averagesTwo to columns 4 and 5 starting from row 0
        foreach ($averagesTwo as $dateTime => $average) {
            $data = [ '', '', '', $dateTime, $average];
            fputcsv($output, $data, ',', '"', ($rowIndex < 2) ? $rowIndex : null);
            $rowIndex++;
        }

        fclose($output);

        // Add record to completed_conversions table
        $userId = Auth::id();
        CompletedConversion::create([
            'user_id' => $userId,
            'url' => $filename,
            'conversion_description' => '1min to 15min conversion for 2 Meters'
        ]);

        return redirect()->route('download', ['filename' => $filename]);
    }


    public function processFile($file, $startTimeForConversion)
    {

        $data = array_map('str_getcsv', file($file));
        $dataTwo = array_map('str_getcsv', file($file));

        $averages = [];
        $sum = 0.00;
        $count = 0;
        $previousDateTime = null;
        $loopStartDateTime = null;
        $rowCounter = 0;
        $firstDateTimeAndFlow = [];

        foreach ($data as $row) {
            $rowCounter++;

            //copy details about the meter
            if ($rowCounter <= 21) {
                $averages[$row[0]] = $row[1];
            }

            //adding empty cells to help humans differentiate between sections
            if ($rowCounter === 22) {
                $averages[' '] = ' ';
                $averages[' '] = ' ';
            }

            //adding title to columns
            if ($rowCounter === 23) {
                $averages['Date and Time'] = '15 min average';
            }

            //getting the first value because that one doesn't need to be calculated for average
            if ($rowCounter == ($startTimeForConversion)) {
                Log::info('if $rowCounter === $startTimeForConversion, meaning first row: ' . $startTimeForConversion);
                $averages[Carbon::createFromFormat('d/m/Y H:i', $row[0])->toDateTimeString()] = floatval($row[1]);
                continue;
            }
            //skipping process until row 24
            if ($rowCounter <= 24) {
                continue;
            }

            // Check if the row is empty and exit loop if an empty
            if (empty($row[0]) && empty($row[1])) {
                Log::info("exited the loop because encoutered empty row");
                break;
            }

            if ($rowCounter >= ($startTimeForConversion)) {

                $dateTime = Carbon::createFromFormat('d/m/Y H:i', $row[0]);
                $flow = floatval($row[1]);
                Log::info("rowCounter: " . $rowCounter);
                Log::info("dataTime received, date: " . $dateTime);
                Log::info("flow received, flow: " . $flow);

                if ($previousDateTime == null) {
                    $previousDateTime = $dateTime;
                    $loopStartDateTime = $dateTime;
                }

                if ($dateTime->diffInMinutes($loopStartDateTime) == 15) {

                    Log::info("sum: " . $sum);
                    Log::info("count: " . $count);
                    $average = $sum / $count;
                    Log::info("average, mening sum / count: " . $average);
                    $numberFormatted = number_format($average, 2);
                    $averages[$previousDateTime->format('d/m/Y H:i')] = $numberFormatted;

                    // Reset sum and count
                    $sum = 0.00;
                    $count = 0;
                    $loopStartDateTime = $dateTime;
                }

                Log::info("count: " . $count);
                Log::info("flow: " . $flow);
                Log::info("sum: " . $sum);

                $sum += $flow;
                $count += 1;

                $previousDateTime = $dateTime;
            }

        }

        // Calculate average for the last period
        $average = $sum / $count;
        $numberFormatted = number_format($average, 2);
        $averages[$dateTime->format('d/m/Y H:i')] = $numberFormatted;

        return $averages;
    }


}
