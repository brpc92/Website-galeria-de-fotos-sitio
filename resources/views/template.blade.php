<!DOCTYPE html>
<html lang="pt-br">
<head>
     <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    

    <link rel="stylesheet" href="{{ URL::to('/bootstrap/css/bootstrap.min.css')}}">
    <link  rel="stylesheet" href="{{ URL::to('/css/template.css')}}">
</head>
<body>
    <header>
    
     
      
     
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="/home">Sitio</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
    <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav" class="text-center">
                <li class="nav-item"><a href="/home">Home</a></li>
                <li class="nav-item"><a href="/fotos">Fotos</a></li>
                <li class="nav-item"><a href="/quiz">Quiz</a></li>
                <li class="nav-item"><a href="/sobre">Sobre</a></li> 
                <li class="nav-item"><a id=sair href="/login">Sair</a></li> 
                
               
            </ul>  
       </div>     
           
        </nav>
    
    </header>
    <section >
        @yield('conteudo')


    </section>
 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    
    <script src="/bootstrap/js/bootstrap.min.js"></script>

    

    
</body>
<footer>
    <div>
        
       
 
   
    </div>
</footer>
</html>