<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    </head>
<body style="zoom: 90%;">
    <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
            <div class="container">
                <div class="row align-items-center">
                    
                    <ul class="nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <img src="/img/download.png" alt="" width="30" height="24" class="d-inline-block align-text">
                                Tblog
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Início</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Procurar postagens</a>
                        </li>
                        <li class="nav-item"  style="margin-left: 95%; margin-top: -2.6rem;">
                            <div class="nav-link">
                                @if (Route::has('login'))
                                        @auth
                                            <a href="{{ url('/dashboard') }}" > 
                                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                                                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                                                <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                                                </svg>
                                            </a>
                                        @else
                                            <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Entrar na minha conta</a>
                                            @if (Route::has('register'))
                                                <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Criar nova conta</a>
                                            @endif
                                        @endauth
                                @endif
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>  
    </nav>
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
                <div class="row m-4">
                    <div class="card mb-3" style="max-width: 940px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                            <img src="https://picsum.photos/400/300" class="img-fluid rounded-start m-1" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Postagem 1</h5>
                                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-3" style="max-width: 940px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                            <img src="https://picsum.photos/400/300" class="img-fluid rounded-start m-1" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Postagem 1</h5>
                                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-3" style="max-width: 940px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                            <img src="https://picsum.photos/400/300" class="img-fluid rounded-start m-1" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Postagem 1</h5>
                                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-3" style="max-width: 940px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                            <img src="https://picsum.photos/400/300" class="img-fluid rounded-start m-1" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Postagem 1</h5>
                                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-3" style="max-width: 940px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                            <img src="https://picsum.photos/400/300" class="img-fluid rounded-start m-1" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Postagem 1</h5>
                                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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

