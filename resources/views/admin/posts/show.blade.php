@extends('layouts.main')
@section('content')
<div class="col-lg-8">

    <!-- Title -->
    <h1 class="mt-4">Show {{ $data->title }}</h1>

    <hr/>
    {{ Form::model($data, ['route'=>['post.index'], 'method'=>'GET']) }}
        @include('admin.posts.partials.form', ['btn'=>'Back', 'disable'=>'disable','readonly'=>'readonly'])
    {{ Form::close() }}
    
</div>


@endsection