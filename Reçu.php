
<?php
include("connect.php");

    //$email=$_POST['email'];
    $query="SELECT * FROM commades";
    $row = mysqli_query($conn,$query); // le resultat de la requet est dans la variable $row = est un arraylst



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <br> <br>
    <hr>
    <hr>
    <h1>Merci de votre visite</h1>
    <h2>Votre Reçu de Commandation</h2>
    <?php
       while($res = mysqli_fetch_array($row))
       {
            echo "id de commande : $res[id]"."<br><br>";
            echo "idproduit : $res[idproduit]"."<br><br>";
            echo "quantite demandé: $res[quantite]"."<br><br>";
            echo "taille demandé : $res[taille]"."<br><br>";
            $tot=$res['quantite']*10;
            echo "total : $tot";
       }
    ?>
</body>
</html>