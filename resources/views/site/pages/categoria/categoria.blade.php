@extends('site.includes.principal')
@include('site.includes.navbar')
@section('conteudo')
<main class="row my-5">
    <div class="row col-3 my-5">
        <h1 class=" text-center text-danger col-12">Categorias</h1>
            
        <form action="{{route('categoria.store')}}" method="POST">
            @csrf
            <div class="form-row">
                <div class="form-group col-xl-12">
                    <label for="categoria">Nova Categoria:</label>
                    <input class="form-control" type="text" id="categoria" name="categorias">
                </div>
                
                <div class="form-group col-12">
                    <input class="form-control mx-3 col-5 btn btn-danger" type="submit" name="enviar" value="Adicionar">
                    <input class="form-control mx-2 col-5 btn btn-danger" type="reset" name="limpar" value="Limpar">
                </div>
            </div>
        </form>
    </div>
    <div class="row col-12">
        <div class="container">

            @if(session()->get('message'))    
                <div class="alert alert-success">
                    {{ session()->get('message') }}
                </div>
            @endif

            @if(session()->get('error'))    
                <div class="alert alert-danger">
                    {{ session()->get('error') }}
                </div>
            @endif

            <form method="GET" id="pesquisar" action="{{ route('categoria.index') }}" class="my-5 col-12">
                <div class="form-row">
                    <input type="search" placeholder="Buscar" name="search" class="form-control col-4">
                    <button type="submit" class="btn btn-danger">Buscar</button>
                </div>
            </form>

            <div class="table-responsive">
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">Categorias</th>
                            <th scope="col" colspan="2">Opções</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categorias as $categoria)
                            <tr>
                                <td>{{$categoria->categorias}}</td>
                                <td>
                                    <a class="btn" href="{{route('categoria.edit', $categoria->id)}}"><i class="ml-1 text-success fas fa-edit"></i></a>
                                </td>
                                <td>
                                    <form action="{{route('categoria.destroy', $categoria->id)}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn" type="submit">
                                            <i class="ml-1 text-danger far fa-trash-alt"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            
                        @endforeach 
                    </tbody>
                </table>
                
            </div>
        </div>
    </div>
</main>
@stop