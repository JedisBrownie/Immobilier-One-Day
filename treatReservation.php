<?php 
    require('connect.php');
    include('function.php');

    session_start();

    $idHabitation = $_GET['idHabitation'];
    $idUser = $_GET['idUser'];

    $_SESSION['prix'] = $_POST['prix'];
    $_SESSION['datearrive'] = $_POST['datearrive'];
    $_SESSION['datearrive'] = $_POST['datearrive'];
?>