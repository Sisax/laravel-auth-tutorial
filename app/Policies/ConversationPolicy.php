<?php

namespace App\Policies;

use App\Models\Conversation;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ConversationPolicy
{
    use HandlesAuthorization;

    // a before function mindig a többi előtt fut le automatikusan
    public function before(User $user) {
        // mindig egy if-el ellenőrizzünk és ne egyből returnuljünk
        if ($user -> id === 4) { //admin id-ja jelent esetben
            return true;
        }
    }

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function update(?User $user, Conversation $conversation)
    {
        return $conversation->user->is($user);
    }

}
