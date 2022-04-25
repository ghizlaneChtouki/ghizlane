
<?php

$msg="";
if(isset($_POST['submit'])){


include("connect.php");
$nom=$_POST['nom'];
$prix=$_POST['prix'];
$taille=$_POST['taille'];
$detail=$_POST['detail'];
$categ=$_POST['categ'];


$image= $_FILES['imge']['name'];
$upload= "images/".$image;
move_uploaded_file($_FILES['imge']['tmp_name'],$upload);


$query="INSERT INTO produit(nom,prix,taille,detail,image,categ) VALUES ('$nom','$prix','$taille','$detail','$image','$categ')";
$con = mysqli_query($conn,$query);
if ($con)
{
    echo "image inserer par succes";
}
else 
{
    echo "probleme";
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="ajouter.css" rel="stylesheet"/>
    <title>Ajouter Article</title>
    <style>
 
        *
{
    margin: 0;
    padding: 0;

}
body
{
    background-image: url(1111.jpg) ;
    background-repeat: no-repeat;
    background-attachment:fixed;
    width: 100%;
    height:100%;   
    background-size: cover;
}
form
{
    margin-left: 450px;
    margin-top:  30px;
    background-color: #9cb4cb;
    height: 700px;
    padding: 50px;
    opacity: 0.8;
    border-radius: 10px;
    width:500px;
}
form input
{
    width: 300px;
    height: 30px;
    background-color: transparent;
    border: transparent;
    border-bottom: 2px solid black;
    font-size: 16px;
    font-family: Arial, Helvetica, sans-serif;
    padding-left: 20px;
    padding-right: 20px;
    padding: 20px;
    margin: 10px;
}
form select
{
    padding-left: 20px;
    padding-right: 20px;
    padding: 20px;
    margin: 10px;
    width: 250px;
    height: 30px;
    border: transparent;
    border-bottom: 2px solid black;
 
    cursor: pointer;
    color:red;
}

form textarea
{
    background: transparent;
}
form input[title="ajout"]
{
    width: 100px;
    height: 40px;
    border: 3px solid black;
    border-radius: 10px 10px 10px 10px;
    text-align: center;
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    font-size: 20px;
    padding-bottom: 40px;
    cursor: pointer;
}
form input:hover
{
    background-color: #47637e;
    color: #9cb4cb;
    border-color: #47637e;
}
form a
{
    margin-left: 50px;
    text-decoration: none;
    color: black;
    padding: 23px;
    border: 3px solid black;
    border-radius: 10px 10px 10px 10px ;
    width: 130px;
    height: 40px;
}
form a:hover
{
    background-color: #47637e;
    color: #9cb4cb;
    border-color: #47637e;
    
}
        </style>
  

</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF'] ;?>" method="POST"
    enctype="multipart/form-data"
    >
    <h2>Ajouter un article </h2>
         <input type="text" name="nom" placeholder="Nom" required/><br><br>
         <input type="text" name="prix" placeholder="prix" required/><br><br>
         <select name="taille" aria-placeholder="taille" value='taille' required>
             <option value="select" selected="selected">S</option>
             <option value="S">S</option>
             <option value="M">M</option>
             <option value="L">L</option>
             <option value="XL">XL</option>
             <option value="XXL">XXL</option>    
         </select><br><br>
         <select name="categ" aria-placeholder="taille" value='taille' required>
             <option value="dress">dress</option>
             <option value="shoes">shoes</option>
             <option value="T-shirt">T-shirt</option>
             <option value="watshes">watshes</option> 
         </select><br><br>
         <input type="file" name="imge"  /><br><br>
           <textarea id="texter" rows="7" cols="50" name="detail" placeholder="detail" required>

           </textarea> <br><br>
         <input type="submit" name="submit" value="ajouter" title="ajout"/>
         <a href="Admin.php">Retour</a>
    </form>
</body>
</html>