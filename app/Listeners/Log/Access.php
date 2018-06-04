<?php

namespace App\Listeners\Log;

use App\Events\EventLogs\SystemLogs;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Traits\HostHelperTrait;

class Access
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
     * @param  SystemLogs  $event
     * @return void
     */
    public function handle(SystemLogs $event)
    {
        $event->logAccess->create(
            [
                'user_ipaddress'=>request()->getClientIp(),
                'action'=>$event->action,
                'status'=>$event->status,
                'userid'=>$event->userid,
            ]

        );
    }
}
