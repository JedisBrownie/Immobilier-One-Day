<?php
    require('connect.php');

    // Login
    function logIn($nom,$mdp)
    {
        $co=connect();
        
        $request = "SELECT * FROM USERS WHERE Nom='%s' and Mdp='%s'";

        $sprintf =sprintf($request,$nom,$mdp);

        $query = pg_query($co,$sprintf);

        return $query;
    }

    // Sign Up
    function insertMembre($nom,$mdp,$email,$estAdmin)
    {
        $co=connect();
        $request = "INSERT INTO USERS VALUES(DEFAULT,'%s','%s','%s',%d)";
        $sprintf = sprintf($request,$nom,$mdp,$email,$estAdmin);
        $querry = pg_query($co,$sprintf);
        return $querry;
    }

    // Select listHab
    function listHabitation()
    {
        $co = connect();

        $request = "select * from habitation";
        $query = pg_query($co, $request);

        return $query;
    }

    // Insert Reservation
    function reservation($idHab, $idUser, $nbLocataire, $startDate, $endDate)
    {
        $co = connect();

        $request = "insert into reservation values('%i', '%i', '%i', '%s', '%')";
        $sprintf = sprintf($request, $idHab, $idUser, $nbLocataire, $startDate, $endDate);

        $query = pg_query($co, $sprintf);
        $fetch = pg_fetch_assoc($query);

        return $fetch;
    }
?>