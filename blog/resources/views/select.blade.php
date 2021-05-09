<table>
@foreach($selectKey as $item)
    <tr>
        <td>{{$item->name}}</td>
        <td>{{$item->class}}</td>
        <td>{{$item->roll}}</td>
        <td>{{$item->age}}</td>
        <td>{{$item->email}}</td>
    </tr>
@endforeach
</table>
