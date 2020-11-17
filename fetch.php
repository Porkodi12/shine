<?php
//fetch.php
$con=mysqli_connect("localhost","root","","tuition");
$columns = array('order_id', 'order_student_name', 'order_stime', 'order_etime', 'order_date');

$query = "SELECT * FROM timetable WHERE ";

if($_POST["is_date_search"] == "yes")
{
 $query .= 'order_date BETWEEN "'.$_POST["start_date"].'" AND "'.$_POST["end_date"].'" AND ';
}

if(isset($_POST["search"]["value"]))
{
 $query .= '
  (order_id LIKE "%'.$_POST["search"]["value"].'%" 
  OR order_student_name LIKE "%'.$_POST["search"]["value"].'%" 
  OR order_stime LIKE "%'.$_POST["search"]["value"].'%" 
  OR order_etime LIKE "%'.$_POST["search"]["value"].'%")
 ';
}

if(isset($_POST["order"]))
{
 $query .= 'ORDER BY '.$columns[$_POST['order']['0']['column']].' '.$_POST['order']['0']['dir'].' 
 ';
}
else
{
 $query .= 'ORDER BY order_id DESC ';
}

$query1 = '';

if($_POST["length"] != -1)
{
 $query1 = 'LIMIT ' . $_POST['start'] . ', ' . $_POST['length'];
}

$number_filter_row = mysqli_num_rows(mysqli_query($con, $query));

$result = mysqli_query($con, $query . $query1);

$data = array();

while($row = mysqli_fetch_array($result))
{
 $sub_array = array();
 $sub_array[] = $row["order_id"];
 $sub_array[] = $row["order_student_name"];
 $sub_array[] = $row["order_stime"];
 $sub_array[] = $row["order_etime"];
 $sub_array[] = $row["order_date"];
 $data[] = $sub_array;
}

function get_all_data($con)
{
 $query = "SELECT * FROM timetable";
 $result = mysqli_query($con, $query);
 return mysqli_num_rows($result);
}

$output = array(
 "draw"    => intval($_POST["draw"]),
 "recordsTotal"  =>  get_all_data($con),
 "recordsFiltered" => $number_filter_row,
 "data"    => $data
);

echo json_encode($output);

?>
