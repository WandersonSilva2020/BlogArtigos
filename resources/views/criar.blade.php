@extends('navbar')
    @section('conteudo')
    <div>
        <head>
            <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>
            <meta name="csrf-token" content="{{ csrf_token() }}">
        </head>
        <script>

            window.onload = function() {
                $.alert({
                    columnClass: 'col-md-4 col-md-offset-4',
                    type: 'blue',
                    theme: 'modern',
                    title:  `Transmita seus pesamentos ao mundo !`,
                    content: ` 
                            <p class="text-black" style="font-size:12px;">Seja criativo, fale sobre algum assunto relevante ou compartilhe seus conhecimentos com as pessoas.<br> O céu é o limite !!!</p>
                        </div>
                    `,
                });

                tinymce.init({
                    selector: 'textarea',
                    toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
                    mergetags_list: [
                    { value: 'First.Name', title: 'First Name' },
                    { value: 'Email', title: 'Email' },
                    ],
                    ai_request: (request, respondWith) => respondWith.string(() => Promise.reject("See docs to implement AI Assistant")),
                });


                
                $("#criarArtigo").click(function (e) { 
                    e.preventDefault();
                    alert("oi");
                    var dados = {
                        "titulo" : $("#titulo").val(),
                        "autor" : $("#autor").val(),
                        "foto" : $("#foto").val(),
                        "categoria" : $("#categoria").val(),
                        "descricao" : tinymce.activeEditor.getContent(),
                    };
                    
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });

                    $.ajax({
                        type: "POST",
                        url: "/criar",
                        data: dados,
                        dataType: "json",
                        success: function (response) {
                            // Faça algo com a resposta, se necessário.
                        }
                    });
                });

            }
        </script>
        <div class="container-fluid">
            <div class="container border shadow text-left"></div>
        </div>
        <div class="row m-2">
            <h3> Criar novo artigo</h3>
        </div>
        <div class="container m-4">
            <div class="mb-3">
                <label for="titulo" class="form-label"><b>Titulo</b></label>
                <input type="text" class="form-control" id="titulo" placeholder="Informe o Titulo aqui">
            </div>
            <div class="mb-3">
                <label for="Autor" class="form-label"><b>Autor</b></label>
                <input type="text" class="form-control" id="Autor" placeholder="Informe o Autor aqui">
            </div>
            <div class="mb-3">
                <label for="categoria" class="form-label"><b>categoria</b></label>
                <input type="text" class="form-control" id="categoria" placeholder="Informe o categoria aqui">
            </div>
            <div class="mb-3">
                <label for="foto" class="form-label"><b>Foto para o artigo </b></label>
                <input class="form-control form-control-sm" id="foto" type="file">
            </div>
            <div class="mb-3">
                <label for="descricaoArtigo" class="form-label"><b>Conteudo do artigo </b></label>
                <textarea class="form-control" id="descricaoArtigo" rows="15"></textarea>
            </div>
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <button class="btn btn-primary me-md-2" id="criarArtigo" type="button">Postar</button>
            </div>
        </div>
</div>
@endsection
