<?php
include("connect.php");
if (isset($_POST['submit']))
{
    $query="DELETE FROM produit WHERE id='$_POST[id]'";
    mysqli_query($conn,$query);
    echo "ligne supprimer";
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="supprimer.css" rel="stylesheet"/>
    <title>Supprimer Article </title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF'] ;?>" method="POST">
    <h2>Supprimer un article </h2>   
    <input type="number" name="id" placeholder="id" required/> <br><br>
    <input type="submit" name="submit" value="supprimer" title="ajout"/>
    <a href="Admin.php">Retour</a>
    </form>
</body>
</html>