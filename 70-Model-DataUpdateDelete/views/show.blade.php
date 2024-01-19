<table>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Mobile</th>
        <th>Country</th>
    </tr>
    @foreach ($customer_data as $item )
    <tr>
        <th>{{$loop->iteration}}</th>
        <th>{{$item->name}}</th>
        <th>{{$item->email}}</th>
        <th>{{$item->phone}}</th>
        <th>{{$item->country}}</th>
    </tr>
</table>
@endforeach



{{-- @foreach ($customer_data as $item )
    {{$item->name}}<br>
@endforeach --}}