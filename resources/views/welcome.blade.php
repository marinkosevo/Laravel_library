@extends('layouts.glavni')

    @section('naslov')
        Dobrodošli
    @endsection 

  @section('sadrzaj')
<div class="row">
     
        <div class="col-md-6">
            <h3>Sign In</h3>
            <form action="{{ route('prijava') }}" method="post">
                <div class="form-group">
                    <label for="username">Korisničko ime</label>
                    <input class="form-control {{ $errors->has('username') ? 'has-error' : ''}}" type="text" name="username" id="username">
                </div>
                <div class="form-group">
                    <label for="password">Lozinka</label>
                    <input class="form-control {{ $errors->has('password') ? 'has-error' : ''}}" type="password" name="password" id="password">
                </div>
                <button type="submit" class="btn btn-primary">Prijava</button>
                <input type="hidden" name="_token" value="{{ Session::token() }}">
            </form>
            
                <a href="/registracija"><button class="btn btn-primary">Registracija</button></a>
        </div>
</div>
    @endsection 