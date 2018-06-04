@extends('layouts.main')
@section('content')
<div class="col-lg-8">

    
    <table class="table table-borderless" style="margin-top:10%;width:100%;table-layout:fixed;">
        @foreach($data as $no => $post)
            <tr class="border">
                <td>
                    <h3>{{ $post->title }}</h3>
                    <p>Posted on {{ date('M d, Y', strtotime($post->created_at)) }}</p>
                    <p>{!! html_entity_decode(substr($post->description, 0,200)) !!}{{ strlen($post->description) > 200 ? "..." : "" }}</p>
                    <p align="right"><a href="{{ route('item.show', $post->id) }}">read more</a></p>
                </td>
            </tr>
            <tr>
                <td></td>
            </tr>
        @endforeach
    </table>
    {!! $data->render() !!}
    <!-- Title
    <h1 class="mt-4">Post Title</h1> -->

    <!-- Author -->
    <!-- <p class="lead">
    by
    <a href="#">Start Bootstrap</a>
    </p>

    <hr> -->

    <!-- Date/Time -->
    <!-- <p>Posted on January 1, 2018 at 12:00 PM</p>

    <hr> -->

    <!-- Preview Image -->
    <!-- <img class="img-fluid rounded" src="http://placehold.it/900x300" alt="">

    <hr> -->

    <!-- Post Content -->
    <!-- <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus, vero, obcaecati, aut, error quam sapiente nemo saepe quibusdam sit excepturi nam quia corporis eligendi eos magni recusandae laborum minus inventore?</p>

    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut, tenetur natus doloremque laborum quos iste ipsum rerum obcaecati impedit odit illo dolorum ab tempora nihil dicta earum fugiat. Temporibus, voluptatibus.</p>

    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos, doloribus, dolorem iusto blanditiis unde eius illum consequuntur neque dicta incidunt ullam ea hic porro optio ratione repellat perspiciatis. Enim, iure!</p>

    <blockquote class="blockquote">
    <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
    <footer class="blockquote-footer">Someone famous in
        <cite title="Source Title">Source Title</cite>
    </footer>
    </blockquote>

    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error, nostrum, aliquid, animi, ut quas placeat totam sunt tempora commodi nihil ullam alias modi dicta saepe minima ab quo voluptatem obcaecati?</p>

    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum, dolor quis. Sunt, ut, explicabo, aliquam tenetur ratione tempore quidem voluptates cupiditate voluptas illo saepe quaerat numquam recusandae? Qui, necessitatibus, est!</p>

    <hr> -->

    <!-- Comments Form -->
    <!-- <div class="card my-4">
    <h5 class="card-header">Leave a Comment:</h5>
    <div class="card-body">
        <form>
        <div class="form-group">
            <textarea class="form-control" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    </div> -->

    <!-- Single Comment -->
    

    <!-- Comment with nested comments -->
    

</div>
@endsection