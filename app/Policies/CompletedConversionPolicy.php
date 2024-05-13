<?php

namespace App\Policies;

use App\Models\CompletedConversion;
use App\Models\User;
use Illuminate\Auth\Access\Response;
use Illuminate\Auth\Access\HandlesAuthorization;

class CompletedConversionPolicy
{

    use HandlesAuthorization;
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->can('view_any_completed::conversion');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, CompletedConversion $completedConversion): bool
    {
        return $user->can('view_completed::conversion');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->can('create_completed::conversion');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, CompletedConversion $completedConversion): bool
    {
        return $user->can('update_completed::conversion');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, CompletedConversion $completedConversion): bool
    {
        return $user->can('delete_completed::conversion');
    }

    /**
     * Determine whether the user can bulk delete.
     *
     * @param  \App\Models\User  $user
     * @return bool
     */
    public function deleteAny(User $user): bool
    {
        return $user->can('delete_any_completed::conversion');
    }

}
