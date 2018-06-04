@extends('layouts.main')
@section('content')
<div class="col-lg-8">

    
       
    
    <!-- Title -->
    <h1 class="mt-4">{{ $data->title }}</h1>
    <hr>

    <!-- Date/Time -->
    <p>Posted on {{ date('M d, Y', strtotime($data->created_at)) }}</p>

    <hr>

    <!-- Post Content -->
    <p>{!! html_entity_decode($data->content) !!}</p>
    

</div>
@endsection