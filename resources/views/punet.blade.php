<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Njoftime</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

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
          <div class="d-sm-flex align-items-center justify-content-between mb-4" style="width:90%;">
            <div class="h3 mb-0 text-gray-800" style="width:100%;">
              <span>Punet</span>
              <input style="float: right" type="button" value="Shto" class="btn btn-primary" data-toggle="modal" data-target="#modal1">
              </div>

          </div>

          <div class="row">


              <!-- Njoftim Example -->
              <div class="card shadow mb-4" style="width:90%;">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Puna </h6>
                  
                  <div class="dropdown no-arrow">

                    <div style="display: inline;">
                      <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-plus"></i>
                      </a>
                      <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                        <div class="dropdown-header">Veprime :</div>
                        <a class="dropdown-item" href="#">Shto Progres</a>
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
                    <h4 class="small font-weight-bold">Progresi i punes<span class="float-right">E kryer</span></h4>
                <div class="progress mb-4"> 
                  <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                    <div class="dropdown-divider"></div>
                    <div class="small text-gray-600" style="font-size:90%;"><span>Regjistrimi : December 12 2019</span><span>&nbsp  &nbsp  &nbsp &nbsp &nbsp &nbsp</span><span>Afati : Pa afat</span> </div>
                <div class="dropdown-divider"></div>
                  Pastrimi i autostrades nr 128.
                </div>
              </div>


              <!-- Njoftim Example -->
              <div class="card shadow mb-4" style="width:90%;">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Puna </h6>
                  
                  <div class="dropdown no-arrow">

                    <div style="display: inline;">
                      <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-plus"></i>
                      </a>
                      <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                        <div class="dropdown-header">Veprime :</div>
                        <a class="dropdown-item" href="#">Shto Progres</a>
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
                    <h4 class="small font-weight-bold">Progresi i punes<span class="float-right">50%</span></h4>
                <div class="progress mb-4"> 
                  <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                    <div class="dropdown-divider"></div>
                    <div class="small text-gray-600" style="font-size:90%;"><span>Regjistrimi : December 12 2019</span><span>&nbsp  &nbsp  &nbsp &nbsp &nbsp &nbsp</span><span>Afati : Pa afat</span> </div>
                <div class="dropdown-divider"></div>
                  Dropdown menus can be placed in the card header in order to extend the functionality of a basic card. In this Njoftim Example, the Font Awesome vertical ellipsis icon in the card header can be clicked on in order to toggle a dropdown menu.
                </div>
              </div>


              <!-- Njoftim Example -->
              <div class="card shadow mb-4" style="width:90%;">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Puna </h6>
                  
                  <div class="dropdown no-arrow">

                    <div style="display: inline;">
                      <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-plus"></i>
                      </a>
                      <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                        <div class="dropdown-header">Veprime :</div>
                        <a class="dropdown-item" href="#">Shto Progres</a>
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
                    <h4 class="small font-weight-bold">Progresi i punes<span class="float-right">20%</span></h4>
                <div class="progress mb-4"> 
                  <div class="progress-bar" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                    <div class="dropdown-divider"></div>
                    <div class="small text-gray-600" style="font-size:90%;"><span>Regjistrimi : December 12 2019</span><span>&nbsp  &nbsp  &nbsp &nbsp &nbsp &nbsp</span><span>Afati : Pa afat</span> </div>
                <div class="dropdown-divider"></div>
                  Dropdown menus can be placed in the card header in order to extend the functionality of a basic card. In this Njoftim Example, the Font Awesome vertical ellipsis icon in the card header can be clicked on in order to toggle a dropdown menu.
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
            <span>Copyright &copy; Your Website 2020</span>
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
