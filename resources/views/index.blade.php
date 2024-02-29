<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Login..</title>

        
        <!-- Fonts -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link href="{{url('assets/css/style.css')}}" rel="stylesheet" />

        <!-- Styles -->
</head>
<body class="w-100 h-100">
    <div class="container ">
        <div class="formulario">
            <form action="/ordem" method="post" class="form">
                @csrf
                <div class="mb-3">
                    <h2 class="modal-title">Login...</h2>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email:</label><br>
                    <input type="text" name="text" class="input" placeholder="Email">                        
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Senha:</label><br>
                    <input type="text" name="text" class="input" placeholder="Senha">                        
                </div>
                <button>
                    <span class="circle1"></span>
                    <span class="circle2"></span>
                    <span class="circle3"></span>
                    <span class="circle4"></span>
                    <span class="circle5"></span>
                    <span class="text">Entrar</span>
                </button>
            </form>
        </div>
    </div>
</body>
</html>