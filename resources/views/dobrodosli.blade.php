@extends('layouts.korisnik')

    @section('naslov')
        Pretraga po knjigama
    @endsection 

  @section('sadrzaj')
<h3>Dobrodošli, {{ Auth::user()->name }}!</h3>

<?php

$kolicina = DB::table('knjige')->where('ISBN', '1084504717')->value('kolicina');
echo $kolicina;
?>

  <div id='toolbar'>
    <div class='wrapper text-center'>
<div class="btn-group btn-group-lg" role="group" aria-label="...">
    <a href="/dobrodosli" class="btn btn-default"> Početna </a>
     <a href="/pretraga-knjiga" class="btn btn-default"> Pretraga knjiga </a>
     <a href="/moje-knjige" class="btn btn-default"> Moje knjige </a>
     <a href="/odjava" class="btn btn-default"> Odjava </a>
</div>    
    @endsection 