<?php
    // try 
    // {
    //     $connection = oci_connect('localhost/orcl', 'immobilier', 'immobilier');
    // } 
    // catch (\Throwable $th) 
    // {
    //     echo $th;
    // }   
    // try 
    // {
    //     $ODBCConnection = odbc_connect("Driver={Devart ODBC driver for Oracle};Direct=true;Host=localhost;Port=1521;Service_Name=orcl;User_ID=CLRExtProc;password=Mdpprom2", "immobilier", "immobilier");
    //     echo $ODBCConnection;
    // } 
    // catch (\Throwable $th) 
    // {
    //     echo $th;
    // }
    
    // $user ='postgres';
    // $mdp = 'root';
    // $dsn = 'pgsql:host=localhost;port=5432;dbname=immobilier';

    // try 
    // {
    //     $data = new PDO($dsn,$user,$mdp);
    // } 
    // catch (PDOException $e) 
    // {
    //     print "Erreur ! : " . $e->getMessage();
    //     die();
    // }
    function connect()
    {
        return pg_connect("host=localhost port=5432 dbname=immobilier user=postgres password=root");
    }
            
?>