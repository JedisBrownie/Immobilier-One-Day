<?php
    include('function.php');

    session_start();

    $_SESSION['nom'] = $_POST['name'];

    $_SESSION['pwd'] = $_POST['password'];

    $nom = $_SESSION['nom'];
    $mdp = $_SESSION['pwd'];

    $querry = logIn($nom,$mdp);

    $assoc = pg_fetch_assoc($querry);

    if (condition) 
    {
        # code...
    }

    if (condition) 
    {
        # code...
    }
?>