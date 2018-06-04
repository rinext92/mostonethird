<?php

namespace App\Repository;
use Bosnadev\Repositories\Eloquent\Repository;

// use App\Models\Log;

class SystemLogRepo extends Repository{

    public function model()
    {
        return 'App\Models\Log';
    }

}