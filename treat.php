<?php
    include('function.php');

    session_start();

    $_SESSION['nom'] = $_POST['name'];
    $_SESSION['mdp'] = $_POST['pwd'];
    $_SESSION['mail'] = $_POST['email'];
    $_SESSION['adm'] = $_POST['admin'];
    
    $querry = insertMembre($_SESSION['nom'],$_SESSION['mdp'],$_SESSION['mail'],$_SESSION['adm']);
    $assoc = pg_fetch_assoc($querry);

    
?>