<?php   
    include('function.php');

    session_start();

    $idHabitation = $_GET['idHabitation'];
    $idUser = $_GET['idUser'];
    $loyer = $_GET['loyer'];

    $_SESSION['datearrive'] = $_POST['datearrive'];
    $_SESSION['datepart'] = $_POST['datepart'];
    $_SESSION['locataires'] = $_POST['locataires'];

        $datearrive = $_SESSION['datearrive'];
        $datepart = $_SESSION['datepart'];
        $locataires = $_SESSION['locataires'];

    $query = reservation($idHabitation, $idUser, $locataires, $datearrive, $datepart);
    var_dump($query);
?>