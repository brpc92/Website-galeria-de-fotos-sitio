@extends('template')
@section('conteudo')

<link rel="stylesheet" href="{{ URL::to('/bootstrap/css/bootstrap.min.css')}}">

<link rel="stylesheet" href="{{ URL::to('/css/fotos.css')}}">




            <section>
          <hr>      
            <div class="container">
                    
                    
             <div class="row">
              
             @foreach($pastas as $p)
                    <div class="col-3">
      
                        <a href="/fotos/{{$p->id}}/{{$p->nome}}"><img  src="/imagens/folder-37751_1280.png"><p>{{$p->nome}}</p></a>
                      
                    
                            <a href="/editar_pasta/{{$p->id}}" class="btn btn-light btn-xs btn-tamanho"><p>Editar</p></a>
                       
                            <a href="/deletar_pasta/{{$p->id}}" onclick="return confirm('Deseja realmente excluir a pasta?')" class="btn btn-danger btn-xs btn-tamanho espaco"><p>Excluir</p></a>
                      
  
                    </div>
                    @endforeach 
                    <div class="col-2"> 
                    <a href="/nova_pasta" ><img src="/imagens/adicionar.png"></a>  
                    </div>
             </div>      
               
             </div>

            </section>
            @stop         
  