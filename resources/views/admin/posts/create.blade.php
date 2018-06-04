@extends('layouts.main')
@section('content')
<div class="col-lg-8">

    <!-- Title -->
    <h1 class="mt-4">Create</h1>

    <hr/>
    {{ Form::open(['route'=>'post.store']) }}
        @include('admin.posts.partials.form', ['btn'=>'Save', 'disable'=>'enable', 'readonly'=>'']) 
    {{ Form::close() }}
    
</div>


@endsection