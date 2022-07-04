@extends('layouts.korisnik')

    @section('naslov')
        Moje Knjige
    @endsection 

  @section('sadrzaj')


<div class="row">
  <div class="col-lg-6">
    <h1> Rezervirane knjige:</h1>
      <table class="table">
        <tbody>
             <tr>
                    <th>Naslov</th>
                    <th>Autor</th>
                    <th>ISBN</th>
                
                </tr>
            <?php
            $username = Auth::user()->username;
            $rezervirane = DB::table('rezervirane')->where('username', '=', $username)->get();
            foreach ($rezervirane as $row)
            {
                
            ?>
               
                <tr class='clickable-row' data-href='url://'>
                    <td> <?php echo $row->naslov ?></td>
                    <td> <?php echo $row->autor ?></td>
                    <td> <?php echo $row->ISBN ?></td>
                  
                </tr>
            <?php } ?>
          </tbody>
      </table>
  </div><!-- /.col-lg-6 -->
</div><!-- /.row -->
    @endsection 