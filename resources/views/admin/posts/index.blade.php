@extends('layouts.main')
@section('content')
<div class="col-lg-8">

    <!-- Title -->
    <h1 class="mt-4">List Post</h1>

    <hr/>

    <table  class="table table-bordered table-hover">
        <tr>
            <th>No</th>
            <th>Title</th>
            <!-- <th>Content</th> -->
            <th>Description</th>
            <th>Post Date</th>
            <th></th>
        </tr>
        @foreach($data as $no => $item)
        <tr>
            <td>{{ $data->firstItem() + $no}}</td>
            <td>{{ $item->title }}</td>
            <!-- <td>{!! html_entity_decode(substr($item->content, 0,15)) !!}{{ strlen($item->content) > 15 ? "..." : "" }}</td> -->
            <td>{!! html_entity_decode(substr($item->description, 0,15)) !!}{{ strlen($item->description) > 15 ? "..." : "" }}</td>
            <td>{{ date('M d, Y', strtotime($item->created_at)) }}</td>
            <td>
                
                {{ Form::open(['method'=>'DELETE', 'route'=>['post.destroy', $item->id], 'onsubmit'=>'return ConfirmDelete()']) }}
                <a href="{{ route('post.show', $item->id) }}" class="btn btn-primary">View</a>
                <a href="{{ route('post.edit', $item->id) }}" class="btn btn-primary">Edit</a>
                    {{ Form::submit('DELETE', ['class'=>'btn btn-danger']) }}
                {{ Form::close() }}

            </td>
        </tr>
        @endforeach
    </table>
    {!! $data->render() !!}
    
</div>

<script>

  function ConfirmDelete()
  {
  var x = confirm("Are you sure you want to delete?");
  if (x)
    return true;
  else
    return false;
  }

</script>

@endsection