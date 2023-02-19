<?php session_start();
if (!isset($_SESSION['id_user'])) {
    header('location: ../index.html');
}

if (isset($_SESSION['id_role'])) {
    $id = $_SESSION['id_role'];
    if($id != 2){
    header('location: ../index.html');
    }
}

if (isset($_POST['logout'])) {
    session_destroy();
    unset($_SESSION['id_user']);
    header("location: ../index.html");
}   ?>