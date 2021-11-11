<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>@yield('title')</title>

  @include('landing.includes.styles')

  @stack('style')
</head>

<body>
    @include('landing.includes.header')

  <main>

    @yield('content')
   
  </main>

  @include('landing.includes.footer')

  @include('landing.includes.script')
  @stack('script')
</body>

</html>
