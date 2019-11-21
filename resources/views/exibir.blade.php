



<link rel="stylesheet" href="{{ URL::to('/bootstrap/css/bootstrap.min.css')}}">

<link rel="stylesheet" href="{{ URL::to('/css/imagem.css')}}">




<section>
  <br>


 
                      
 

                            <div  >
                            <a href="/fotos/{{$id_pasta}}/{{$nome_pasta}}" class="lb-close">Voltar</a>
                            
                          
                           <a href="/upload/{{$nome}}"><img src="/upload/{{$nome}}"></a>
                          
                           
                             <div>
                          
                             <a href="/deletar_foto/{{$id}}/{{$nome}}/{{$id_pasta}}/{{$nome_pasta}}/" onclick="return confirm('Deseja realmente excluir a foto?')" class="lb-excluir">Excluir</a>
                             <!--	
              	<a href="#img" class="lb-prev"><img src="/imagens/esquerda.png"></a>
								<a href="#img" class="lb-next"><img src="/imagens/direita.png"></a>
-->  
              </div>
                           
                           </div>
                     
  </section>  
 
