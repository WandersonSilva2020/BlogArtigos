<!DOCTYPE html>
@include('navbarMinhaConta')
@section('conteudo')
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    </head>
<body style="zoom: 90%;">
    <div class="container ">
        <img alt="Lista Instaset" class="text-center mx-auto my-4" height="138px; " id="Header1_headerimg" src="http://4.bp.blogspot.com/-_cWo_SzcQjI/WCdQlU4p6LI/AAAAAAAABdQ/aP1-vEajWHclxLkiqtweFd6ynh-7hJlMACK4B/s1600/instaset.png" style="display: block" width="372px;">
    </div>
    <div class="container">
        <div class="row">
            <div class="card" style="width: 16rem; margin-left:1rem;">
                <img src="https://1.bp.blogspot.com/-wnV4ZvWjJaQ/VupiUH0Il2I/AAAAAAAADYs/rwc4kAnERYgXU8EXqsQGrH5-_o8a3_28w/s1600/business-839788_960_720.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                <p class="card-text">
                    <a href="#">
                        <h6>Titulo da noticia</h6>
                    </a>
                    <p>Noticia de teste, apenas para fins ilustrativos</p>
                </p>
                </div>
            </div>
            <div class="card" style="width: 16rem; margin-left:1rem;">
                <img src="https://1.bp.blogspot.com/-wnV4ZvWjJaQ/VupiUH0Il2I/AAAAAAAADYs/rwc4kAnERYgXU8EXqsQGrH5-_o8a3_28w/s1600/business-839788_960_720.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                <p class="card-text">
                    <a href="#">
                        <h6>Titulo da noticia</h6>
                    </a>
                    <p>Noticia de teste, apenas para fins ilustrativos</p>
                </p>
                </div>
            </div>
            <div class="card" style="width: 16rem; margin-left:1rem;">
                <img src="https://1.bp.blogspot.com/-wnV4ZvWjJaQ/VupiUH0Il2I/AAAAAAAADYs/rwc4kAnERYgXU8EXqsQGrH5-_o8a3_28w/s1600/business-839788_960_720.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                <p class="card-text">
                    <a href="#">
                        <h6>Titulo da noticia</h6>
                    </a>
                    <p>Noticia de teste, apenas para fins ilustrativos</p>
                </p>
                </div>
            </div>
            <div class="card" style="width: 16rem; margin-left:1rem;">
                <img src="https://1.bp.blogspot.com/-wnV4ZvWjJaQ/VupiUH0Il2I/AAAAAAAADYs/rwc4kAnERYgXU8EXqsQGrH5-_o8a3_28w/s1600/business-839788_960_720.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                <p class="card-text">
                    <a href="#">
                        <h6>Titulo da noticia</h6>
                    </a>
                    <p>Noticia de teste, apenas para fins ilustrativos</p>
                </p>
                </div>
            </div>

        </div>
    </div>
    <div class="container-fluid">
        <div class="row ">
            <div class="col-md-9  mt-4" style="max-width: 1000px; margin-left:5%;">
                <div class="row bg-dark border rounded">
                    <span class="text-white">Novos assuntos</span>
                </div>
                @foreach ($postagens as $postagem)
                    <div class="row m-2">
                        <div class="card border border-black shadow" style="max-width: 940px;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="{{$postagem->foto}}" style="min-width: 310px; min-height:210px;" class="img-fluid m-1 rounded" alt="...">
                                </div>
                                    <div class="col-md-8">
                                    <div class="card-body" style="margin-left: 1rem;">
                                        <h5 class="card-title">{{$postagem->titulo}}</h5>
                                        <div class="card-text">{!! mb_substr($postagem->descricao_postagem, 0, 170) !!}... </div>
                                        <p class="card-text"><small class="text-muted">{{ date('d/m/Y', strtotime($postagem->created_at)) }}</small></p>
                                        <a href="/postagem/{{$postagem->id}}" class="btn btn-primary">Saiba mais</a>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="col-md-3 " style="max-width: 300px; margin-left:1%;">
                <div class="row">
                    <span class="text-white ml-2 bg-dark mt-4">Autores</span>
                </div>
                <div class="row">

                </div>

            </div>
        </div>
    </div>
</body>

</html>

