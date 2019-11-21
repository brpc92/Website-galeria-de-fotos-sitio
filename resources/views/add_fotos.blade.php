<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nova Pasta</title>
    <link rel="stylesheet" href="{{ URL::to('/css/nova_pasta.css')}}">
</head>
<body>
    <section>
        <form action="/add/{{$id}}/{{$nome}}" method="post" enctype="multipart/form-data" >
        
                <input type="hidden" name="_token"  value="{{csrf_token()}}">
                <input type="hidden" name="id" value="{{$id}}">
                <input type="hidden" name="nome" value="{{$nome}}">
             
            <div class="multiselect">
             <input type="file" name="arquivo[]" multiple required="required" >
            </div>  
            <div>
            <button type="submit" class="btn btn-primary btn-xs">Adicionar</button>
             <a href="/fotos/{{$id}}/{{$nome}}" class="btn btn-dark btn-xs">Cancelar</a>
            </div> 
         
        
        </form>
    
    
    </section>

</body>
</html>