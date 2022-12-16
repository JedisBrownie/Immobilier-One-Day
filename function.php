<?php
    include('connect.php');

    function logIn($nom,$mdp)
    {
        $co=connect();
        
        $request = "SELECT * FROM USERS WHERE Nom='%s' and Mdp='%s'";

        $sprintf =($request,$nom,$mdp);

        $querry = pg_query($co,$sprintf);

        return $querry;
    }

    function insertMembre($nom,$mdp,$email,$estAdmin)
    {
        $co=connect();
        $request = "INSERT INTO USERS VALUES(DEFAULT,'%s','%s','%s',%d)";
        $sprintf = sprintf($request,$nom,$mdp,$email,$estAdmin);
        $querry = pg_query($co,$sprintf);
        return $querry;
    }
?>