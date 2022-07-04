@extends('layouts.korisnik')

  

  @section('sadrzaj')



<div class="row">
  <div class="col-lg-6">
      <form action="" method="post" role="search"> 
    <div class="input-group">
       <input type="text" class="form-control" name="pretraga" id="pretraga" placeholder="Upišite ime knjige ili autora">
      <span class="input-group-btn">
        <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
      </span>
    </div><!-- /input-group -->
      </form>
      <table class="table">
        <tbody>
             <tr>
                    <th>Naslov</th>
                    <th>Autor</th>
                    <th>Izdavač</th>
                    <th>ISBN</th>
                
                </tr>
               @foreach($knjiga->results as $knjiga)
                <tr class='clickable-row' data-href='url://'>
                    <td> <?php echo $row->naslov ?></td>
                    <td> <?php echo $row->autor ?></td>
                    <td> <?php echo $row->izdavac ?></td>
                    <td> <?php echo $row->ISBN ?></td>
                    <td> <div class="btn-group" role="group" aria-label="...">
                        <form action="{{route ('pretraga')}}" method="post"> 
            <input type="hidden" name="ISBN" value="{{ $ISBN}}">
            <button type="submit" class="btn btn-primary">Rezerviraj</button>
            <input type="hidden" name="_token" value="{{ Session::token() }}">
                            @endforeach
        </form>
</div></td>
                </tr>
          </tbody>
      </table>
      {!! $knjige->render() !!}
  </div><!-- /.col-lg-6 -->
</div><!-- /.row -->
    @endsection 