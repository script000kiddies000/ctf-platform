<?php

session_start();

$sesi_username      = isset($_SESSION['user']) ? $_SESSION['user'] : NULL;

if ($_SESSION['status'] == 2 && !empty($_SESSION['user']))

{

    include "inc/connect.php";



    $id = $_GET['id_delete'];

    $query_delete = mysqli_query($con, "DELETE FROM information where id_information='".$id."'");

    echo "<meta http-equiv='refresh' content='0;url=information.php'>";

}else{

  session_destroy();

  header('Location:../login.php');

}

?>