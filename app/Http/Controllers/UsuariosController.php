<?php

namespace App\Http\Controllers;

use App\Usuario;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use DB;

class UsuariosController extends Controller
{
    public function listar(){

        return Usuario::all();
    }
   
  public function logar(Request $req, Response $res){
       $usuario=$req->input ('user');
       $senha=$req->input ('password');
       $log=true;

       $checklogin=DB::table('usuarios')->where(['login'=>$usuario,'senha'=>$senha])->get();
       
       if(count($checklogin)){
           return view("/home");
       }
       else{
       
        return view("/login",compact('log'));

            
       }
       
      

  }
}
