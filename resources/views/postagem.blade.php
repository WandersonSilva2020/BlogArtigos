@extends('navbarMinhaConta')
    @section('conteudo')
    <html>
    <head>
    <style>

.center{
    display: flex;
    flex-wrap: wrap;
    margin:0 auto;
    padding:0 2%;
}

html,body{
    height:100%;
    background-color:black;
    
}

.texto-sobre h2{
    letter-spacing: 1;
    color:white;
}
    .texto-sobre p{
        letter-spacing: 1;
    }

section.sobre{
    height: calc(100% - 200px);
    bottom: -40px;
    position: relative;
}

section.sobre img{
  max-width: 300px;
}


.extras{
    
    position: relative;
    bottom:-500px;
    width: 900px;
    height:800px;
    border-radius:50%;
    background-color: red;
}

.social-media{
    position: absolute;
    right: 510px;
    top: -10rem
}

.social-media img{
    display: block;
    width:30px;
    margin:30px 0;
}

.texto-sobre{
    margin-top:20px;
    padding: -5px

}

.texto-sobre h2{
    font-size: 50px;
}

.texto-sobre p{

    color:white;
    font-size: 20px;
    font-weight: bold;
    max-width: 600px;
}

.texto-sobre button{
    border:0;
    background-color: red;
    color:white;
    border-radius:10px;
    
    height:30px;
    cursor: pointer;
}

.imagem-direita{
    float: right;

}
    </style>
    </head>
    <body>
        <section class="sobre">
            <div class="container-fluid" style="zoom: 90%">
                <div class="row">
                    <div class="col-md-7">
                        <div class="center">
                            <div class="col-md-7 text-left bg-primary badge badge-primary">
                                Categoria: {{$postagem->categoria}}
                            </div>
                            <div class="texto-sobre">
                                <h2 class="text-left"><span>{{$postagem->titulo}}</span></h2>
                                <p class="badge bg-white text-dark">Autor: {{$postagem->autor->name}}</p>
                                <p class="badge bg-white text-dark">Postado em: {{ date('d/m/Y', strtotime($postagem->created_at)) }}</p>
                                <br>
                                    <{!! $postagem->descricao_postagem !!}>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 d-flex justify-content-end">
                        <img  src="/{{$postagem->foto}}" style="min-width: 600px;min-height: 500px; max-width: 600px; max-height: 500px;" alt="Foto do postagem">
                    </div>
                </div>
                
                </div>
                
            </div>
        </section>
    </body>
</html>
@endsection
