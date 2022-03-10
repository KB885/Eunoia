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
    public function update(User $current_user, User $user)
    {
        return $current_user->id === $user->id;
    }
}
