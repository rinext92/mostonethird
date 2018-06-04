@extends('layouts.main')
@section('content')
<div class="col-lg-8">

    <!-- Title -->
    <h1 class="mt-4">Logs</h1>

    <hr/>

    @component('compacts.tables.log-list', ['data'=>$data])
	    
	@endcomponent
    

</div>
@endsection