<?php

namespace App\Mail;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class DepositRequest extends Mailable
{
    use Queueable, SerializesModels;

    public $user;
    public $amount;
    public $wallet;
    public $cointype;
    public $usercoin;
    public $coin;

    /**n
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(User $user, $amount, $wallet, $cointype, $usercoin, $coin)
    {
        $this->user = $user;
        $this->amount = $amount;
        $this->wallet = $wallet;
        $this->cointype = $cointype;
        $this->usercoin = $usercoin;
        $this->coin = $coin;

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.deposit_request')
        ->subject('Deposit Request');
    }
}
