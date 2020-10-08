<?php

namespace App\Observers;

use App\Notifications\NewPersonel;
use App\Personeli;
use Illuminate\Support\Facades\Notification;

class PersoneliObserver
{
    /**
     * Handle the personeli "created" event.
     *
     * @param  \App\Personeli  $personeli
     * @return void
     */
    public function created(Personeli $personeli)
    {
        Notification::route('mail', $personeli->email)
            ->notify(new NewPersonel());
    }

    /**
     * Handle the personeli "updated" event.
     *
     * @param  \App\Personeli  $personeli
     * @return void
     */
    public function updated(Personeli $personeli)
    {
        //
    }

    /**
     * Handle the personeli "deleted" event.
     *
     * @param  \App\Personeli  $personeli
     * @return void
     */
    public function deleted(Personeli $personeli)
    {
        //
    }

    /**
     * Handle the personeli "restored" event.
     *
     * @param  \App\Personeli  $personeli
     * @return void
     */
    public function restored(Personeli $personeli)
    {
        //
    }

    /**
     * Handle the personeli "force deleted" event.
     *
     * @param  \App\Personeli  $personeli
     * @return void
     */
    public function forceDeleted(Personeli $personeli)
    {
        //
    }
}
