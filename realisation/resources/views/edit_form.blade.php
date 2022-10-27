<form action="{{ route('edit_apprenants', ['id'=>$data->id]) }}" method="POST">
    @csrf
    <input type="text" name="nom" value="{{ $data->nom }}">
    <input type="text" name="prenom" value="{{ $data->prenom }}">
    <input type="text" name="email" value="{{ $data->email }}">
    <input type="hidden" name="promo_id" value="{{ $data->promo_id }}">
    <input type="submit" name="submit">
</form>