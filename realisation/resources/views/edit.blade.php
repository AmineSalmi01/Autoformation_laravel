<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
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




        <!-- Button  trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
            Add appreanats
        </button>
  
        <!-- Modal -->
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Create apprenants</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                   <form action="{{ route('add_appr') }}" method="POST">
                        
                        @csrf
                        <input type="text" name="prenom" placeholder="prenome">
                        <input type="tex" name="nom" placeholder="nome">
                        <input type="email" name="email" placeholder="email">
                        
                        <input type="hidden" name="id_promotion" value="{{ $data[0]->id_promotion }}">  
                   
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary"><a href="{{route('Form_appr', ['id'=>$data[0]->id_promotion])}}">ajouter appranants</a></button>
                </div>
            </form>
            </div>
            </div>
        </div>
       
    @endforeach
</body>
</html>