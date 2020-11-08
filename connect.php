<?php
  $db_host = "localhost";
  $db_user = "Karim2551";
  $db_password = "@Kar320id";
  $db_name = "as6";

  $connection = mysqli_connect($db_host, $db_user, $db_password, $db_name);

  if(mysqli_connect_error())
  {
    echo mysqli_connect_error();
    exit;
  }

?>