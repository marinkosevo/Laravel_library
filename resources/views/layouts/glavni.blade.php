<!DOCTYPE html>
<html>
    <head>
        <title>@yield('naslov')</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}"/>    
    </head>
    <body>
        
        <header>
       <header>
            <div id='toolbar'>
    <div class='wrapper text-center'>
<div class="btn-group btn-group-lg" role="group" aria-label="...">
    <a href="/" class="btn btn-default"> Početna </a>
     <a href="/registracija" class="btn btn-default"> Registracija </a>
</div>    
                </div>
            </div>
        </header>
        </header>
      <div class="container">
        @yield('sadrzaj')
        </div>
        <footer>
        @include('includes.footer')
        </footer>
    </body>
</html>