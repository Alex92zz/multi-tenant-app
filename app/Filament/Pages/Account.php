<?php

namespace App\Filament\Pages;

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
use Illuminate\Support\Facades\Storage;

class Account extends Page implements HasForms
{
    use InteractsWithForms;

    public ?array $data = [];
    protected static ?string $navigationIcon = 'heroicon-o-user-circle';

    protected static string $view = 'filament.pages.account';

    protected static ?string $navigationLabel = 'My Account';

    protected static ?string $navigationGroup = 'Settings';

    protected ?User $user = null;


    public function mount(): void
    {
        $this->user = Auth::user();
        Log::info('User: ' . $this->user);

        if ($this->user) {
            Log::info('Mount started');
            $this->form->fill([
                'email' => $this->user->email,
                'name' => $this->user->name,
                'image_url' => $this->user->image_url,
                'phone_number' => $this->user->phone_number,
            ])->statePath('data');
        }
    }
    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()
                    ->schema([

                        FileUpload::make('image_url')
                            ->label('Profile Picture')
                            ->visibility('private')
                            ->disk('public')
                            ->required()
                            ->avatar()
                            ->directory('/images/admin_dashboard/users'),
                        Grid::make(3)
                            ->schema([
                                TextInput::make('name')
                                    ->label('Full Name')
                                    ->required(),
                                TextInput::make('phone_number'),
                                TextInput::make('email'),
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
        Log::info('Save form started');
        $data = $this->form->getState();
        Log::info($data);

        $user = Auth::user();
        Log::info($user);

        if ($user) {
            Log::info('if statement started');

            $oldImageUrl = $user->image_url;

            $user->update([
                'name' => $data['name'],
                'email' => $data['email'],
                'phone_number' => $data['phone_number'] ?? null,
                'image_url' => $data['image_url'] ?? null,
            ]);

            // Check if the image URL has changed
            if ($data['image_url'] !== $oldImageUrl) {
                // Delete the old image from the project
                if ($oldImageUrl) {
                    Storage::disk('public')->delete($oldImageUrl);
                }
            }

            session()->flash('message', 'Account updated successfully.');
        } else {
            session()->flash('error', 'User not found.');
        }
    }

    public function getEmail(): ?string
    {
        return $this->user->email;
    }

    public function getData(): array
    {
        return $this->data;
    }
}
