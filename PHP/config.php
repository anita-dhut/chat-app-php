<?php
$conn = mysqli_connect("localhost","root","","chatty");
if(!$conn){
    echo "Database connection error".mysqli_connect_error();
  }

?>