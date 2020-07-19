// Call the dataTables jQuery plugin
$(document).ready(function() {
  $('#dataTable').dataTable({
    "bProcessing": true,
    "sAutoWidth": true,
    "bDestroy":true,
    "sPaginationType": "bootstrap", // full_numbers
    "iDisplayStart ": 10,
    "iDisplayLength": 10,
    "bPaginate": false, //hide pagination
    "bFilter": true, //hide Search bar-false
    "bInfo": false, // hide showing entries
});
});



$(document).ready(function() {
  $('#dataTable1').dataTable({
    "bProcessing": true,
    "sAutoWidth": true,
    "bDestroy":true,
    "sPaginationType": "bootstrap", // full_numbers
    "iDisplayStart ": 10,
    "iDisplayLength": 10,
    "bPaginate": false, //hide pagination
    "bFilter": true, //hide Search bar-false
    "bInfo": false, // hide showing entries
});
});
