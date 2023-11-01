<?php

namespace App\Http\Controllers;

use app\Models\User;
use App\Models\Postagem;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function show(){
        $user = auth()->user();
        $postagens_autor = Postagem::where('autor_id', $user->id)->get();
        return view('dashboard', ['user' => $user, 'postagens' => $postagens_autor]);
    }
    
}
