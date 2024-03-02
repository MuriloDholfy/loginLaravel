@extends('templates.template');

@section('contente');
<title>O.S</title>
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
            <button>
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
@endsection