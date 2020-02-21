<?php

namespace App\Policies;

use App\User;
use App\Programe;
use Illuminate\Auth\Access\HandlesAuthorization;

class ProgramePolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any programe.
     *
     * @param  App\User  $user
     * @return bool
     */
    public function viewAny(User $user)
    {
        return false;
    }

    /**
     * Determine whether the user can view the programe.
     *
     * @param  App\User  $user
     * @param  App\Programe  $programe
     * @return bool
     */
    public function view(User $user, Programe $programe)
    {
        return false;
    }

    /**
     * Determine whether the user can create a programe.
     *
     * @param  App\User  $user
     * @return bool
     */
    public function create(User $user)
    {
        return false;
    }

    /**
     * Determine whether the user can update the programe.
     *
     * @param  App\User  $user
     * @param  App\Programe  $programe
     * @return bool
     */
    public function update(User $user, Programe $programe)
    {
        return false;
    }

    /**
     * Determine whether the user can delete the programe.
     *
     * @param  App\User  $user
     * @param  App\Programe  $programe
     * @return bool
     */
    public function delete(User $user, Programe $programe)
    {
        return false;
    }

    /**
     * Determine whether the user can restore the programe.
     *
     * @param  App\User  $user
     * @param  App\Programe  $programe
     * @return bool
     */
    public function restore(User $user, Programe $programe)
    {
        return false;
    }

    /**
     * Determine whether the user can permanently delete the programe.
     *
     * @param  App\User  $user
     * @param  App\Programe  $programe
     * @return bool
     */
    public function forceDelete(User $user, Programe $programe)
    {
        return false;
    }
}
