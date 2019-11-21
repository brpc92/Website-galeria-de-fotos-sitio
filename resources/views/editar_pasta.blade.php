<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar pasta</title>
    <link rel="stylesheet" href="{{ URL::to('/css/nova_pasta.css')}}">
</head>
<body>
    <section>
        <form action="/editar_pasta/{{$pastas->id}}" method="post">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
             <div>
             <img src="/imagens/folder-37751_1280.png"> 
            </div>
            <div>
            
             <input type="txt" name="nome" placeholder="digite o nome..." value="{{$pastas->nome}}">
            
            </div>  
            <div>
             <button type="submit"   class="btn btn-primary btn-xs">Salvar</button>
             <a href="/fotos" class="btn btn-dark btn-xs">Cancelar</a>
            </div> 
            
           
       
        </form>
      
    </section>

</body>
</html>