<?php

// This is a sample code in case you wish to check the username from a mysql db table
include('db.php');
$con = connect_db();
if($_GET['id'])
{
$id=$_GET['id'];
 $sql = "delete from products where id='$id'";
 mysqli_query($con,$sql);
}

?>