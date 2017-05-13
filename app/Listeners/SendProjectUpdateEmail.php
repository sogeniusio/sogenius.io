<?php

namespace App\Listeners;

use App\Events\ProjectsChanged;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendProjectUpdateEmail
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
     * @param  ProjectsChanged  $event
     * @return void
     */
    public function handle(ProjectsChanged $event)
    {
        //
    }
}
