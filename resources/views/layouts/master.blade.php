<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>@yield('title', 'Gerenciamento de Vendas')</title>

    <!-- CSS da aplicação -->
    @include('estilos.estilos')
</head>

  <body id="page-top">
    <!-- Menu superior -->
        @include('layouts.menus')
    <!-- Fim Menu superior -->

    <!-- Menu Lateral -->
        @include('layouts.menu-lateral')
    <!-- Fim Menu Lateral -->

    <!-- Conteúdo do site -->
    <!-- Fim Conteúdo do site -->

    <!-- Section com os scripts -->
        @include('scripts.scripts')
    <!-- Fim Section com os scripts -->

  </body>

@show