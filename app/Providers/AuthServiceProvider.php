<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use App\Policies\ConversationPolicy;
use App\Models\User;
use App\Models\Conversation;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
        'App\Models\Conversation' => 'App\Policies\ConversationPolicy'
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        // ezzel az adminnak mindenhez adunk jogot globálisan
        Gate::before(function (User $user) {
            if ($user->id === 4) {
                return true;
            }
        })

        // Gate::define('update', function (?User $user, Conversation $conversation) {
        //     return $user->id === $conversation->user->id;
        // });
    }
}
