<?php

namespace App\Mail;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class WithdrawRequest extends Mailable
{
    use Queueable, SerializesModels;

    public $user;
    public $amount;
    public $wallet;
    public $newwallet;
    public $address;

    /**n
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(User $user, $amount, $wallet, $newwallet, $address)
    {
        $this->user = $user;
        $this->amount = $amount;
        $this->wallet = $wallet;
        $this->newwallet = $newwallet;
        $this->address = $address;

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.withdraw_request')
        ->subject('Withdraw Request');
    }
}
