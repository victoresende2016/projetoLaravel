<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <title>Cadastro de Produto</title>
    <link href="{{ asset('css/app.css')}}" rel="stylesheet">
</head>
<body>
    <div class="container">
        <main role="main">
            @hasSection ('body')
                @yield('body')    
            @endif
    </div>
<script src="{{asset('js/app.js')}}" type="text/javascript"></script>
</body>
</html>