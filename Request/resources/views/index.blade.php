<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Amine Salmi</title>
</head>
<body>
    
    <form action="{{ route('Login_Form') }}" method="POST">
        @csrf

        <input type="email" placeholder="email" name="email"><br>
        <input type="password" placeholder="password" name="password"><br>
        <button name="submit">Submit</button>
    </form>
    
    
</body>
</html>