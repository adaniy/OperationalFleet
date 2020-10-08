@extends('automjetet.layout')


@section('content')




{{-- Edito Modal --}}

  <div class="modal-dialog">
    <div class="modal-content">
<form method="POST" action="{{ route('personeli.update',$personelis->id) }}">
      @method('PUT')
      @csrf
       <div class="modal-header">
        <h4 class="modal-title">Edito Personelin</h4>
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true" onclick="window.location='/personeli';">&times;</button>
       </div>
       <div class="modal-body">
        <div class="form-group">
         <label>Emri dhe Mbiemri</label>
         <input name="emri_mbiemri" type="text" class="form-control" value="{{ $personelis->emri_mbiemri }}" required>
        </div>
        <div class="form-group">
          <label>Nr Personal</label>
          <input name="nr_personal" type="text" class="form-control" value="{{ $personelis->nr_personal }}" required>
         </div>
        <div class="form-group">
          <label>Email</label>
          <input name="email" type="email" class="form-control" value="{{ $personelis->email }}" required>
         </div>
         <div class="form-group">
          <label>Data e lindjes</label>
          <input name="data_lindjes" type="date" class="form-control" value="{{ $personelis->data_lindjes }}" required>
         </div>
        <div class="form-group">
         <label>Nr i telefonit</label>
         <input name="nr_telefonite" type="number" class="form-control" value="{{ $personelis->nr_telefonite }}" required>
        </div>
        <div class="form-group">
         <label>Niveli i shkollimit</label>
         <input name="niveli_shkollimit" type="text" class="form-control" value="{{ $personelis->niveli_shkollimit }}" required>
        </div>
           <div class="form-group">
               <label>Grupi i gjakut</label>
               <input name="grupi_gjakut" type="text" class="form-control" value="{{ $personelis->grupi_gjakut }}" required>
           </div>
       </div>
       <div class="modal-footer">
       <input type="button" class="btn btn-default" value="Anulo" onclick="window.location='/personeli';">
       <input style="float:right;" type="button" value="Fshij" class="btn btn-danger" data-toggle="modal" data-target="#modal3">
      </form>
        <input type="submit" class="btn btn-primary" value="Edito" >
       </div>
      </form>
     </div>
  </div>


</div>
</div>


{{-- Delete Modal --}}
<div class="modal fade pg-show-modal" id="modal3" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form style="display: inline"  action="{{ route('personeli.destroy' , $personelis->id) }}" method="POST">
          @csrf
          @method('DELETE')
       <div class="modal-header">
        <h4 class="modal-title">Fshij Automjetin</h4>
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
       </div>
       <div class="modal-body">
        <p>A jeni te sigurt se doni te fshini kete Personel?</p>
        <p class="text-warning"><small>Ky veprim nuk mund te kthehet me.</small></p>
       </div>
       <div class="modal-footer">
        <input type="button" class="btn btn-default" data-dismiss="modal" value="Anulo">
        <input type="submit" class="btn btn-danger" value="Fshij">
       </div>
      </form>
     </div>
  </div>
</div>

@endsection

