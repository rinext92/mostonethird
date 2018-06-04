@extends('layouts.main')
@section('content')
<div class="col-lg-8">

    <!-- Title -->
    <h1 class="mt-4">Edit {{ $data->title }}</h1>

    <hr/>
    {{ Form::model($data, ['route'=>['post.update', $data->id], 'method'=>'PUT']) }}
    @include('admin.posts.partials.form', ['btn'=>'Update', 'disable'=>'enable', 'readonly'=>''])
    
    {{ Form::close() }}

    
</div>


@endsection