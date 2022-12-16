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

    $queryVerify = listReservationCustom($idHabitation);

    $verify = 0;
    while($fetchVerify = pg_fetch_assoc($queryVerify))
    {
        if ($datearrive >= $fetchVerify['datedebutreservation'] && $datearrive <= $fetchVerify['datefinreservation']) 
        {
            $verify = 1;
            break;
        }
    }

        if ($verify == 0) 
        {
            $query = reservation($idHabitation, $idUser, $locataires, $datearrive, $datedepart);        
        }
        if ($verify == 1) 
        {
            header('Location: detailedHab.php?idUser='.$idUser."&error=1");
        }

?>