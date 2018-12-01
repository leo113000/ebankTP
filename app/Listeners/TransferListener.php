<?php

namespace App\Listeners;

use App\Events\TransferRealiced;
use App\Transfer;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class TransferListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  Transfer  $event
     * @return void
     */
    public function handle(TransferRealiced $event)
    {
        $pending = $this->receiverHandler($event->transfer);

        $event->transfer->transfer_status_id = $pending ? 1 : 2;
        $event->transfer->save();

        Movement::create([
                'value' => $event->transfer->value,
                'description' => "Transferencia a " . $event->transfer->CBU,
                'account_id' => $event->transfer->sender_account_id,
                'movement_type_id' => 2,
            ]);
    }

    private function receiverHandler(Transfer $transfer){

        $pending = true;

        $receiverAccount = App\Accounts::where('CBU',$event->transfer->CBU)->first();

        if(!is_null($receiverAccount)){

            $receiverAccount->balance += $transfer->value;

            $senderAccount = App\Accounts::find($event->transfer->sender_account_id);
            
            $pending = false;

            Movement::create([
                'value' => $transfer->value,
                'description' => "Transferencia recibida de " . $senderAccount->CBU,
                'account_id' => $receiverAccount->id,
                'movement_type_id' => 1,
            ]);

            $receiverAccount->save();
        }

        return $pending;
    }
}
