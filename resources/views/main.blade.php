<!DOCTYPE html>
<html lang="en">
  <head>
@include('partials._head')
@yield('stylesheets')
  </head>

  <body>
@include('partials._nav')

 <div class="container">
   @yield('content')

   @include('partials._footer')
  </div> <!-- end of header .container-->
   
    @include('partials._javascript')
    @yield('scripts')
  </body>
</html>
