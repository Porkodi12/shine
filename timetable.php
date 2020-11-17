<?php
include "home.php";

?>

<!DOCTYPE html>
<html>
<head>
  <title>serach student details</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" /> -->
  <script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.15/js/dataTables.bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.js"></script>
<link rel="stylesheet" href="css/admission.css">
<link rel="stylesheet" href="css/fees.css">
<link rel="stylesheet" href="css/student.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css
">
</head>
<body>
  <style>
   body
   {
    margin:0;
    padding:0;
    background-color:transparent;
   }
   .box
   {
    width:600px;
    padding:20px;
    background-color:transparent;
    border:1px solid #ccc;
    border-radius:5px;
    margin-top:25px;
   }
  </style>
<center>
<div class="container box">
     
     <div class="container-head">
         <div class="title">
         <center><h1>Time Table</h1></center>
         </div>
     </div>
     <div class="container">
   
   <div class="table-responsive">
    <br />
    <div class="row"> 
     <div class="input-daterange">
      <div class="col">
       <input type="text" name="start_date" id="start_date" class="form-control" />
      </div>
    </div>

      <div class="row">
      <div class="input-daterange">
      <div class="col">
       <input type="text" name="end_date" id="end_date" class="form-control" />
      </div>      
     </div>
   </div>

      <div class="col">
      <input type="button" name="search" id="search" value="Search" class="btn btn-info" />
     </div> 
    </div>
    <br>
    <!-- <center> -->
    <table id="order_data" class="table table-bordered">
     <thead>
      <tr>
       <th scope="col">ID</th>
       <th scope="col">Student Name</th>
       <th scope="col">Start Time</th>
       <th scope="col">End Time</th>
       <th scope="col">Date</th>
      </tr>
     </thead>
    </table>
    </center>
   </div>
  </div>
</div>
   </div>

</center>
</body>



<script type="text/javascript" language="javascript" >
$(document).ready(function(){
 
 $('.input-daterange').datepicker({
  todayBtn:'linked',
  format: "yyyy-mm-dd",
  autoclose: true
 });

 fetch_data('no');

 function fetch_data(is_date_search, start_date='', end_date='')
 {
  var dataTable = $('#order_data').DataTable({
   "processing" : true,
   "serverSide" : true,
   "order" : [],
   "ajax" : {
    url:"fetch.php",
    type:"POST",
    data:{
     is_date_search:is_date_search, start_date:start_date, end_date:end_date
    }
   }
  });
 }

 $('#search').click(function(){
  var start_date = $('#start_date').val();
  var end_date = $('#end_date').val();
  if(start_date != '' && end_date !='')
  {
   $('#order_data').DataTable().destroy();
   fetch_data('yes', start_date, end_date);
  }
  else
  {
   alert("Both Date is Required");
  }
 }); 
 
});
</script>
</html>