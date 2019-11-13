<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
class Perfil extends Model
{
    protected $primaryKey='idPerfil';
    protected $fillable = ['apelido','idade','idLogin'];

    public static function getPerfil(){
        $perfil=DB::table('perfils')
        ->join('users', 'users.id' , '=' ,'perfils.idLogin')
        ->select('perfils.idPerfil','perfils.idLogin','users.id','perfils.apelido', 'perfils.idade', 'users.name','users.email')
        ->get();
        return $perfil;
    }
}
