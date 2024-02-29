<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>O.S</title>

    <!-- Add your CSS and JavaScript links here -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link href="{{url('assets/css/style.css')}}" rel="stylesheet" />
</head>
<body class="w-100 h-100">
    <div class="container">
        <div class="formulario">
            <form action="/" method="get" class="form">
            @csrf
                <div class="mb-3">
                    <h2 class="modal-title">Ordem de Serviço</h2>
                </div>
                <div class="row mb-1">
                    <div class="col-md-6">
                        <label for="cpf" class="form-label">CPF:</label>
                        <input type="text" name="text" class="input" placeholder="CPF">
                    </div>
                    <div class="col-md-6">
                        <label for="nome" class="form-label">Nome:</label>
                        <input type="text" name="text" class="input" placeholder="Nome">
                    </div>
                </div>
                <div class="row mb-1">
                    <div class="col-md-6">
                        <label for="telefone" class="form-label">Telefone:</label>
                        <input type="text" name="text" class="input" placeholder="Telefone">
                    </div>
                    <div class="col-md-6">
                        <label for="modelo" class="form-label">Modelo:</label>
                        <input type="text" name="text" class="input" placeholder="Modelo">
                    </div>
                </div>
                <div class="row mb-1">
                    <div class="col-md-6">
                        <label for="telefone" class="form-label">Marca:</label>
                        <input type="text" name="text" class="input" placeholder="Marca">
                    </div>
                    <div class="col-md-6">
                        <label for="modelo" class="form-label">Defeito:</label>
                        <input type="text" name="text" class="input" placeholder="Defeito">
                    </div>
                </div>
                <button >
                    <span class="circle1"></span>
                    <span class="circle2"></span>
                    <span class="circle3"></span>
                    <span class="circle4"></span>
                    <span class="circle5"></span>
                    <span class="text">Registrar</span>
                </button>
            </form>
        </div>
    </div>
</body>
</html>
