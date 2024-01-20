<?php

namespace App\Providers;

use App\Events\OrderEvent;
use App\Events\SeatBook;
use App\Events\SeatStatusEvent;
use App\Events\TourCreate;
use App\Events\TourEdit;
use App\Listeners\CreateBookingTourSeat;
use App\Listeners\EditBookingTourSeat;
use App\Listeners\SeatQtyUpdate;
use App\Listeners\SeatStatusListener;
use App\Listeners\SendMail;
use App\Models\Tour;
use App\Observers\TourObserver;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event to listener mappings for the application.
     *
     * @var array<class-string, array<int, class-string>>
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
        TourCreate::class=> [
            CreateBookingTourSeat::class,
        ],
        TourEdit::class => [
          EditBookingTourSeat::class,  
        ],
        SeatBook::class =>[
            SeatQtyUpdate::class,
        ],
        OrderEvent::class => [
            SendMail::class,
        ],
        SeatStatusEvent::class=>[
            SeatStatusListener::class,
        ]
        
    
    ];

    protected $observers = [
        Tour::class=>[TourObserver::class],
    ];

    /**
     * Register any events for your application.
     */
    public function boot(): void
    {
        //
    }

    /**
     * Determine if events and listeners should be automatically discovered.
     */
    public function shouldDiscoverEvents(): bool
    {
        return false;
    }
}
