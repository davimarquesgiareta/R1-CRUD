<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>CRUD Guitarras</title>
</head>
<body>
<div class="container-fluid my-3 ">
        <div class="jumbotron mb-1 text-center">
            <p class="display-4">DESAFIO CRUD</p class="display-4">
        </div>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-3 ">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/listagem">Listagem</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/cadastrar">Cadastro</a>
                </li>
            </div>
        </nav>
        @yield('content')
        <footer class="mb-1 text-center" >
            <p>&copy; Desenvolvido por <strong>Davi Marques Giareta</strong>.</p>
        </footer>        
</div>
</body>
</html>