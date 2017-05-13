<?php

namespace App\Listeners;

use App\Events\PostsChanged;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendPostUpdateEmail
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
     * @param  PostsChanged  $event
     * @return void
     */
    public function handle(PostsChanged $event)
    {
        //
    }
}
