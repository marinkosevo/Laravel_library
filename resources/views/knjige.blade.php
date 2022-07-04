@extends('layouts.korisnik')

    @section('naslov')
        Pretraga po knjigama
    @endsection 

  @section('sadrzaj')

<div id="searchbar">
    {{ Form::open(array('url'=> 'rezultati')) }}
    {{ Form::token() }}
    {{ Form::text('keyword', 'Search', array('id'=>'keyword')) }}
    {{ Form::submit('Search') }}
    {{ Form::close() }}
    
</div>
    @endsection 