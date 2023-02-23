<?php

namespace App\Policies;

use App\Models\Cuidador;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class CuidadorPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */

    public function before(User $user, $ability)
    {
        if($user->id===1) return true;
    }

    public function viewAny(User $user)
    {
        return true;
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Cuidador  $cuidador
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, Cuidador $cuidador)
    {
        return $user->id === $cuidador->user_id;
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Cuidador  $cuidador
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, Cuidador $cuidador)
    {
        return $user->id === $cuidador->user_id;
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Cuidador  $cuidador
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, Cuidador $cuidador)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Cuidador  $cuidador
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, Cuidador $cuidador)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Cuidador  $cuidador
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, Cuidador $cuidador)
    {
        //
    }
}
