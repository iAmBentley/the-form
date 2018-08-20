<?php

namespace App\Mail;

use App\Order;
use App\Item;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class OrderEmail extends Mailable
{
    use Queueable, SerializesModels;
    public $order;
    public $items;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Order $order, $items)
    {
        $this->order = $order;
        $this->items = $items;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build(Order $order)
    {
        return $this->subject('New Store Order')->view('emails.order');
    }
}
