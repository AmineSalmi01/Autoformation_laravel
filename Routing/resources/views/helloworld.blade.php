


{{-- <h1>Hello World</h1> --}}

<form method="post" action="/user">
    
    @csrf
    <input type="text" name="input">
    <button type="submit">Save</button>
</form>