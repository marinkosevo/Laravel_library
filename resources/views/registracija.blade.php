@extends('layouts.main')


  @section('content')
<div class="row">
    @if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
        <form action="{{route ('registracija')}}" method="post">        
            <div class="form-group">
             <label for="name">Ime</label>
            <input class="form-control {{ $errors->has('name') ? 'has-error' : ''}}" type="text" name="name" id="name">
            </div>
            <div class="form-group">
             <label for="lastname">Prezime</label>
            <input class="form-control {{ $errors->has('lastname') ? 'has-error' : ''}}" type="text" name="lastname" id="lastname">
            </div>
            <div class="form-group">
             <label for="email">Email</label>
            <input class="form-control {{ $errors->has('email') ? 'has-error' : ''}}" type="email" name="email" id="email">
            </div>
           <div class="form-group">
             <label for="username">Korisničko ime</label>
            <input class="form-control {{ $errors->has('username') ? 'has-error' : ''}}" type="text" name="username" id="username">
            </div>
             <div class="form-group">
             <label for="password">Lozinka</label>
            <input class="form-control {{ $errors->has('password') ? 'has-error' : ''}}" type="password" name="password" id="password">
            </div>
            <button type="submit" class="btn btn-primary">Registracija</button>
            <input type="hidden" name="_token" value="{{ Session::token() }}">
        </form>
</div>
    @endsection 