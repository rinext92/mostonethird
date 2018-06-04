@extends('layouts.main')
@section('content')
<div class="col-lg-8">

    <!-- Title -->
    <h1 class="mt-4">User List </h1>

    <hr/>
    <table class="table table-bordered table-hover">
        <tr>
            <th>No</th>
            <th>Username</th>
            <th>Email</th>
            <th></th>
        </tr>

        @foreach($data as $no => $user)
            <tr>
                <td>{{  $data->firstItem() + $no }} </td>
                <td>{{ $user->username }}</td>
                <td>{{ $user->email }}</td>
                <td><a href="{{ route('user.show', $user->id) }}" class="btn btn-primary">View</a></td>
            </tr>
        @endforeach
    </table>
    {!! $data->render() !!}
    
</div>


@endsection