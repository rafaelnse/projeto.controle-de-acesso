<!DOCTYPE html>
<html lang="pt-br" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') </title>

    {{--<link rel="stylesheet" href="../css/styles.css">--}}

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">




    <nav class="navbar navbar-expand-lg" style="background-color: #539457;">
        <div class="container-fluid">

            <a class="navbar-brand center" href="{{ route('site.index') }}">Controle de acesso</a>
            @auth
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link" aria-current="page" href="{{ route('site.index') }}">Início</a>

                    <a class="nav-link" href="{{ route('admin.visitantes') }}">Visitantes</a>

                    <li class="nav-item dropdown ">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Olá, {{auth()->user()->nome}}!
                        </a>
                        <ul class="dropdown-menu">

                            <li><a class="dropdown-item" href="{{ route('login.logout') }}"><i class="bi bi-box-arrow-left"></i> Sair</a></li>
                        </ul>
                    </li>
                    @else
                        <a class="btn btn-primary border-seconday" href="{{ route('login.form') }}"><i class="bi bi-box-arrow-in-right"> Login</i></a>

                    @endauth
                </div>


            </div>




          </div>






      </nav>


</head>
<body>
    <div class="p-3 mb-2 text-emphasis-secondary">

<main>
    {{--<div class="container-fluid">
        <div class="row">
            @if (session('sucesso'))
                <div class="d-flex p-2">
                  <p class="sucesso">  {{ session('sucesso') }} </p>
                </div>

            </div>
        </div>
            @endif--}}

            @yield('conteudo')

</main>



    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>






</body>
</html>
