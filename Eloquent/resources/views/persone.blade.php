<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    {{-- <h1>{{ $person->name }} : {{ $person->Number->Phone_Number }}</h1> --}}

    {{-- @foreach ($person as $item)
        <h1>{{ $item->name }} : {{ $item->Number->Phone_Number }}</h1>
   @endforeach --}}
   

   @foreach ($person as $item)
   <h3>{{ $item->name }}</h3>

        @foreach ($item->Number as $item)
            <h4>{{ $item->Phone_Number }}</h4>
        @endforeach
    @endforeach


</body>
</html>