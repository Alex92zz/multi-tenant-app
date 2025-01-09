<?php

namespace App\Filament\Pages;

use App\Models\HomePageBlock;
use App\Models\Tenant;
use App\Models\WebsiteGeneralSettings;
use Filament\Actions\Action;
use Filament\Forms\Components\Builder;
use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\Fieldset;
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
    protected static ?string $navigationIcon = 'heroicon-o-home';

    protected static string $view = 'filament.pages.home-page-blocks-page';

    protected static ?string $navigationLabel = 'Home';

    protected static ?int $navigationSort = 1;

    public ?array $data = [];

    protected ?HomePageBlock $homePageBlock = null;

    public function mount(): void
    {
        $tenant = Tenant::where('domain', request()->getHost())->firstOrFail();

        // Check if there's already a HomePageBlock for the current tenant
        $this->homePageBlock = HomePageBlock::where('tenant_id', $tenant->id)->first();


        if ($this->homePageBlock) {

            $newFormData = $this->homePageBlock;

            $this->form->fill([
                'title' => $newFormData['title'],
                'meta_description' => $newFormData['meta_description'],
                'hero' => $newFormData['hero'],
                'about_us' => $newFormData['about_us'],
                'gallery' => $newFormData['gallery'],
                'testimonials' => $newFormData['testimonials'],
                'logos' => $newFormData['logos'],
            ])->statePath('data');
        }
    }



    public function form(Form $form): Form
    {
        $form->schema([

            Card::make()
                ->schema([
                    Fieldset::make('Meta Data')
                        ->schema([
                            TextInput::make('title'),
                            TextInput::make('meta_description'),
                        ]),

                    Builder::make('hero')
                        ->label('Hero Section')
                        ->blocks([
                            Block::make('heading')
                                ->schema([
                                    TextInput::make('content')
                                        ->label('Heading')
                                        ->required(),
                                    Select::make('level')
                                        ->options([
                                            'h1' => 'H1',
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
                        ])

                        ->blockNumbers(false)
                        ->addActionLabel('Add to Hero Section')
                        ->reorderable(false)
                        ->collapsed()
                        ->maxItems(3)
                    ,

                    Builder::make('about_us')
                        ->label('About Us')
                        ->blocks([
                            Block::make('banner')
                                ->icon('heroicon-o-chat-bubble-bottom-center-text')
                                ->schema([
                                    TextInput::make('banner_text')
                                        ->label('Banner Text'),
                                ]),
                            Block::make('img_left_txt_right')
                                ->icon('heroicon-o-chat-bubble-bottom-center-text')
                                ->schema([
                                    TextInput::make('heading')
                                        ->label('Heading')
                                        ->required(),
                                    Textarea::make('paragraph')
                                        ->label('Paragraph')
                                        ->required(),
                                    FileUpload::make('url')
                                        ->label('Image')
                                        ->image()
                                        ->required(),
                                ]),
                            Block::make('img_right_txt_left')
                                ->icon('heroicon-o-chat-bubble-bottom-center-text')
                                ->schema([
                                    FileUpload::make('url')
                                        ->label('Image')
                                        ->image()
                                        ->required(),
                                    TextInput::make('heading')
                                        ->label('Heading')
                                        ->required(),
                                    Textarea::make('paragraph')
                                        ->label('Paragraph')
                                        ->required(),
                                ]),

                        ])
                        ->blockNumbers(false)
                        ->addActionLabel('Add to About Us Section')
                        ->reorderable(true)
                        ->collapsed()
                    ,

                    Builder::make('gallery')
                        ->label('Gallery Images')
                        ->blocks([
                            Block::make('gallery')
                                ->icon('heroicon-o-photo')
                                ->label('Image')
                                ->schema([
                                    FileUpload::make('url')
                                        ->label('Image')
                                        ->image()
                                        ->required(),
                                    TextInput::make('alt')
                                        ->label('Photo Description'),
                                ]),
                        ])
                        ->blockNumbers(false)
                        ->addActionLabel('Add Image')
                        ->reorderable(true)
                        ->collapsed()
                    ,

                    Builder::make('testimonials')
                        ->label('Testimonials')
                        ->blocks([
                            Block::make('testimonials')
                                ->icon('heroicon-o-chat-bubble-bottom-center-text')
                                ->label('Testimonial')
                                ->schema([
                                    Textarea::make('paragraph')
                                        ->label('Testimonial'),
                                    TextInput::make('name')
                                        ->label('Name'),
                                ]),
                        ])
                        ->blockNumbers(false)
                        ->addActionLabel('Add Testimonial')
                        ->reorderable(true)
                        ->collapsed()
                    ,


                    Builder::make('logos')
                        ->label('Logo Brands')
                        ->blocks([
                            Block::make('logo_brands')
                                ->icon('heroicon-o-photo')
                                ->label('Image Logo')
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
                        ->addActionLabel('Add Logo')
                        ->reorderable(true)
                        ->collapsed()
                    ,
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
                'tenant_id' => $tenant->id,
                'title' => $formData['title'],
                'meta_description' => $formData['meta_description'],
                'hero' => $formData['hero'],
                'about_us' => $formData['about_us'],
                'gallery' => $formData['gallery'],
                'testimonials' => $formData['testimonials'],
                'logos' => $formData['logos'],
            ]);
        } else {
            // Create new HomePageBlock
            HomePageBlock::create([
                'tenant_id' => $tenant->id,
                'title' => $formData['title'],
                'meta_description' => $formData['meta_description'],
                'hero' => $formData['hero'],
                'about_us' => $formData['about_us'],
                'gallery' => $formData['gallery'],
                'testimonials' => $formData['testimonials'],
                'logos' => $formData['logos'],
            ]);
        }

        // Redirect back with success message
        return redirect()->back()->with('success', 'HomePageBlock saved successfully.');
    }
}
