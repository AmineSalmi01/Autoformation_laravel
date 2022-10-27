<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <button><a href="{{ route('Promotion.create') }}">add Promotion</a></button>
    <input type="search" name="search" id="search" placeholder="search">
    <div id="content" >
    @foreach ($data as $row)
        
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
</div>

    <script src="{{ URL::asset('js/script.js') }}"></script>
</body>
</html>