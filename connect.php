<?php
    function connect()
    {
        return pg_connect("host=localhost port=5432 dbname=immobilier user=postgres password=root");
    }       
?>