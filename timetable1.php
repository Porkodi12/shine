<?php
include "home.php";
include "connection.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
  <script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.15/js/dataTables.bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.js"></script>
  </head>
<body>
	<style>
   /*body
   {
    margin:0;
    padding:0;
    background-color:transparent;
   }*/
   .box
   {
    width:900px;
    padding:20px;
    background-color:transparent;
    border:1px solid #ccc;
    border-radius:5px;
    margin-top:25px;
   }
  </style>
    <div class="table-wrapper">
        <div class="table-title">
            <div class="row">
                <div class="col-sm-6"><h2>Manage <b>Domains</b> Website</h2></div>
                <div class="col-sm-6">
                	</div>

                	

            </div>
        </div><br>

        <!-- <div class="table-responsive">

        <div class="row">
     <div class="input-daterange">
      <div class="col-md-2">
       <input type="text" name="start_date" id="start_date" class="form-control" />
      </div>
      <div class="col-md-2">
       <input type="text" name="end_date" id="end_date" class="form-control" />
      </div>      
     </div>
     <div class="col-md-2">
      <input type="button" name="search" id="search" value="Search" class="btn btn-info" />
     </div>
    </div> -->
  <!-- <button class="button button1">Green</button> -->
</form>


	      <!-- <div class="col-md-3">
	       <input type="text" name="start_date" id="start_date" class="form-control" />
	      </div> <br>
	      <div class="col-md-3">
	       <input type="text" name="end_date" id="end_date" class="form-control" />
	      </div> 
	      <div class="col-md-3">
     	  <input type="button" name="search" id="search" value="Search" class="btn btn-info" />
     	  </div>     -->  
    
     <div class="table-responsive">

        <div class="row">
     <div class="input-daterange">
      <div class="col-md-2">
       <input type="text" name="start_date" id="start_date" class="form-control" />
      </div>
      <div class="col-md-2">
       <input type="text" name="end_date" id="end_date" class="form-control" />
      </div>      
     </div>
     <div class="col-md-2">
      <input type="button" name="search" id="search" value="Search" class="btn btn-info" />
     </div>
    </div> 
          <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Student Name</th>
                    <th>Start Time</th>
                    <th>End Time</th>
                    <th>Date</th>
                </tr>
            </thead>
        </table>
    </div>
   </div>
  </div>
 </body>
 </html>




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