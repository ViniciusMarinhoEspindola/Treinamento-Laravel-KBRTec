@extends('site.includes.principal')
@include('site.includes.navbar')
@section('conteudo')
    <main class="row my-5">
        <h1 class=" text-center text-danger col-12">Editar categorias</h1>
        
        <form action="{{route('categoria.update', $categoria->id)}}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-row">
                <div class="form-group col-xl-12">
                    <label for="categoria">Categoria:</label>
                    <input class="form-control" value="{{$categoria->categorias}}" type="text" id="categoria" name="categorias">
                </div>
                
                <div class="form-group col-12">
                    <input class="form-control mx-3 col-5 btn btn-danger" type="submit" name="enviar" value="Editar">
                    <input class="form-control mx-2 col-5 btn btn-danger" type="reset" name="limpar" value="Limpar">
                </div>
            </div>
        </form>
    </main>
@stop