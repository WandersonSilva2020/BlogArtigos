@extends('navbar')
    @section('conteudo')
<div>
    <div class="container container-lg">
        <form action="/procurar" accept-charset="UTF-8">
            @csrf
            <div class="input-group input-group-lg m-4">
                <span class="input-group-text">
                <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                </svg>
                </span>
                <input type="text" name="pesquisa" class="form-control form-control-lg" id="pesquisa" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-md" placeholder="Prucure por um titulo...">
            </div>
        </form>
    </div>
    @if(isset($pesquisa))
        <div class="row m-1">
            <h5>Você procurou por: <span class="badge bg-secondary">{{$pesquisa?$pesquisa:''}}</span></h5>
        </div>
        <div class="container-fluid">
            <div class="container-fluid text-center">
                <table class="table table-responsive">
                    <thead class="table-dark">
                        <tr>
                        <th scope="col-1">id</th>
                        <th scope="col-5">Titulo</th>
                        <th scope="col-1">Data de Criação</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($postagens as $postagem)
                            <tr>
                                <th scope="row">{{$postagem->id}}</th>
                                <td><a href="/postagem/{{$postagem->id}}">{{$postagem->titulo}}</a></td>
                                <td>{{ date('d/m/Y', strtotime($postagem->created_at))}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>   
        </div>
    @endif
</div>
@endsection
