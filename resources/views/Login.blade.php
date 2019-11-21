<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="{{ URL::to('/css/login.css')}}">
</head>
<body>
        <header>
             <h1>Sitio da Curtição</h1>
            </header>
          
    <section class="content-center">
                <div class="text-center">
                    <img src="imagens/IMG-20150202-WA0005.jpg" alt="logo">
                </div>
              
       <form action="/logar" method="post">
       <p><?php if($log==true){echo "usuario ou senha incorretos";}?></P>
            <div>
            <input type="hidden" name="_token" value="{{csrf_token()}}">
           
                <input type="text" name="user" required placeholder="Digite seu usuário">
            </div>
            <div>
                <input type="password" required name="password" placeholder="Digite sua senha">
            </div>
            <div>
                <button type="submit" >Entrar</button>
                </div>
             
        </form>
    </section>
  
    

</body>
</html>