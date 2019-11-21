@extends('template')

@section('conteudo')

    <link  rel="stylesheet" href="{{ URL::to('/css/index.css')}}">
    
    




<section class="home">
        <main class="container">

        <img src="/imagens/home.jpg">
        
   <hr>
            <div class="title">
                <h1>Seja bem vindo!</h1>
            </div>
            <p>
                    Sejam bem vindos ao evento mais famoso do Brasil,
            
                    Nesse ano resolvemos fazer algo diferente para deixar as coisas mais legais.
            
                    Aqui voçe vai encontrar informaçoes sobre os sitios anteriores e sobre o próximo...
            
                    Alias preparamos um quiz especial para testar o conhecimento de voces.
                    É isso ai divirtam-se
                </p>
            </p>    
        </main>


    </section>
    


@stop