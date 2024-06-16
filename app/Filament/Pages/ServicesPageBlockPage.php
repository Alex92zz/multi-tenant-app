<?php

namespace App\Filament\Pages;

use App\Models\ServicesPageBlock;
use App\Models\Tenant;
use App\Models\WebsiteGeneralSettings;
use Filament\Actions\Action;
use Filament\Forms\Components\Builder;
use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Illuminate\Support\Facades\Auth;
use Filament\Forms\Form;
use Filament\Pages\Page;
use App\Models\User;
use Filament\Facades\Filament;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Storage;

class ServicesPageBlockPage extends Page
{
    protected static ?string $navigationIcon = 'heroicon-c-briefcase';

    protected static string $view = 'filament.pages.services-page-block-page';

    protected static ?string $navigationLabel = 'Services';

    protected static ?int $navigationSort = 2;


    public ?array $data = [];

    protected ?ServicesPageBlock $servicesPageBlock = null;

    public function mount(): void
    {
        $tenant = Tenant::where('domain', request()->getHost())->firstOrFail();

        // Check if there's already a ServicesPageBlock for the current tenant
        $this->servicesPageBlock = ServicesPageBlock::where('tenant_id', $tenant->id)->first();


        if ($this->servicesPageBlock) {

            $newFormData = $this->servicesPageBlock;

            $this->form->fill([
                'title' => $newFormData['title'],
                'meta_description' => $newFormData['meta_description'],
                'content' => $newFormData['content'],
            ])->statePath('data');
        }
    }



    public function form(Form $form): Form
    {
        $form->schema([

            Card::make()
                ->schema([
                    TextInput::make('title'),
                    TextInput::make('meta_description'),
                    // Customize your form fields based on your requirements
                    Builder::make('content')
                        ->blocks([
                            Block::make('heading')
                                ->schema([
                                    TextInput::make('content')
                                        ->label('Heading')
                                        ->required(),
                                    Select::make('level')
                                        ->options([
                                            'h1' => 'Heading 1',
                                            'h2' => 'Heading 2',
                                            'h3' => 'Heading 3',
                                            'h4' => 'Heading 4',
                                            'h5' => 'Heading 5',
                                            'h6' => 'Heading 6',
                                        ])
                                        ->required(),
                                ])
                                ->columns(2),
                            Block::make('paragraph')
                                ->icon('heroicon-m-bars-3-bottom-left')
                                ->schema([
                                    Textarea::make('content')
                                        ->label('Paragraph')
                                        ->required(),
                                ]),
                            Block::make('image')
                                ->icon('heroicon-o-photo')
                                ->schema([
                                    FileUpload::make('url')
                                        ->label('Image')
                                        ->image()
                                        ->required(),
                                    TextInput::make('alt')
                                        ->label('Alt text')
                                        ->required(),
                                ]),
                        ]),
                ]),
        ])->statePath('data');

        return $form;
    }


    protected function getFormActions(): array
    {
        return [
            Action::make('save')
                ->label(__('Save'))
                ->submit('save'),
        ];
    }

    public function save(Form $form)
    {
        $tenant = Tenant::where('domain', request()->getHost())->firstOrFail();
        Log::info($tenant);

        // Retrieve form data
        $formData = $this->form->getState();
        Log::info('form data' . json_encode($formData));

        // Check if a ServicesPageBlock already exists for the tenant
        $servicesPageBlock = ServicesPageBlock::where('tenant_id', $tenant->id)->first();

        if ($servicesPageBlock) {
            // Update existing ServicesPageBlock
            $servicesPageBlock->update([
                'title' => $formData['title'],
                'meta_description' => $formData['meta_description'],
                'content' => $formData['content'],
            ]);
        } else {
            // Create new ServicesPageBlock
            ServicesPageBlock::create([
                'tenant_id' => $tenant->id,
                'title' => $formData['title'],
                'meta_description' => $formData['meta_description'],
                'content' => $formData['content'],
            ]);
        }

        // Redirect back with success message
        return redirect()->back()->with('success', 'ServicesPageBlock saved successfully.');
    }
}
