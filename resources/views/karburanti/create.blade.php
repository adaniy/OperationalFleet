<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Karburanti</title>

  <!-- Custom fonts for this template -->
  <link href="/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  

  <!-- Custom styles for this page -->
  <link href="/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="/css/sb-admin-2.min.css" rel="stylesheet">

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


    
<style>

.col-md-6{
    
    flex: 0;
}

</style>



    <div class="modal-dialog"> 
      <div class="modal-content">
  <form method="POST" action="{{ route('karburanti.store') }}">
          @csrf
         <div class="modal-header">      
          <h4 class="modal-title">Shto Njesi Karburanti</h4>
          <button type="button" class="close" onclick="window.location='/karburanti';">&times;</button>
         </div>
         <div class="modal-body">     
          <div class="form-group">
           <label style=" width:100%; ">Automjeti</label>
           <input name="automjeti_id" id="automjeti_field" type="text" readonly class="form-control" required style="width:80%;
            display:inline; border-top-right-radius:0; border-bottom-right-radius:0;">
           <button style="width:19%; height:38px; border-top-left-radius:0; border-bottom-left-radius:0;" 
           type="submit" class="btn btn-primary" data-toggle="modal" data-target="#modal1">Zgjedh  </button>
          </div>
          <div class="form-group">
            <label style="display: block;">Personeli</label>
            <input name="personeli_id" id="personeli_field" type="text" readonly class="form-control" required style="width:80%;
            display:inline; border-top-right-radius:0; border-bottom-right-radius:0;">
           <button style=" width:19%; height:38px; border-top-left-radius:0; border-bottom-left-radius:0;" 
           type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal3">Zgjedh  </button>
           </div>
          <div class="form-group">
            <label>Litra</label>
            <input name="litra" type="number" class="form-control" required>
           </div>
           <div class="form-group">
            <label>Shuma</label>
            <input name="shuma" type="text" class="form-control" required>
           </div>
          <div class="form-group">
           <label>Kilometrat</label>
           <input name="kilometrat" type="text" class="form-control" required>
          </div>  
         </div>
         <div class="modal-footer">
         <input type="button" class="btn btn-default" onclick="window.location='/karburanti';" value="Anulo" >
          <input type="submit" class="btn btn-primary" value="Shto" >
         </div>
        </form>
       </div>                
    </div>   


</div>    
</div>  


  {{-- Zgjedh automjetin Modal --}}
<div class="modal fade pg-show-modal" id="modal1" tabindex="-1" role="dialog" aria-hidden="true"> 
    <div class="modal-dialog"> 
      <div class="modal-content">
  <form method="" action="">
          @csrf
         <div class="modal-header">      
          <h4 class="modal-title">Zgjedh Automjetin</h4>
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
         </div>
         <div class="modal-body">     
          <div class="form-group">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Tabela e Automjeteve</h6>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                      <thead>
                        <tr>
                          <th></th>
                          <th>Regjistrimi</th>
                          <th>Lloji</th>
                          <th>Brendi</th>
                          <th>Viti</th>
                        </tr>
                      </thead>
                      <tfoot>
                        <tr>
                            <th></th>
                            <th>Regjistrimi</th>
                            <th>Lloji</th>
                            <th>Brendi</th>
                            <th>Viti</th>
                        </tr>
                      </tfoot>
                      <tbody>
                        @foreach ($automjetet as $a)
                        <tr>
                          <td><input type="checkbox" name="group1[]" onclick="getRow(this)"></td>
                          <td hidden>{{ $a->id }}</td>
                          <td>{{ $a->regjistrimi }}</td>
                          <td>{{ $a->lloji }}</td>
                          <td>{{ $a->brendi }}</td>
                          <td>{{ $a->viti }}</td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
          </div>  
         </div>
         <div class="modal-footer">
         <input type="button" class="btn btn-default" data-dismiss="modal" value="Anulo" >
          <input type="button" class="btn btn-primary" value="Shto" onclick="GetSelectedAutomjet()">
         </div>
        </form>
       </div>                
    </div>    
  </div> 





 
   {{-- Zgjedh Personelin Modal --}}
 <div class="modal fade pg-show-modal" id="modal3" tabindex="-1" role="dialog" aria-hidden="true"> 
  <div class="modal-dialog"> 
    <div class="modal-content">
<form method="POST" action="">
        @csrf
       <div class="modal-header">      
        <h4 class="modal-title">Zgjedh Persoenlin</h4>
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
       </div>
      <div class="modal-body">     
        <div class="form-group">
          <div class="card shadow mb-4">
              <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Tabela e Personlit</h6>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-bordered" id="dataTable1" width="100%" cellspacing="0">
                    <thead>
                      <tr>
                        <th></th>
                        <th>Emri dhe Mbiemri</th>
                        <th>Data e lindjes</th>
                        <th>Nr i telefonit</th>
                      </tr>
                    </thead>
                    <tfoot>
                      <tr>
                        <th></th>
                        <th>Emri dhe Mbiemri</th>
                        <th>Data e lindjes</th>
                        <th>Nr i telefonit</th>
                      </tr>
                    </tfoot>
                    <tbody>
                      @foreach ($personelet as $p)
                      <tr>
                        <td><input type="checkbox" name="group2[]" onclick="getRow(this)"></td>
                        <td hidden>{{ $p->id }}</td>
                        <td>{{ $p->emri_mbiemri }}</td>
                        <td>{{ $p->data_lindjes }}</td>
                        <td>{{ $p->nr_telefonite }}</td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
        </div>  
      </div>
       <div class="modal-footer">
       <input type="button" class="btn btn-default" data-dismiss="modal" value="Anulo" >
        <input type="button" class="btn btn-primary" value="Shto" onclick="GetSelectedPersonel()">
       </div>
      </form>
     </div>                
  </div>    
</div> 

 




    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->


  <!-- Bootstrap core JavaScript-->
  <script src="/vendor/jquery/jquery.min.js"></script>
  <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="/js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="/vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="/vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="/js/demo/datatables-modal.js"></script>





<script>

$('input[type="checkbox"]').on('change', function() {
    $('input[name="' + this.name + '"]').not(this).prop('checked', false);
});




    function GetSelectedAutomjet() {
        //Reference the Table.
        var grid = document.getElementById("dataTable");
 
        //Reference the CheckBoxes in Table.
        var checkBoxes = grid.getElementsByTagName("INPUT");
        var message = "";
 
        //Loop through the CheckBoxes.
        for (var i = 0; i < checkBoxes.length; i++) {
            if (checkBoxes[i].checked) {
                var row = checkBoxes[i].parentNode.parentNode;
                message += row.cells[1].innerHTML;
                message += ", " + row.cells[2].innerHTML;
                message += ", " + row.cells[3].innerHTML;
                message += "\n";
            }
        }
 
        //Display selected Row data in Alert Box.
        // alert(message);
        document.getElementById("automjeti_field").value = message;
    }


    function GetSelectedPersonel() {
        //Reference the Table.
        var grid = document.getElementById("dataTable1");
 
        //Reference the CheckBoxes in Table.
        var checkBoxes = grid.getElementsByTagName("INPUT");
        var message = "";
 
        //Loop through the CheckBoxes.
        for (var i = 0; i < checkBoxes.length; i++) {
            if (checkBoxes[i].checked) {
                var row = checkBoxes[i].parentNode.parentNode;
                message += row.cells[1].innerHTML;
                message += ", " + row.cells[3].innerHTML;
                message += "\n";
            }
        }
 
        //Display selected Row data in Alert Box.
        // alert(message);
        document.getElementById("personeli_field").value = message;
    }


</script>
   



</body>

</html>
