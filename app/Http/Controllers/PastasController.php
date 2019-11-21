<?php

namespace App\Http\Controllers;
use App\Pasta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


use DB;

class PastasController extends Controller
{
    public function criar(Request $req){
        $nome=$req->input('nome');
       
        DB::table('pastas')->insert(
            array('nome'=>$nome)    
        );
      
       $pastas= DB::table('pastas')->get();
                  
        return redirect("/fotos");
      
    }


    public function telaEditar($id){

        $pastas=Pasta::findOrFail($id);


      return view("editar_pasta",compact('pastas'));
      
    }

    public function editar($id, Request $req ){
        $nome=$req->input('nome');

        $pastas=DB::table('pastas')->where('id',$id)->update(['nome'=>$nome]);

        $pastas= DB::table('pastas')->get();
                  
        return redirect('/fotos');
      
    }

    public function excluir($id){


        $fotos= DB::table('fotos')->where('id_pasta',$id)->get();

            foreach($fotos as $f){

               //  echo $f->nome;   
                 Storage::delete("upload/$f->nome");
            }
       
        $excluirFotos = DB::table('fotos')->where('id_pasta',$id)->delete();
       $excluirPasta= DB::table('pastas')->where('id',$id)->delete();
      

                       
        return redirect('/fotos');
      
    }
      
    
}
