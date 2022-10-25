<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div id="content" >
    @foreach ($data as $row)
        
    <div>
        <div> Name Promotion : {{ $row->name }} </div>
        <div><a href="{{ url('Promotion', $row->id . '/edit') }}">Edit</a></div>
    </div>

    @endforeach
</div>


</body>
</html>