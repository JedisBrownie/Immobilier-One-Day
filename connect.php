<?php
    function connect()
    {
        return pg_connect("host=localhost port=5432 dbname=Immobilier user=postgres password=root");
    }       
?>