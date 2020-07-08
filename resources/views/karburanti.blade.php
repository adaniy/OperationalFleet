<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Automjetet</title>

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

  <!-- Custom styles for this page -->
  <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

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

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Karburanti</h1>
          <p class="mb-4">Manipulimi me te Karburant</p>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Tabela e Karburantit<input style="float:right;" type="button" value="Shto" class="btn btn-primary" data-toggle="modal" data-target="#modal1"></h6>

              
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Automjeti</th>
                      <th>Litra</th >
                      <th>Personeli</th>
                      <th>Kilometrat</th>
                      <th>Data</th>
                      <th>Veprime</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>#</th>
                      <th>Automjeti</th>
                      <th>Litra</th >
                      <th>Personeli</th>
                      <th>Kilometrat</th>
                      <th>Data</th>
                      <th>Veprime</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>Veture, Audi, 02-202-fb</td>
                      <td>50</td>
                      <td>Filan Fisteku</td>
                      <td>122.203</td>
                      <td>02.07.2020</td>
                      <td>
                        <button  class="btn btn-primary" data-toggle="modal" data-target="#modal2">Edito</button>                                     
                        <button  class="btn btn-primary" data-toggle="modal" data-target="#modal3">Fshij</button>    
                      </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Veture, Mercedes, 03-202-fb</td>
                        <td>50</td>
                        <td>Asdren Xhafa</td>
                        <td>122.203</td>
                        <td>02.07.2020</td>
                      <td>
                        <button  class="btn btn-primary" data-toggle="modal" data-target="#modal2">Edito</button>                                     
                        <button  class="btn btn-primary" data-toggle="modal" data-target="#modal3">Fshij</button>   
                      </td>
                    </tr>
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
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->


  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/datatables-demo.js"></script>

{{-- Shto Modal --}}

<div class="modal fade pg-show-modal" id="modal1" tabindex="-1" role="dialog" aria-hidden="true"> 
  <div class="modal-dialog"> 
    <div class="modal-content">
      <form>
       <div class="modal-header">      
        <h4 class="modal-title">Add Employee</h4>
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
       </div>
       <div class="modal-body">     
        <div class="form-group">
         <label>Name</label>
         <input type="text" class="form-control" required>
        </div>
        <div class="form-group">
         <label>Email</label>
         <input type="email" class="form-control" required>
        </div>
        <div class="form-group">
         <label>Address</label>
         <textarea class="form-control" required></textarea>
        </div>
        <div class="form-group">
         <label>Phone</label>
         <input type="text" class="form-control" required>
        </div>     
       </div>
       <div class="modal-footer">
        <input type="button" class="btn btn-default" data-dismiss="modal" value="Anulo">
        <input type="submit" class="btn btn-primary" value="Shto">
       </div>
      </form>
     </div>                
  </div>                         
</div>


{{-- Edito Modal --}}

<div class="modal fade pg-show-modal" id="modal2" tabindex="-1" role="dialog" aria-hidden="true"> 
  <div class="modal-dialog"> 
    <div class="modal-content">
      <form>
       <div class="modal-header">      
        <h4 class="modal-title">Add Employee</h4>
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
       </div>
       <div class="modal-body">     
        <div class="form-group">
         <label>Name</label>
         <input type="text" class="form-control" required>
        </div>
        <div class="form-group">
         <label>Email</label>
         <input type="email" class="form-control" required>
        </div>
        <div class="form-group">
         <label>Address</label>
         <textarea class="form-control" required></textarea>
        </div>
        <div class="form-group">
         <label>Phone</label>
         <input type="text" class="form-control" required>
        </div>     
       </div>
       <div class="modal-footer">
        <input type="button" class="btn btn-default" data-dismiss="modal" value="Anulo">
        <input type="submit" class="btn btn-primary" value="Shto">
       </div>
      </form>
     </div>                
  </div>                         
</div>

{{-- Delete Modal --}}
<div class="modal fade pg-show-modal" id="modal3" tabindex="-1" role="dialog" aria-hidden="true"> 
  <div class="modal-dialog"> 
    <div class="modal-content">
      <form>
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




</body>

</html>
