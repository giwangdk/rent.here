<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>@yield('title')</title>

  @include('landing.includes.styles')
</head>

<body>

  <main>
    @yield('content')
  </main>


  <!-- Bootstrap core JavaScript -->
  @include('landing.includes.script')
</body>

</html>
