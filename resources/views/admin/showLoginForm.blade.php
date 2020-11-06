<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form class="form-sigin" method="post" action="{{route('admin.login.do')}}">
        @csrf
        @if($errors->all())
            @foreach($errors->all() as $error){
                <div class="alert alert-danger" role="alert">
                    {{$error}}
                </div>
            @endforeach
        @endif
        <input type="email" placeholder="E-mail" name="email" id="email">
        <input type="password" placeholder="Senha" name="password" id="password">
        
        <button type="submit">Login</button>
    </form>
</body>
</html>