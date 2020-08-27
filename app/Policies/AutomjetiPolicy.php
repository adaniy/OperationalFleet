<?php

namespace App\Policies;

use App\User;
use App\automjeti;
use Illuminate\Auth\Access\HandlesAuthorization;

class AutomjetiPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        if($user->isAdmin())
            return true;
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\User  $user
     * @param  \App\automjeti  $automjeti
     * @return mixed
     */
    public function view(User $user, automjeti $automjeti)
    {
        if($user->isAdmin())
            return true;
    }


    /**
     * Determine whether the user can create models.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        if($user->isAdmin())
            return true;
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\User  $user
     * @param  \App\automjeti  $automjeti
     * @return mixed
     */
    public function update(User $user, automjeti $automjeti)
    {
        if($user->isAdmin())
            return true;
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\User  $user
     * @param  \App\automjeti  $automjeti
     * @return mixed
     */
    public function delete(User $user, automjeti $automjeti)
    {
        if($user->isAdmin())
            return true;
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\User  $user
     * @param  \App\automjeti  $automjeti
     * @return mixed
     */
    public function restore(User $user, automjeti $automjeti)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\User  $user
     * @param  \App\automjeti  $automjeti
     * @return mixed
     */
    public function forceDelete(User $user, automjeti $automjeti)
    {
        //
    }
}
