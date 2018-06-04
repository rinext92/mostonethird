<?php

namespace App\Repository;
use Bosnadev\Repositories\Eloquent\Repository;

class PostRepo extends Repository{

    public function model()
    {
        return 'App\Models\Post';
    }

}