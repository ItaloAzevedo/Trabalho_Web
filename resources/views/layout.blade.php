<!DOCTYPE html>
<html>
<head>
    <title>@yield('titulo','Meu site')</title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
</head>
<body>
    @yield('conteudo')
<ul>
  <li><a href="/home"><i>Página Principal</i></a>
    </li>
  <li><a href="/contato"><i>Fale conosco</i></a>
    </li>
  <li><a href="/sobre"><i>Sobre</i></a>
    </li>
  </ul>
</body>
</html>