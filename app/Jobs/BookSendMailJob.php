<?php

namespace App\Jobs;

use App\Mail\BookAdminEmail;
use App\Mail\BookClientEmail;
use App\Models\Order;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class BookSendMailJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    public Order $order;
    /**
     * Create a new job instance.
     */
    public function __construct(Order $order)
    {
        $this -> order = $order;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $order = $this->order;
        Mail::to('nguyenngocthien7742@gmail.com')->send(new BookAdminEmail($order));
        Mail::to('nguyenngocthien7742@gmail.com')->send(new BookClientEmail($order));
    }
}
