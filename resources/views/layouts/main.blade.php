<!DOCTYPE html>
<html lang="en">

<head>

@include('partials.header_assets')

</head>

<body>

  @include('partials.topbar')

  @include('partials.sidebar')

  <main id="main" class="main">
   
    @yield('content')


  </main><!-- End #main -->
  @include('partials.scripts')
  
  @include('partials.footer')

  @include('partials.footer_assets')

</body>

</html>