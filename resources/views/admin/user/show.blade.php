@extends('layouts.main')
@section('content')
<div class="col-lg-8">

    <!-- Title -->
    <h1 class="mt-4">{{ $data->username }}</h1>

    <hr/>
    
    {{ Form::model($data, ['route'=>['user.index'], 'method'=>'GET']) }}
        @include('admin.user.partials.form', ['btn'=>'Back', 'disable'=>'disable','readonly'=>'readonly'])
    {{ Form::close() }}
    
</div>


@endsection