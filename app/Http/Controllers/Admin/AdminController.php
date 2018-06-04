<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repository\SystemLogRepo;
use App\Models\Log;
use App\Models\User;
class AdminController extends Controller
{
    private $sysRepo;

    public function __construct(SystemLogRepo $sysRepo){
        $this->sysRepo = $sysRepo;
    }
    
    public function log(){
        $data = Log::orderBy('created_at','DESC')->paginate(10);
        return view('admin.log.log', compact('data'));
    }
}
