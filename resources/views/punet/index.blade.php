@extends('punet.layout')

@section('content')
        <div class="container-fluid">

          {{-- Alerts if Action was succesful or failed --}}
          <div class="col-sm-12">

            @if(session()->get('success'))
            <div class="alert alert-success alert-dismissible">
              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                {{ session()->get('success') }}
              </div>
            @endif
            @if(session()->get('failure'))
            <div class="alert alert-danger alert-dismissible">
              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                {{ session()->get('failure') }}
              </div>
            @endif

          </div>



          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4" style="width:90%;">
            <div class="h3 mb-0 text-gray-800" style="width:100%;">
              <span>Punet</span>
              <input style="float:right;" type="button" value="Shto" class="btn btn-primary" data-toggle="modal" data-target="#modal1">
              </div>

          </div>

          <div class="row">

            @foreach($punas as $p)
            {{-- {{ $selectedPuna =  new App\puna }} --}}
              <!-- Njoftim Example -->
              <div class="card shadow mb-4" style="width:90%;">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">{{ $p->lloji }}</h6>

                  <div class="dropdown no-arrow">

                    <div style="display: inline;">
                      <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-plus"></i>
                      </a>
                      <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                        <div class="dropdown-header">Veprime :</div>
                      <a href="#" class="dropdown-item" data-toggle="modal" data-target="#modal2" onlick="" >Shto Progres</a>
                        <a class="dropdown-item" href="#">Perfundo</a>
                      </div>
                    </div>



                    <div style="display: inline;">
                      <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                      </a>
                      <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                        <div class="dropdown-header">Veprime :</div>
                        <a class="dropdown-item" href="#">Arkivo</a>
                        <a class="dropdown-item" href="#">Fshij</a>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <h4 class="small font-weight-bold">Progresi i punes<span class="float-right">@if($p->progresi!=100)  {{$p->progresi}}%  @else E kryer @endif</span></h4>
                <div class="progress mb-4">
                <div class="progress-bar" role="progressbar" style="width: {{$p->progresi}}%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                    <div class="dropdown-divider"></div>
                    <div class="small text-gray-600" style="font-size:90%;"><span>Regjistrimi : December 12 2019</span><span>&nbsp  &nbsp  &nbsp &nbsp &nbsp &nbsp</span><span>Afati : Pa afat</span> </div>
                <div class="dropdown-divider"></div>
                  {{ $p->lloji . ' , ' . $p->vendi}}
                </div>
              </div>
            @endforeach

            </div>


            </div>
        <!-- /.container-fluid -->

      </div>

      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Arbotec
               2020</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->


{{-- Shto Modal --}}
<div class="modal fade pg-show-modal" id="modal1" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
<form method="POST" action="{{ route('punet.store') }}">
        @csrf
       <div class="modal-header">
        <h4 class="modal-title">Shto Pune te re</h4>
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
       </div>
       <div class="modal-body">
        <div class="form-group">
         <label>Lloji i punes</label>
         <input name="lloji" type="text" class="form-control" required>
        </div>
        <div class="form-group">
          <label>Vendi</label>
          <input name="vendi" type="text" class="form-control" required>
         </div>
        <div class="form-group">
          <label>Fuqia njerzore</label>
          <input name="fuqia_njerzore" type="number" class="form-control" required>
         </div>
         <div class="form-group">
          <label>Mjetet</label>
          <input name="mjetet" type="text" class="form-control" required>
         </div>
       </div>
       <div class="modal-footer">
       <input type="button" class="btn btn-default" data-dismiss="modal" value="Anulo" >
        <input type="submit" class="btn btn-primary" value="Shto" >
       </div>
      </form>
     </div>
  </div>
</div>


{{-- Shto Progres Modal --}}
<div class="modal fade pg-show-modal" id="modal2" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
<form method="post" action="">
        @csrf
      <div class="modal-header">
        <h4 class="modal-title">Shto Progres ne Pune</h4>
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
      </div>
      <div class="modal-body">
        <div class="form-group">
        <label>Sa eshte perqindja e punes se perfunduar</label>
        <input name="progresi" type="number" class="form-control" required>
        </div>
      </div>
      <div class="modal-footer">
      <input type="button" class="btn btn-default" data-dismiss="modal" value="Anulo" >
        <input type="button" class="btn btn-primary" value="Shto" id="shtoProgresB">
      </div>
      </form>
    </div>
  </div>
</div>


@endsection
