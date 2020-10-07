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
          <h1 class="h3 mb-2 text-gray-800">Serviset</h1>
          <p class="mb-4">Manipulimi me te gjitha Serviset</p>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tabela e Serviseve<input style="float:right;" type="button" value="Shto" class="btn btn-primary" data-toggle="modal" data-target="#modal1"></h6>

            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                        <th>#</th>
                        <th>Emri</th>
                        <th>Email</th>
                        <th>Numri Personal</th>
                        <th>Data e lindjes</th>
                        <th>Niveli i Shkollimit</th>
                        <th>Numri i telefonit</th>
                        <th>Grupi i gjakut</th>
                        <th>Veprime</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>#</th>
                      <th>Emri</th>
                        <th>Email</th>
                      <th>Numri Personal</th>
                      <th>Data e lindjes</th>
                      <th>Niveli i Shkollimit</th>
                        <th>Numri i telefonit</th>
                      <th>Grupi i gjakut</th>
                      <th>Veprime</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    @foreach ($personelis as $p)
                    <tr>
                      <td>{{ $p->id }}</td>
                        <td>{{ $p->emri_mbiemri }}</td>
                        <td>{{ $p->email }}</td>
                      <td>{{ $p->nr_personal }}</td>
                      <td>{{ $p->data_lindjes }}</td>
                        <td>{{ $p->niveli_shkollimit }}</td>
                        <td>{{ $p->nr_telefonite }}</td>
                        <td>{{ $p->grupi_gjakut }}</td>
                      <td>
                        <form style="display: inline" action=''>
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
  <form method="POST" action="">
          @csrf
         <div class="modal-header">
          <h4 class="modal-title">Shto Personel</h4>
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
         </div>
         <div class="modal-body">
          <div class="form-group">
           <label>Emri dhe Mbiemri</label>
           <input name="emri_mbiemri" type="text" class="form-control" required>
          </div>
          <div class="form-group">
            <label>Numri Personal</label>
            <input name="nr_personal" type="text" class="form-control" required>
           </div>
          <div class="form-group">
            <label>Email</label>
            <input name="email" type="email" class="form-control" required>
           </div>
           <div class="form-group">
            <label>Data e lindjes</label>
            <input name="data_lindjes" type="date" class="form-control" required>
           </div>
          <div class="form-group">
           <label>Nr i telefonit</label>
           <input name="nr_telefonite" type="number" class="form-control" required>
          </div>
             <div class="form-group">
                 <label>Niveli i shkollimit</label>
                 <input name="niveli_shkollimit" type="number" class="form-control" required>
             </div><div class="form-group">
                 <label>Grupi i gjakut</label>
                 <input name="grupi_gjakut" type="number" class="form-control" required>
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

@endsection

