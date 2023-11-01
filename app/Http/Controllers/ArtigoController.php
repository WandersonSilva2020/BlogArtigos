<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Exception;
use App\Models\Postagem;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class ArtigoController extends Controller
{

    public function index(){
        $postagens = Postagem::orderBy('id', 'asc')->get();
        return view('welcome',['postagens' => $postagens]);
    }
    public function store(Request $request){
        try {
            
            $rules = [
                'titulo' => 'required|string|max:255',
                'categoria' => 'required|string|max:50',
                'foto' => 'required',
                'descricao_postagem' => 'required|string',
            ];

            $messages = [
                'titulo.required' => 'O campo título é obrigatório.',
                'foto.required' => 'O campo foto é obrigatório.',
                'titulo.string' => 'O campo título deve ser uma string.',
                'titulo.max' => 'O campo título não pode ter mais de :max caracteres.',
                'categoria.required' => 'O campo categoria é obrigatório.',
                'categoria.string' => 'O campo categoria deve ser uma string.',
                'categoria.max' => 'O campo categoria não pode ter mais de :max caracteres.',
                'descricao_postagem.required' => 'O campo descrição da postagem é obrigatório.',
                'descricao_postagem.string' => 'O campo descrição da postagem deve ser uma string.',
            ];

            $validator = Validator::make($request->all(), $rules, $messages);
    
            if ($validator->fails()) {
                return response()->json(['mensagem' => 'Erro na validação dos dados', 'erros' => $validator->errors()], 422);
            }
            if ($request->hasFile('foto')) {
                $foto = $request->file('foto');
                $nomeArquivo = uniqid() . '_' . now()->format('YmdHis') . '.' . $foto->getClientOriginalExtension();
                $caminhoArquivo = $foto->move('C:\laragon\www\BlogArtigos\public\fotos', $nomeArquivo);
                $caminhoArquivo = 'fotos/' . $nomeArquivo;
            }else{
                $caminhoArquivo = " ";
            }

            $user_id = auth()->user()->id; 

            $postagem = new Postagem;
            $postagem->titulo = trim($request->titulo);
            $postagem->autor_id = $user_id;
            $postagem->categoria = trim($request->categoria);
            $postagem->foto = $caminhoArquivo;
            $postagem->descricao_postagem = trim($request->descricao_postagem);
            $postagem->save();
    
            return response()->json($postagem, 201);
        } catch (\Exception $e) {
            return response()->json(['mensagem' => 'Erro na requisição: ' . $e->getMessage()], 500);
        }
    }
    public function postagemExibir($id){
        try{
            $postagem = Postagem::find($id);
            return view('postagem', ['postagem' => $postagem]);
        } catch (\Exception $e) {
            return view('pagina_de_erro',['message' => 'Postagem não existe !']);
        }       
    }

    public function PostagemBuscar(Request $request) {
        $pesquisa = $request->pesquisa; 
            $postagens = DB::table('postagens')
                ->where('titulo', 'like', '%' . $pesquisa . '%')
                ->get();
        
        return view('procurar', ['postagens' => $postagens, 'pesquisa' => $pesquisa]);
    }

    public function delete($id){
        $postagem = Postagem::find($id);
    
        if ($postagem && $postagem->autor_id == auth()->user()->id) {
            $caminhoArquivo = public_path('fotos/' . $postagem->foto);
            
            if (file_exists($caminhoArquivo)) {
                unlink($caminhoArquivo);
            }
            $postagem->delete();
            return response()->json([], 201); 
        } else {
            return response()->json([], 401); 
        }
    }
    
}