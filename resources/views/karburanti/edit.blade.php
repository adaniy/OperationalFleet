@extends('karburanti.layout')
    

@section('content')
    



{{-- Edito Modal --}}

  <div class="modal-dialog"> 
    <div class="modal-content">
<form method="POST" action="{{ route('karburanti.update',$contact->id) }}">
      @method('PATCH') 
      @csrf
       <div class="modal-header">      
        <h4 class="modal-title">Edito Karburantin</h4>
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true" onclick="window.location='/automjetet';">&times;</button>
       </div>
       <div class="modal-body">     
        <div class="form-group">
         <label>Automjeti</label>
         <input name="automjeti_id" id="nr_shasise" type="text" class="form-control" value="{{ $contact->automjeti_id }}" required>
        </div>
        <div class="form-group">
          <label>Personeli</label>
          <input name="personeli_id" id="regjistrimi" type="text" class="form-control" value="{{ $contact->personeli_id }}" required>
         </div>
        <div class="form-group">
          <label>Litra</label>
          <input name="litra" id="lloji" type="text" class="form-control" value="{{ $contact->litra }}" required>
         </div>
         <div class="form-group">
          <label>Shuma</label>
          <input name="shuma" id="brendi" type="text" class="form-control" value="{{ $contact->shuma }}" required>
         </div>
        <div class="form-group">
         <label>Kilometrat</label>
         <input name="kilometrat" id="viti" type="text" class="form-control" value="{{ $contact->kilometrat }}" required>
        </div>  
       </div>
       <div class="modal-footer">
       <input type="button" class="btn btn-default" value="Anulo" onclick="window.location='/automjetet';">
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
      <form style="display: inline"  action="{{ route('karburanti.destroy' , $contact->id) }}" method="post">
        @csrf
        @method('delete')
       <div class="modal-header">      
        <h4 class="modal-title">Fshij Njesine e karburantit</h4>
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
       </div>
       <div class="modal-body">     
        <p>A jeni te sigurt se doni te fshini kete Njesi Karburanti?</p>
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

