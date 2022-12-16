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
    function listHabCustom($idHabitation)
    {
        $co = connect();

        $request = "select * from habitation where idhabitation = ".$idHabitation;
        // $sprintf = sprintf($request, $idHabitation);
        $query = pg_query($co, $request);

        return $query;
    }

    // Select Reservation
    function listReservation()
    {   
        $co = connect();

        $request = "select * from reservation";
        $query = pg_query($co, $request);

        return $query;
    }
    function listReservationCustom($idHabitation)
    {
        $co = connect();

        $request = "select * from reservation where idHabitation=".$idHabitation;
        $query = pg_query($request);

        return $query;
    }

    //Select image
    function selectImage($idHabitation)
    {
	    $co = connect();
	   $request = "SELECT * FROM IMAGES WHERE idHabitation = %d";
       $sprintf = sprintf($request,$idHabitation);
       $query = pg_query($co,$sprintf);
       return $query;
    }

    // Insert Reservation
    function reservation($idHab, $idUser, $nbLocataire, $startDate, $endDate)
    {
        $co = connect();

        $request = "insert into reservation(idHabitation, idUser, nbLocataire, datedebutreservation, datefinreservation) values(%d, %d, %d, '%s', '%s')";

        $sprintf =sprintf($request, $idHab, $idUser, $nbLocataire, $startDate, $endDate);

        $query = pg_query($sprintf);
        $fetch = pg_fetch_assoc($query);

        return $fetch;
    }

    

?>