<?php 
    include('function.php');
?>

<?php 
    session_start();

    $idUser = $_GET['idUser'];
    $idHabitation = $_GET['idHabitation'];
    $picture = $_GET['pic'];
    $quartier = $_GET['quartier'];
    $host = $_GET['host'];
    $loyer = $_GET['loyer'];
   
    $selectedHabitation = listHabCustom($idHabitation);
    $fetchHabitation = pg_fetch_assoc($selectedHabitation);

    $selectImage = selectImage($idHabitation);
    $fetchImage = pg_fetch_assoc($selectImage);
    $imagedress1 = $fetchImage['photodressin1'];
    $imagedress2 = $fetchImage['photodressin2'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style2.css" rel="stylesheet" type="text/css" />
    <title>detail habitation</title>
</head>
<body>
    <div id="menu">
        <div id="logo"><img src="Pic/th.jpg" width="100px" heigth="75px"></div>
        <div id="recherche">
            <form action="treatRecherche.php">
                <input type="text" placeholder="Commencez votre recherche">
                <input type="submit" value="Cliquez ici">
            </form>
        </div>
        </div>
    </div>
        <hr>
        <div id="contenu">
            <center>
                <div id="titre"><h2>Chambre d'hote de luxe deux fois centrale avec balcon</h2></div>
                <div id="saryList">
                    <div id="sary1"><img src="Pic/<?php echo $picture; ?>" width="400px" height = "400px"></div>
                    <div id="sarykely">
                    <div id="sary2"><img src="Pic/<?php echo $imagedress1;?>" width="205px" height ="205px"></div>
                    <div id="sary2"><img src="Pic/sary2.jpg" width="205px" height ="205px"></div>
                    </div>
            </center>
            </div>

            <center>
            <div id="detail"><p><?php echo $fetchHabitation['chambre'] ?> Chambre. <?php echo $fetchHabitation['douche'] ?> Douche. <?php echo $fetchHabitation['balcon'] ?> Balcon et <?php echo $fetchHabitation['salon'] ?> Piece de vie</p></div>
            </center>

            <div id="reservation">
                <form action="treatReservation.php?idHabitation=<?php echo $idHabitation; ?>&idUser=<?php echo $idUser; ?>$loyer=<?php echo $fetchHabitation['loyer']; ?>">
                    <br>
                    <div id="arrive">
                        <p>Arrive</p>
                        <input type="date" name="datearrive" id="datearrive">
                    </div>
                    <div id="depart">
                        <p>Depart</p>
                        <input type="date" name="datedepart" id="datedepart">
                    </div>
                    <div id="but"><input type="submit" value="Reservez"></div>
                    <div id="locataires"><input type="number" name="locataires" placeholder="Nombre Locataires"></div>
                    </div>
                </form>
        </div>
        <a href="home.php?idUser=<?php echo $idUser; ?>">Retour</a>
</body>
</html>