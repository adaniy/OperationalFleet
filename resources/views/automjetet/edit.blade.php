@extends('automjetet.layout')
    

@section('content')
    



{{-- Edito Modal --}}

  <div class="modal-dialog"> 
    <div class="modal-content">
<form method="POST" action="{{ route('automjetet.update',$contact->id) }}">
      @method('PATCH') 
      @csrf
       <div class="modal-header">    
        <h4 class="modal-title">Edito Automjetin</h4>
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true" onclick="window.location='/automjetet';">&times;</button>
       </div>
       <div class="modal-body">     
        <div class="form-group">
         <label>Nr i Shasise</label>
         <input name="nr_shasise" id="nr_shasise" type="text" class="form-control" value="{{ $contact->nr_shasise }}" required>
        </div>
        <div class="form-group">
          <label>Regjistrimi</label>
          <input name="regjistrimi" id="regjistrimi" type="text" class="form-control" value="{{ $contact->regjistrimi }}" required>
         </div>
        <div class="form-group">
          <label>Lloji</label>
          <input name="lloji" id="lloji" type="text" class="form-control" value="{{ $contact->lloji }}" required>
         </div>
         <div class="form-group">
          <label>Brendi</label>
          <input name="brendi" id="brendi" type="text" class="form-control" value="{{ $contact->brendi }}" required>
         </div>
        <div class="form-group">
         <label>Viti</label>
         <input name="viti" id="viti" type="number" class="form-control" value="{{ $contact->viti }}" required>
        </div>
        <div class="form-group">
         <label>Kilometrat</label>
         <input name="kilometrat" id="kilometrat" type="number" class="form-control" value="{{ $contact->kilometrat }}" required>
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
      <form style="display: inline"  action="{{ route('automjetet.trash' , $contact->id) }}" method="post">
        @csrf
       <div class="modal-header">      
        <h4 class="modal-title">Fshij Automjetin</h4>
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
       </div>
       <div class="modal-body">     
        <p>A jeni te sigurt se doni te fshini kete Automjet?</p>
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

