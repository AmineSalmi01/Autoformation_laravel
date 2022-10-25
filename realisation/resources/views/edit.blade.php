<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action=" {{ route('Promotion.update', $data[0]->id_promo) }} " method="POST">
        @csrf
        @method('PUT')
        <input type="text" name="update_input" value="{{ $data[0]->name }}">
        <input type="submit" value="update">
    </form>

    @foreach ($data as $row)
        <div>
            <p>{{$row->nom}} - {{$row->prenom}} - {{$row->email}}</p>
        </div>
    @endforeach
</body>
</html>