<?php

namespace App\Http\Controllers\UserController;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repository\PostRepo;
use App\Repository\UserRepo;
use App\Models\Post;

class UserController extends Controller
{   
    private $post, $user;

    public function __construct(PostRepo $post, UserRepo $user){
        $this->post=$post;
        $this->user=$user;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function home()
    {   
        $data = Post::where('status',1)->orderBy('id','DESC')->paginate(5);
        return view('index', compact('data'));
    }

    public function index(){
        $data = $this->user->paginate(10);
        return view('admin.user.index', compact('data'));
    }

    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = $this->user->find($id);
        return view('admin.user.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
