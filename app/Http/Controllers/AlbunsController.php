<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;



use DB;

class AlbunsController extends Controller
{

    public function listar(){
      
        $pastas= DB::table('pastas')->get();
        //  Usuario::all();
                 
       return view("fotos",compact('pastas'));

    }

    public function listarFotos($id,$nome){
        $fotos= DB::table('fotos')->where('id_pasta',$id)->get();
        foreach($fotos as $f)
        $fn[]=$f->nome;
          
        $id_pasta=$id;
        $nome_pasta=$nome; 
       
            
    return view("/album",compact('fotos','id_pasta','nome_pasta','fotos'));

    }

    public function telaAddFoto($id,$nome){
      
      
     return view ("/add_fotos",compact('nome','id'));
 
     }

     //exibir imagem
     public function exibirImagem($nome_pasta,$id_pasta,$nome,$id){
       
       
            
        return view ("/exibir",compact('nome_pasta','id_pasta','nome','id'));

    }
     

     public function addFotos(Request $req,$id,$nome){
           //  $id=$req->input('id');
           //  $nome=$req->input('nome');
           
           if($files=$req->file('arquivo')){
            foreach($files as $file){ 
           $file=$file->store('upload');
        
           
           $filename=pathinfo($file,PATHINFO_BASENAME);
 
  //          return redirect('/fotos');

             DB::table('fotos')->insert(
                 array('nome'=>$filename,'id_pasta'=>$id)    
             );    
            }
             return redirect("/fotos/$id/$nome");
            }
              
        
        }
           public function excluirFotos($id, $nome, $id_pasta,$nome_pasta){

            $fotos= DB::table('fotos')->where('id',$id)->get();


       

               foreach($fotos as $f){

                Storage::delete("upload/$f->nome");
               }  
            
          
          

         $excluir= DB::table('fotos')->where('id',$id)->delete();
     
                            
         return redirect("/fotos/$id_pasta/$nome_pasta");
           
         }
     
   }
                



