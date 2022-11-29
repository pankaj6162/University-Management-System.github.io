<?php
//require("dbc.php");
$con = mysqli_connect("localhost","root","");
function getUsersData($id)
{
  $array= array();
  $query=mysqli_query($con,"SELECT * FROM marks WHERE Roll_no ='$id'");
  while($row= mysqli_fetch_assoc($query))
  {
    $array['Roll_no']= $row['Roll_no'];
    $array['Semester']= $row['Semester'];
    $array['Marks Obtained']= $row['Marks Obtained'];
    $array['Total Marks']= $row['Total Marks'];
  }
  return $array;
}
function getId($Roll_no)
{
  $query=mysqli_query($con,"SELECT * FROM marks WHERE Roll_no ='$Roll_no'");
  while($row=mysqli_fetch_assoc($query))
  {
    return $row['Roll_no'];
  }
}
 ?>
