<?php

namespace App\Providers;

use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;
use App\Events\ProductPurchased;
use App\Listeners\AwardAchievements;
use App\Listeners\SendSharedCoupon;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
        // ProductPurchased::class => [
        //     AwardAchievements::class,
        //     SendSharedCoupon::class
        // ]
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    // automatikusan összeköti az eventeket a listenerekkel
    public function shouldDiscoverEvents() {
        return true;
    }
}
