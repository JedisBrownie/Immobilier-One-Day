<?php   
    include('function.php');

    session_start();

    $idHabitation = $_GET['idHabitation'];
    $idUser = $_GET['idUser'];
    $loyer = $_GET['loyer'];

    $_SESSION['datearrive'] = $_POST['datearrive'];
    $_SESSION['datedepart'] = $_POST['datedepart'];
    $_SESSION['locataires'] = $_POST['locataires'];

        $datearrive = $_SESSION['datearrive'];
        $datedepart = $_SESSION['datedepart'];
        $locataires = $_SESSION['locataires'];

    $query = reservation($idHabitation, $idUser, $locataires, $datearrive, $datedepart);
    var_dump($query);
?>