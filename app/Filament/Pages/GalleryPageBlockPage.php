<?php

namespace App\Filament\Pages;

use App\Models\GalleryPageBlock;
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

class GalleryPageBlockPage extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-photo';

    protected static string $view = 'filament.pages.gallery-page-block-page';

    protected static ?string $navigationLabel = 'Gallery';

    protected static ?int $navigationSort = 3;


    public ?array $data = [];

    protected ?GalleryPageBlock $galleryPageBlock = null;

    public function mount(): void
    {
        $tenant = Tenant::where('domain', request()->getHost())->firstOrFail();

        // Check if there's already a galleryPageBlock for the current tenant
        $this->galleryPageBlock = GalleryPageBlock::where('tenant_id', $tenant->id)->first();

    
        if ($this->galleryPageBlock) {

            $newFormData = $this->galleryPageBlock;
            Logg:info($newFormData);

            $this->form->fill([
                'title' => $newFormData->content['title'],
                'meta_description' => $newFormData->content['meta_description'],
                'content' => $newFormData->content['content'],
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
                    ->label('Gallery Images')
                        ->blocks([
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
                        ])
                        ->blockNumbers(false)
                        ->addActionLabel('Add Image')
                        ->reorderable(true)
                        ->collapsed(),
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

        // Check if a galleryPageBlock already exists for the tenant
        $galleryPageBlock = galleryPageBlock::where('tenant_id', $tenant->id)->first();

        if ($galleryPageBlock) {
            // Update existing galleryPageBlock
            $galleryPageBlock->update([
                'content' => $formData,
            ]);
        } else {
            // Create new galleryPageBlock
            galleryPageBlock::create([
                'tenant_id' => $tenant->id,
                'title' => $formData['title'],
                'meta_description' => $formData['meta_description'],
                'content' => $formData['content'],
            ]);
        }

        // Redirect back with success message
        return redirect()->back()->with('success', 'galleryPageBlock saved successfully.');
    }
}
