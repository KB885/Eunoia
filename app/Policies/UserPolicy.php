<?php

namespace App\Policies;

use App\Models\User;

class UserPolicy
{
    /**
     * Determine whether the user can update the user.
     *
     * @param  \App\Models\User  $currentUser
     * @param  \App\Models\Article  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $currentUser, User $user)
    {
        return $currentUser->id === $user->id;
    }
}
