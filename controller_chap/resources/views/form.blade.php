
<form method="GET" action="{{ route('send') }}">
    
    @csrf
    <input type="text" name="input">
    <button type="submit">Save</button>
</form>