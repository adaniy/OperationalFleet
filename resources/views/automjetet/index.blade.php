@extends('automjetet.layout')
    

@section('content')

    <!-- Begin Page Content -->
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
          <h1 class="h3 mb-2 text-gray-800">Automjetet</h1>
          <p class="mb-4">Manipulimi me te gjitha Automjetet</p>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tabela e Automjeteve<input style="float:right;" type="button" value="Shto" class="btn btn-primary" data-toggle="modal" data-target="#modal1"></h6>
                               
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Nr i shasise</th>
                      <th>Regjistrimi</th>
                      <th>Lloji</th>
                      <th>Brendi</th>
                      <th>Viti</th>
                      <th>Kilometrat</th>
                      <th>Veprime</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>#</th>
                      <th>Nr i shasise</th>
                      <th>Regjistrimi</th>
                      <th>Lloji</th>
                      <th>Brendi</th>
                      <th>Viti</th>
                      <th>Kilometrat</th>
                      <th>Veprime</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    @foreach ($automjetets as $aut)
                    <tr>
                      <td>{{ $aut->id }}</td>
                      <td>{{ $aut->nr_shasise }}</td>
                      <td>{{ $aut->regjistrimi }}</td>
                      <td>{{ $aut->lloji }}</td>
                      <td>{{ $aut->brendi }}</td>
                      <td>{{ $aut->viti }}</td>
                      <td>{{ $aut->kilometrat }}</td>
                      <td>
                        <form style="display: inline" action="{{ route('automjetet.edit', $aut->id) }}">
                        <input class="btn btn-primary" type="submit" value="Edito">
                        </form>                                        
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Arbotec 2020</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Main Content -->


    {{-- Shto Modal --}}
  <div class="modal fade pg-show-modal" id="modal1" tabindex="-1" role="dialog" aria-hidden="true"> 
    <div class="modal-dialog"> 
      <div class="modal-content">
  <form method="POST" action="{{ route('automjetet.store') }}">
          @csrf
         <div class="modal-header">      
          <h4 class="modal-title">Add Employee</h4>
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
         </div>
         <div class="modal-body">     
          <div class="form-group">
           <label>Nr i Shasise</label>
           <input name="nr_shasise" type="text" class="form-control" required>
          </div>
          <div class="form-group">
            <label>Regjistrimi</label>
            <input name="regjistrimi" type="text" class="form-control" required>
           </div>
          <div class="form-group">
            <label>Lloji</label>
            <input name="lloji" type="text" class="form-control" required>
           </div>
           <div class="form-group">
            <label>Brendi</label>
            <input name="brendi" type="text" class="form-control" required>
           </div>
          <div class="form-group">
           <label>Viti</label>
           <input name="viti" type="number" class="form-control" required>
          </div>
          <div class="form-group">
           <label>Kilometrat</label>
           <input name="kilometrat" type="number" class="form-control" required>
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



{{-- Delete Modal --}}
<div class="modal fade pg-show-modal" id="modal3" tabindex="-1" role="dialog" aria-hidden="true"> 
  <div class="modal-dialog"> 
    <div class="modal-content">
      <form method="DELETE" action="/ ">
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

