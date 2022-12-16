<?php
    include('function.php');

    $query = listHabitation();
?>

<?php 
    session_start();

    $idUser = $_GET['idUser'];
    echo $idUser;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet" type="text/css" />
    <title>House List</title>
</head>
<body>

        <img src="Pic/th.jpg" width="100px" heigth="75px">
        <hr>
        <h2 id="titre1"> <center> Homes around the World </center></h2>
        <h1 id="titre2"> <center> Discover beautiful houses with all the comfort of home. </center></h1>
        <!-- <div id="list1">
            <div id="cadre1">
                <div id="image1"><a href="detailedHab.php"><img src="Pic/image1.jpg" width="250px" height="200px"></a></div>
                <div id="texte1"><p>Stellenbosch,Afrique du Sud</p></div>
                <div id="textegris"><p>Propose par Annemien</p></div>
                <div id="textegris"><p>5-10 avr .Professionnel</p></div>
                <div id="prix">144£ par nuit</div>
            </div>
            <div id="cadre2">
                <div id="image1"><a href="detailedHab.php"><img src="Pic/image1.jpg" width="250px" height="200px"></a></div>
                <div id="texte1"><p>Stellenbosch,Afrique du Sud</p></div>
                <div id="textegris"><p>Propose par Annemien</p></div>
                <div id="textegris"><p>5-10 avr .Professionnel</p></div>
                <div id="prix">144£ par nuit</div>
            </div>
            <div id="cadre3">
                <div id="image1"><a href="detailedHab.php"><img src="Pic/image1.jpg" width="250px" height="200px"></a></div>
                <div id="texte1"><p>Stellenbosch,Afrique du Sud</p></div>
                <div id="textegris"><p>Propose par Annemien</p></div>
                <div id="textegris"><p>5-10 avr .Professionnel</p></div>
                <div id="prix">144£ par nuit</div>
            </div>
            <div id="cadre4">
                <div id="image1"><a href="detailedHab.php"><img src="Pic/image1.jpg" width="250px" height="200px"></a></div>
                <div id="texte1"><p>Stellenbosch,Afrique du Sud</p></div>
                <div id="textegris"><p>Propose par Annemien</p></div>
                <div id="textegris"><p>5-10 avr .Professionnel</p></div>
                <div id="prix">144£ par nuit</div>
            </div>
        </div>
        <br>
        <br>
        <div id="list2">
            <div id="cadre1">
                <div id="image1"><a href="detailedHab.php"><img src="Pic/image1.jpg" width="250px" height="200px"></a></div>
                <div id="texte1"><p>Stellenbosch,Afrique du Sud</p></div>
                <div id="textegris"><p>Propose par Annemien</p></div>
                <div id="textegris"><p>5-10 avr .Professionnel</p></div>
                <div id="prix">144£ par nuit</div>
            </div>
            <div id="cadre2">
                <div id="image1"><a href="detailedHab.php"><img src="Pic/image1.jpg" width="250px" height="200px"></a></div>
                <div id="texte1"><p>Stellenbosch,Afrique du Sud</p></div>
                <div id="textegris"><p>Propose par Annemien</p></div>
                <div id="textegris"><p>5-10 avr .Professionnel</p></div>
                <div id="prix">144£ par nuit</div>
            </div>
            <div id="cadre3">
                <div id="image1"><a href="detailedHab.php"><img src="Pic/image1.jpg" width="250px" height="200px"></a></div>
                <div id="texte1"><p>Stellenbosch,Afrique du Sud</p></div>
                <div id="textegris"><p>Propose par Annemien</p></div>
                <div id="textegris"><p>5-10 avr .Professionnel</p></div>
                <div id="prix">144£ par nuit</div>
            </div>
            <div id="cadre4">
                <div id="image1"><a href="detailedHab.php"><img src="Pic/image1.jpg" width="250px" height="200px"></a></div>
                <div id="texte1"><p>Stellenbosch,Afrique du Sud</p></div>
                <div id="textegris"><p>Propose par Annemien</p></div>
                <div id="textegris"><p>5-10 avr .Professionnel</p></div>
                <div id="prix">144£ par nuit</div>
            </div>
        </div> -->
        <div id="listHab">
            <?php while ($fetch = pg_fetch_assoc($query)) { ?>
            <div class="cadre">
                <div class="image1"><a href="detailedHab.php?idUser=<?php echo $idUser ?>&pic=<?php echo $fetch['housepic']; ?>&"><img src="Pic/<?php echo $fetch['housepic']; ?>" width="250" height="200"></a></div>
                <br>
                <div class="texte1"><?php echo $fetch['quartier']; ?></div>
                <br>
                <div class="textegris"><?php echo $fetch['host']; ?></div>
                <br>
                <div class="prix"><?php echo $fetch['loyer']; ?></div>
            </div>
            <?php } ?>
        </div>
</body>
</html>