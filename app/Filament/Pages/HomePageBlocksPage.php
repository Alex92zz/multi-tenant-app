<?php

namespace App\Filament\Pages;

use App\Models\HomePageBlock;
use App\Models\Tenant;
use App\Models\WebsiteGeneralSettings;
use Filament\Actions\Action;
use Filament\Forms\Components\Builder;
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

class HomePageBlocksPage extends Page implements HasForms
{
    use InteractsWithForms;
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.pages.home-page-blocks-page';

    public ?array $data = [];

    protected ?HomePageBlock $homePageBlock = null;

    public function mount(): void
    {
        $tenant = Tenant::where('domain', request()->getHost())->firstOrFail();

        // Check if there's already a HomePageBlock for the current tenant
        $this->homePageBlock = HomePageBlock::where('tenant_id', $tenant->id)->first();

        $newFormData = $this->homePageBlock->content['data'];

        if ($newFormData) {
            $this->form->fill([
                'content' => $newFormData,
            ])->statePath('data');
        }
    }



    public function form(Form $form): Form
    {
        $tenant = Tenant::where('domain', request()->getHost())->firstOrFail();

        $form->schema([
            // Customize your form fields based on your requirements
            Builder::make('content')
                ->blocks([
                    Builder\Block::make('heading')
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
                    Builder\Block::make('paragraph')
                        ->schema([
                            Textarea::make('content')
                                ->label('Paragraph')
                                ->required(),
                        ]),
                    Builder\Block::make('image')
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

        // Check if a HomePageBlock already exists for the tenant
        $homePageBlock = HomePageBlock::where('tenant_id', $tenant->id)->first();

        if ($homePageBlock) {
            // Update existing HomePageBlock
            $homePageBlock->update([
                'content' => $formData,
            ]);
        } else {
            // Create new HomePageBlock
            HomePageBlock::create([
                'tenant_id' => $tenant->id,
                'content' => $formData,
            ]);
        }

        // Redirect back with success message
        return redirect()->back()->with('success', 'HomePageBlock saved successfully.');
    }
}
