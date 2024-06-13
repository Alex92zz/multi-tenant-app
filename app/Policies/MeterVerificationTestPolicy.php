<?php

namespace App\Policies;

use App\Models\User;
use App\Models\MeterVerificationTest;
use Illuminate\Auth\Access\HandlesAuthorization;

class MeterVerificationTestPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return bool
     */
    public function viewAny(User $user): bool
    {
        return $user->can('view_any_meter::verification::test');
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\MeterVerificationTest  $meterVerificationTest
     * @return bool
     */
    public function view(User $user, MeterVerificationTest $meterVerificationTest): bool
    {
        return $user->can('view_meter::verification::test');
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return bool
     */
    public function create(User $user): bool
    {
        return $user->can('create_meter::verification::test');
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\MeterVerificationTest  $meterVerificationTest
     * @return bool
     */
    public function update(User $user, MeterVerificationTest $meterVerificationTest): bool
    {
        return $user->can('update_meter::verification::test');
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\MeterVerificationTest  $meterVerificationTest
     * @return bool
     */
    public function delete(User $user, MeterVerificationTest $meterVerificationTest): bool
    {
        return $user->can('delete_meter::verification::test');
    }

    /**
     * Determine whether the user can bulk delete.
     *
     * @param  \App\Models\User  $user
     * @return bool
     */
    public function deleteAny(User $user): bool
    {
        return $user->can('delete_any_meter::verification::test');
    }

    /**
     * Determine whether the user can permanently delete.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\MeterVerificationTest  $meterVerificationTest
     * @return bool
     */
    public function forceDelete(User $user, MeterVerificationTest $meterVerificationTest): bool
    {
        return $user->can('{{ ForceDelete }}');
    }

    /**
     * Determine whether the user can permanently bulk delete.
     *
     * @param  \App\Models\User  $user
     * @return bool
     */
    public function forceDeleteAny(User $user): bool
    {
        return $user->can('{{ ForceDeleteAny }}');
    }

    /**
     * Determine whether the user can restore.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\MeterVerificationTest  $meterVerificationTest
     * @return bool
     */
    public function restore(User $user, MeterVerificationTest $meterVerificationTest): bool
    {
        return $user->can('{{ Restore }}');
    }

    /**
     * Determine whether the user can bulk restore.
     *
     * @param  \App\Models\User  $user
     * @return bool
     */
    public function restoreAny(User $user): bool
    {
        return $user->can('{{ RestoreAny }}');
    }

    /**
     * Determine whether the user can replicate.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\MeterVerificationTest  $meterVerificationTest
     * @return bool
     */
    public function replicate(User $user, MeterVerificationTest $meterVerificationTest): bool
    {
        return $user->can('{{ Replicate }}');
    }

    /**
     * Determine whether the user can reorder.
     *
     * @param  \App\Models\User  $user
     * @return bool
     */
    public function reorder(User $user): bool
    {
        return $user->can('{{ Reorder }}');
    }

}
