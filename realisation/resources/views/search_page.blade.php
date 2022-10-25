@foreach ($promotion as $row)
<div>
    <div> Name Promotion : {{ $row->name }} </div>
    <div><a href="{{ url('Promotion', $row->id . '/edit') }}">Edit</a></div>

    <form action="{{ url('Promotion'.'/' . $row->id ) }}" method="POST">

        @csrf
        @method('DELETE')
        <button type="submit" >DELETE</button>
    </form>
</div>

@endforeach