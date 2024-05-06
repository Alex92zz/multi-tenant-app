<?php

namespace App\Filament\Pages;

use Carbon\Carbon;
use Filament\Actions\Action;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Form;
use Filament\Forms\Components\Card;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Notifications\Notification;
use Filament\Pages\Page;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Log;
use BezhanSalleh\FilamentShield\Traits\HasPageShield;

class Converter extends Page implements HasForms
{
    use WithFileUploads;
    use InteractsWithForms;
    use HasPageShield;

    public $attachment;
    protected static ?string $navigationIcon = 'heroicon-o-calculator';

    protected static string $view = 'filament.pages.converter';

    protected static ?string $navigationLabel  = '1 minute to 15 minute';

    protected static ?string $navigationGroup = 'Converter';
    public function mount(): void
    {
        $this->form->fill();
    }

    public function form(Form $form): Form
    {

        return $form
            ->schema([
                Card::make()
                ->schema([
                    FileUpload::make('attachment')
                    ->label(__('1 minute to 15 minute converter'))
                        ->visibility('private')
                        ->directory('conversion-inputs'),
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

    public function handle(Form $form)
    {
        Log::info('Handle function started.');
        $data = $this->form->getState();

        // Get the file path from the public folder
        $file = public_path($data['attachment']);

        $data = array_map('str_getcsv', file($file));

        $averages = [];
        $sum = 0.00;
        $count = 0;
        $previousDateTime = null;
        $loopStartDateTime = null;

        foreach ($data as $row) {
            // Check if the row is empty
            if (empty($row[0]) && empty($row[1])) {
                Log::info("exited the loop because encoutered empty row");
                break; // Exit the loop if an empty row is encountered
            }

            $dateTime = Carbon::createFromFormat('d/m/Y H:i', $row[0]);
            $flow = floatval($row[1]);

            if ($previousDateTime == null) {
                $previousDateTime = $dateTime;
                $loopStartDateTime = $dateTime;
            }

            if ($dateTime->diffInMinutes($loopStartDateTime) >= 15) {

                $average = $sum / $count;
                $numberFormatted = number_format($average, 2);
                $averages[$previousDateTime->format('d/m/Y H:i')] = $numberFormatted;

                // Reset sum and count
                $sum = 0.00;
                $count = 0;
                $loopStartDateTime = $dateTime;
            }

            $sum += $flow;
            $count += 1;

            $previousDateTime = $dateTime;
        }

        // Calculate average for the last period
        $average = $sum / $count;
        $numberFormatted = number_format($average, 2);
        $averages[$dateTime->format('d/m/Y H:i')] = $numberFormatted;

        $currentDateTime = now();

        // Generate a unique filename based on the current date and time
        $filename = '1_minute_to_15_minute_conversion_' . $currentDateTime->format('Ymd_His') . '.csv';
        // Construct the output file path
        $outputFilePath = storage_path('app/conversion-outputs/' . $filename);

        // Write data to a new CSV file with averages
        $output = fopen($outputFilePath, 'x');

        foreach ($averages as $dateTime => $average) {
            $data = [$dateTime, $average];
            fputcsv($output, $data);
        }
        fclose($output);


        return redirect()->route('download', ['filename' => $filename]);
    }


}
