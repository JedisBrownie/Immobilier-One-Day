<?php
    include('function.php');

    session_start();

    $_SESSION['nom'] = $_POST['name'];

    $_SESSION['pwd'] = $_POST['password'];

    $nom = $_SESSION['nom'];
    $mdp = $_SESSION['pwd'];

    $querry = logIn($nom,$mdp);

    $assoc = pg_fetch_assoc($querry);

    $idUser = $assoc['iduser'];

    if ($assoc == null) 
    {
        header('Location: index.php');
    }

    if ($assoc != null) 
    {
        header('Location: home.php');
    }
?>