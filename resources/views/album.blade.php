@extends('template')

@section('conteudo')

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="js/jquery.gallerie.js"></script>

<link rel="stylesheet" href="{{ URL::to('/bootstrap/css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{ URL::to('/css/style3.css')}}">

<link rel="stylesheet" href="{{ URL::to('/css/album.css')}}">



<section>
  <br>



                    <div class="container" id="gallery">
                     <div class="row"> 
                     <div class="col-2"> 
                    <a href="/add_foto/{{$id_pasta}}/{{$nome_pasta}}" ><img src="/imagens/adicionar.png"></a>  
                    
                    </div>    
                        @foreach($fotos as $f)
                        @if($fotos==true)
                        <div class="col-4">
                          <div>
                            <a  href="/exibir/{{$nome_pasta}}/{{$id_pasta}}/{{$f->nome}}/{{$f->id}}" >
                            <img src="/upload/{{$f->nome}}"/>
                                                         
                            </a>
                            
                            </div>
                         </div> 
                         @endif
                      @endforeach 
                     <br>
                   
              
  </section>  
 
@stop  