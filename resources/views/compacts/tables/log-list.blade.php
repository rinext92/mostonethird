<table class="table table-bordered table-hover">
    <tr>
        <th>No</th>
        <th>IP Address</th>
        <th>Action</th>
        <th>Status</th>
        <th>User ID</th>
        <th>Date</th>
    </tr>
    @foreach($data as $no => $item)
        <tr>
            <td>{{ $data->firstItem() + $no}}</td>
            <td>{{ $item->user_ipaddress }}</td>
            <td>{{ $item->action }}</td>
            <td>{{ $item->status }}</td>
            <td>{{ $item->userid }}</td>
            <td>{{ $item->updated_at }}</td>
        </tr>
    @endforeach
</table>
{!! $data->render() !!}