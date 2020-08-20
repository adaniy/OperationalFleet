// Call the dataTables jQuery plugin
$(document).ready(function() {
  $('#dataTable',).DataTable();
});


$('#shtoProgressB').click((e) => {
  e.preventDefault();
  let emri = $('#emriR').val();
  let email = $('#emailR').val();
  let pass = $('#passwordR').val();

  $.post('http://127.0.0.1:8000/register',{'emri_mbiemri': emri,'email': email, 'password': pass})
  .then((e) => {
      if(e == 'New record created successfully'){
          window.location.replace("http://127.0.0.1:8000/punet");
      }
  })
  .catch((err) => {
      console.log(err);
  })
})