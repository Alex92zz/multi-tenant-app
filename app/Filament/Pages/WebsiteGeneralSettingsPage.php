<?php

namespace App\Filament\Pages;

use App\Models\Tenant;
use App\Models\WebsiteGeneralSettings;
use Filament\Actions\Action;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Grid;
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

class WebsiteGeneralSettingsPage extends Page implements HasForms
{
    use InteractsWithForms;
    protected static ?string $navigationIcon = 'heroicon-o-cog-8-tooth'; // or heroicon-o-window

    protected static string $view = 'filament.pages.website-general-settings-page';

    protected static ?string $navigationGroup = 'Settings';

    protected ?WebsiteGeneralSettings $websiteData = null;
    public ?array $data = [];

    public function mount(): void
    {
        Log::info('Mount started');

        $host = Request::getHost();
        Log::info('host: ' . $host);

        $tenant = Tenant::where('domain', $host)->first();
        Log::info('tenant: ' . $tenant);

        if ($tenant) {
            $this->websiteData = $tenant->websiteGeneralSettings;
            Log::info('Website Data: ' . ($this->websiteData ? $this->websiteData->toJson() : 'Not found'));
        } else {
            $this->websiteData = null;
        }

        $this->form->fill([
            'logo_url' => $this->websiteData->logo_url ?? null,

            'company_name' => $this->websiteData->company_name ?? null,
            'phone_number' => $this->websiteData->phone_number ?? null,
            'email' => $this->websiteData->email ?? null,
        ])->statePath('data');
    }


    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()
                    ->schema([

                        FileUpload::make('logo_url')
                            ->label('Logo')
                            ->visibility('private')
                            ->disk('public')
                            ->avatar()
                            ->directory('/images/admin_dashboard/users'),
                        FileUpload::make('icon_url')
                            ->label('Browser Icon')
                            ->visibility('private')
                            ->disk('public')
                            ->avatar()
                            ->directory('/images/admin_dashboard/users'),
                        Grid::make(3)
                            ->schema([
                                TextInput::make('company_name'),
                                TextInput::make('phone_number'),
                                TextInput::make('email'),
                                TextInput::make('address')
                                ->label('Business Address'),
                                TextInput::make('facebook'),
                                TextInput::make('instagram'),
                            ]),
                    ])
            ])->statePath('data');
    }


    protected function getFormActions(): array
    {
        return [
            Action::make('save')
                ->label(__('Save'))
                ->submit('save'),
        ];
    }



    public function save(Form $form): void
    {
        $host = Request::getHost();

        $tenant = Tenant::get()->where('domain', $host)->first();
        $tenantID = $tenant->id;


        $data = $this->form->getState();
        Log::info($data);

        $websiteSettings = $tenant->websiteGeneralSettings;

        if ($tenant->websiteGeneralSettings) {
            $websiteSettings->update([
                'logo_url' => $data['logo_url'] ?? null,
                'icon_url' => $data['icon_url'] ?? null,
                'company_name' => $data['company_name'] ?? null,
                'phone_number' => $data['phone_number'] ?? null,
                'email' => $data['email'] ?? null,
                'address' => $data['address'] ?? null,
                'facebook' => $data['facebook'] ?? null,
                'instagram' => $data['instagram'] ?? null
            ]);
        } else {
            WebsiteGeneralSettings::create([
                'logo_url' => $data['logo_url'] ?? null,
                'icon_url' => $data['icon_url'] ?? null,
                'company_name' => $data['company_name'] ?? null,
                'phone_number' => $data['phone_number'] ?? null,
                'email' => $data['email'] ?? null,
                'address' => $data['address'] ?? null,
                'facebook' => $data['facebook'] ?? null,
                'instagram' => $data['instagram'] ?? null,
                'tenant_id' => $tenantID
            ]);
        }

        Log::info('Data saved successfully');
    }


}
