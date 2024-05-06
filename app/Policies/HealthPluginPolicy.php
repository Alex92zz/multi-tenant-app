<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Auth\Access\Response;
use ShuvroRoy\FilamentSpatieLaravelHealth\Pages\HealthCheckResults as BaseHealthCheckResults;
use BezhanSalleh\FilamentShield\Traits\HasPageShield;
class HealthPluginPolicy
{
    use HandlesAuthorization;
    use HasPageShield;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return bool
     */
    public function viewAny(User $user): bool
    {
        return $user->can('view_any_health_check_result');
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $authUser
     * @param  \App\Models\User  $user
     * @return bool
     */
    public function view(User $authUser, User $user): bool
    {
        return $authUser->can('view_user');
    }
}
