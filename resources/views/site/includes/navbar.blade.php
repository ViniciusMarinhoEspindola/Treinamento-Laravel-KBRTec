<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Crud Laravel</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menu" aria-controls="menu" aria-expanded="false" aria-label="Alterna navegação">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="menu">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="{{url('/')}}">Cadastrar</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url('categoria')}}">Categoria</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url('usuarios')}}">Listagem</a>
            </li>
        </ul>
    </div>
</nav>