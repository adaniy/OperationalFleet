@extends('automjetet.layout')
    

@section('content')
    <!-- Sidebar -->
    @include('layouts.sidebar')
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        @include('layouts.topbar')
        <!-- End of Topbar -->



{{-- Edito Modal --}}

  <div class="modal-dialog"> 
    <div class="modal-content">
<form method="POST" action="{{ route('automjetet.update',$contact->automjeti_id) }}">
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
          <label>Lloji</label>
          <input name="lloji" id="lloji" type="text" class="form-control" value="{{ $contact->lloji }}" required>
         </div>
         <div class="form-group">
          <label>Brendi</label>
          <input name="brendi" id="brendi" type="text" class="form-control" value="{{ $contact->brendi }}" required>
         </div>
        <div class="form-group">
         <label>Viti</label>
         <input name="viti" id="viti" type="text" class="form-control" value="{{ $contact->viti }}" required>
        </div>
        <div class="form-group">
         <label>Kilometrat</label>
         <input name="kilometrat" id="kilometrat" type="text" class="form-control" value="{{ $contact->kilometrat }}" required>
        </div>   
       </div>
       <div class="modal-footer">
       <input type="button" class="btn btn-default" value="Anulo" onclick="window.location='/automjetet';">
        <input type="submit" class="btn btn-primary" value="Edito" >
       </div>
      </form>
     </div>                
  </div>    


</div>    
</div>  




@endsection

