<?php

namespace App\Http\Controllers\AuthController;

use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Event;
use App\Events\EventLogs\SystemLogs;
use App\Repository\SystemLogRepo;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Session;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    private $systemLogRepo;

    protected $maxAttempts = 5; //login attempts
    protected $decayMinutes = 0.5;// login lock time


    public function __construct(SystemLogRepo $systemLogRepo){
        $this->systemLogRepo=$systemLogRepo;
    }

    public function index(){
        return redirect('/');
    }

    public function doLogin(Request $request){

        $credentials = $request->only('username', 'password');
        $credentials = array_merge($credentials,['status'=>0]);

        if ($this->hasTooManyLoginAttempts($request)) {
            $this->fireLockoutEvent($request);
            $this->sendLockoutResponse($request);

            Session::flash('alert-warning','');
            return redirect('/');
        }

        if(Auth::attempt($credentials))
        {
            if (Auth::check()){
                Event::fire(new SystemLogs($this->systemLogRepo,"Login","Success",Auth::user()->id));
                Session::flash('alert-success', 'Success Login');
                return redirect('/');
               
            }else{
                Event::fire(new SystemLogs($this->systemLogRepo,"Login","Error Login",""));
                Session::flash('alert-warning', 'Error Login');
                return redirect('/');
            }
            
        }else{
            $this->incrementLoginAttempts($request);
            Event::fire(new SystemLogs($this->systemLogRepo,"Login","Fail",""));
            Session::flash('alert-warning', 'Error Login');
            return redirect('/');
        }
       
    }

    public function doLogout(Request $request){
        Event::fire(new SystemLogs($this->systemLogRepo,"Logout","Success",Auth::user()->id));
        Auth::logout();
        return redirect('/');
    }

    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
