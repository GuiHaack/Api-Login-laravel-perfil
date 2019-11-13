<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Perfil;
use DB;
class PerfilController extends Controller
{
    public function getAll(){
        return Perfil::getPerfil();
    }

    public function show(Perfil $perfil){
        return $perfil;
    }
  

    public function store(Request $request){
        $perfil = Perfil::create([
            'apelido'=>$request->input('apelido'),
            'idade'=>$request->input('idade'),
            'idLogin'=>$request->input('idLogin'),
        ]);

        return $perfil;
    }

    public function update(Request $request, Perfil $perfil){

        $perfil->apelido = $request->input('apelido');
        $perfil->idade = $request->input('idade');
        $perfil->idLogin = $request->input('idLogin');
        $perfil->save();
        return $perfil;
    }

    public function delete(Perfil $perfil){

        $perfil->delete();

        return response()->json(['success'=>$true]);
    }
}
