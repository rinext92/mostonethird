<?php

namespace App\Http\Controllers\PostsController;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repository\PostRepo;
use Session;
use App\Models\Post;

class PostController extends Controller
{   
    private $post;

    public function __construct(PostRepo $post){
        $this->post=$post;
    }

    public function index(){
        $data = $this->post->paginate(10);
        return view('admin.posts.index', compact('data'));
    }

    public function create(){
        return view('admin.posts.create');
    }

    public function store(Request $request){
        $data = $request->all();

        $data = array_merge($data,['status'=>true]);
        
        try{
            $this->post->create($data);
            Session::flash('alert-success', 'Post Saved!');
            return redirect('admin/post/');
        }catch (\Exception $e){
            Session::flash('alert-success', 'Post Saved!');
            return redirect('admin/post/');
        }
        

    }

    public function show($id){
        $data = $this->post->find($id);
        return view('admin.posts.show', compact('data'));
    }

    public function edit($id){
        $data = $this->post->find($id);
        return view('admin.posts.edit', compact('data'));
    }

    public function update($id, Request $request){
        $data = $this->post->find($id);
        try{
            $data->update($request->all());
            Session::flash('alert-success', 'Post Saved!');
            return redirect('admin/post');
        }catch (\Exception $e){
            Session::flash('alert-warning', 'Update Error!');
            return redirect('admin/post/');
        }
        
       
    }

    public function destroy($id){
        $data = $this->post->find($id);
        try{
            $data->delete();
            Session::flash('alert-success', 'Post Deleted!');
            return redirect('admin/post');
        }catch (\Exception $e){
            Session::flash('alert-warning', 'Delete Error!');
            return redirect('admin/post/');
        }
    }
}
