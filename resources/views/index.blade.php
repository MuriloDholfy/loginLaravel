@extends('templates.template');

@section('contente');
<title>Login..</title>

</head>

<div class="container ">
    <div class="formulario">
        <form action="/ordem" method="post" class="form">
            @csrf
            <div class="mb-3">
                <h2 class="modal-title">Login...</h2>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email:</label><br>
                <input type="text" name="text" class="input custom-width" placeholder="Email">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Senha:</label><br>
                <input type="text" name="text" class="input custom-width" placeholder="Senha">
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
@endsection