<?php
if (!isset($_SESSION['id_user'])) {
    header('location: ../index.php');
}

if (isset($_SESSION['id_role'])) {
    $id = $_SESSION['id_role'];
    if($id != 1){
    header('location: ../index.php');
    }
}

if (isset($_POST['logout'])) {
    session_destroy();
    unset($_SESSION['id_user']);
    header("location: ../index.php");
}   ?>