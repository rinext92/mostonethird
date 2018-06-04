<?php

namespace App\Repository;
use Bosnadev\Repositories\Eloquent\Repository;

class UserRepo extends Repository{

    public function model()
    {
        return 'App\Models\User';
    }

}