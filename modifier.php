<?php
include("connect.php");
if(isset($_POST['submit']))
{
    $query="UPDATE produit SET nom='$_POST[nom]' , prix='$_POST[prix]',size='$_POST[taille]',detail='$_POST[detail]' WHERE id='$_POST[id]'";
    mysqli_query($conn,$query);
    echo "ligne modifier";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="modifier.css" rel="stylesheet"/>
    <title>Modifier Article </title>
</head>
<body>
    
    <form action="<?php echo $_SERVER['PHP_SELF'] ;?>" method="POST">
    <h2>Modifier un article</h2>
         <input type="number" name="id" placeholder="id" required/><br><br>
         <input type="text" name="nom" placeholder="nom" required/><br><br>
         <input type="text" name="prix" placeholder="prix"  required/><br><br>
         <select name="taille">
             <option value="S">S</option>
             <option value="M">M</option>
             <option value="L">L</option>
             <option value="XL">XL</option>
             <option value="XXL">XXL</option>    
         </select><br><br>
         <textarea id="texter" rows="7" cols="50" name="detail" placeholder="detail" required>

</textarea> <br><br>
         <input type="submit" name="submit" value="modifier"  title="ajout"/>
         <a href="Admin.php">Retour</a>
    </form>
</body>
</html>