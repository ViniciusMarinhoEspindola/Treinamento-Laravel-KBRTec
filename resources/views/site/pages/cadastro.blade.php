@extends('site.includes.principal')
@include('site.includes.navbar')
@section('conteudo')
<main class="row mt-5">
    <h1 class=" text-center text-danger col-12">Cadastro</h1>
    

    <form action="/cadastrar" method="post" enctype="multipart/form-data">

        <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />

        <div class="form-group col-12">
            <label for="name">Nome:</label>
            <input required class="form-control" id="name" type="text" name="name">
        </div>
        <div class="form-group col-12">
            <label for="email">E-mail:</label>
            <input required class="form-control" id="email" type="email" name="email">
        </div>
        <div class="form-group col-12">
            <label for="nascimento">Data de Nascimento:</label>
            <input required class="form-control" id="nascimento" type="date" name="nascimento">
        </div>
        <div class="form-group col-12">
            <label for="categoria">Categoria:</label>
        </div>
        <div class="form-group col-12">
            <label for="foto">Foto:</label>
            <input required class="form-control" id="foto" accept="image/*" type="file" name="foto">
        </div>
        
        <div class="form-group col-12">
            <input class="form-control mx-3 col-5 btn btn-danger" type="submit" name="enviar" value="Enviar">
            <input class="form-control mx-2 col-5 btn btn-danger" type="reset" name="limpar" value="Limpar">
        </div>
    </form>
</main>