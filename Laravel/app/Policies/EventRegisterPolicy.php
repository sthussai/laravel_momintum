<?php

namespace App\Policies;

use App\User;
use App\EventRegister;
use Illuminate\Auth\Access\HandlesAuthorization;

class EventRegisterPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the event register.
     *
     * @param  \App\User  $user
     * @param  \App\EventRegister  $eventRegister
     * @return mixed
     */
    public function show(User $user, EventRegister $eventRegister)
    {
        //
        return $eventRegister->owner_id == Auth::id();
    }

    /**
     * Determine whether the user can create event registers.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the event register.
     *
     * @param  \App\User  $user
     * @param  \App\EventRegister  $eventRegister
     * @return mixed
     */
    public function update(User $user, EventRegister $eventRegister)
    {
        //

        return $user->id === $eventRegister->owner_id;
    }

    /**
     * Determine whether the user can delete the event register.
     *
     * @param  \App\User  $user
     * @param  \App\EventRegister  $eventRegister
     * @return mixed
     */
    public function delete(User $user, EventRegister $eventRegister)
    {
        //
        return $user->id === $eventRegister->owner_id;
    }

    /**
     * Determine whether the user can restore the event register.
     *
     * @param  \App\User  $user
     * @param  \App\EventRegister  $eventRegister
     * @return mixed
     */
    public function restore(User $user, EventRegister $eventRegister)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the event register.
     *
     * @param  \App\User  $user
     * @param  \App\EventRegister  $eventRegister
     * @return mixed
     */
    public function forceDelete(User $user, EventRegister $eventRegister)
    {
        //
    }
}
