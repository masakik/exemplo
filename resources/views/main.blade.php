<!DOCTYPE html>
<html>

<head>
  <title>
    @section('title') Exemplo @show
  </title>
</head>

<body>
  @yield('content')
  @section('footer')
    <hr />
    <div>
      Rodapé padrão
    </div>
  @show
</body>

</html>
