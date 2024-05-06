<?php

namespace App\Filament\Pages;

use Filament\Forms\Components\Card;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Illuminate\Support\Facades\Auth;
use Filament\Forms\Form;
use Filament\Pages\Page;
use App\Models\User;
use Filament\Facades\Filament;
use Illuminate\Support\Facades\Log;

class Account extends Page implements HasForms
{
    use InteractsWithForms;

    public ?array $data = [];
    protected static ?string $navigationIcon = 'heroicon-o-user-circle';

    protected static string $view = 'filament.pages.account';

    protected static ?string $navigationLabel  = 'My Account';

    protected static ?string $navigationGroup = 'Settings';

    protected ?User $user = null;


public function mount(): void
{
    $this->user = Auth::user();
    Log::info('User: ' . $this->user);

    if ($this->user){
        Log::info('Mount started');
        $this->form->fill([
            'email' => $this->user->email,
            'name' => $this->user->name,
        ])->statePath('data');
    }
}
    public function form(Form $form): Form
    {
        return $form
        ->schema([
            Card::make()->schema([

                TextInput::make('name'),
                TextInput::make('email')
                ])
        ])->statePath('data');
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
