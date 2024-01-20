<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class SeatStatusEvent
{
    use Dispatchable, InteractsWithSockets, SerializesModels;
    public $seatNumbers;
    public $tourId;
    public $countSeat;
    /**
     * Create a new event instance.
     */
    public function __construct($seatNumbers, $tourId, $countSeat)
    {
        $this->seatNumbers = $seatNumbers;
        $this->tourId = $tourId;
        $this->countSeat = $countSeat;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return array<int, \Illuminate\Broadcasting\Channel>
     */
    public function broadcastOn(): array
    {
        return [
            new PrivateChannel('channel-name'),
        ];
    }
}
