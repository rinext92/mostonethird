<?php

namespace App\Events\EventLogs;

use App\Events\Event;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use App\Repository\SystemLogRepo;

class SystemLogs
{
    use SerializesModels;

    /**
     * @var SystemLogRepo
     */
    public $logAccess;
    /**
     * @var
     */
    public $action;
    /**
     * @var
     */
    public $status;

    public $userid;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(SystemLogRepo $logAccess,$action,$status,$userid)
    {
        //
        $this->logAccess = $logAccess;
        $this->action = $action;
        $this->status = $status;
        $this->userid = $userid;
    }

    /**
     * Get the channels the event should be broadcast on.
     *
     * @return array
     */
    public function broadcastOn()
    {
        return [];
    }
}
