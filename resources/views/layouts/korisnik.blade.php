<!DOCTYPE html>
<html>
    <head>
        <title>@yield('naslov')</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}"/>    
    </head>
    <body>
        
        <header>
            <div id='toolbar'>
    <div class='wrapper text-center'>
<div class="btn-group btn-group-lg" role="group" aria-label="...">
    <a href="/dobrodosli" class="btn btn-default"> Početna </a>
     <a href="/pretraga-knjiga" class="btn btn-default"> Pretraga knjiga </a>
     <a href="/moje-knjige" class="btn btn-default"> Moje knjige </a>
     <a href="/odjava" class="btn btn-default"> Odjava </a>
</div>    
                </div>
            </div>
        </header>
      <div class="container">
       
        @yield('sadrzaj')
        </div>
        <footer>
        @include('includes.footer')
        </footer>
    </body>
</html>