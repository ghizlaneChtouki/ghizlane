<?php 
include("connect.php");
$f="SELECT * FROM  commades";
$k=mysqli_query($conn,$f);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>descriptif</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="StyleDesc.css" rel="stylesheet" />
    
    <style> 
 #flip {

  text-align: center;

 
}

#panel {
 text-align: center;
  padding: 50px;
  display: none;
  position:relative;
  left:1230px;
  top:75px;
  background:white;
  width:200px;
  height:200px;
  opacity:0.75;
}
.inp{
    background-color:red;
    width:200px;
    height:30px;
}
#label{
    border:2px red solid;
    height:100px;
    width:100px;
    position:relative;
    right:50px;
    top:-20px;
    border-radius:50%;
    background-color: red;
    color:white;
}
.validCom
{

}
</style>

  
 

</head>
<body>
    <nav>
        <div class="logo">
            <strong>CLOTHING</strong>
        </div>
        <div class="liste">
            <ul>
                <li><a href="index1.php"><i class="fa-solid fa-house-chimney"></i>Home</a></li>
                <li><a href="about.php"><i class="fa-solid fa-eject"></i>About</a></li>
                <li><a href="contact.php"><i class="fa-solid fa-phone"></i>Contact</a></li>
              <!--  <li><span  id="flip"><i class="fa-solid fa-basket-shopping" ></i>Pannier</span></li>   
                <label id="label"> <?php //echo $mon; ?> </label>
            </ul>-->
        </div>
        <div class="recherche">
            <input type="text" class="cherche" name="chercher" placeholder="chercher ici ..."/>
            <input type="submit" class="btn" name="chercher" value="Rechercher" />
        </div>
</nav> 
    <section>
   
<form method="post" action="">
<div class="produit">
     <table id="validCom" >
     <tr>
         <th>
             id
         </th>
         <th>
             idproduit
         </th>
         <th>
             quantite
         </th>
         <th>
           taille
         </th>
         <th>
             prix total
         </th>
     </tr>
     <?php
        foreach ( $k as $cc) :
        ?>
     <tr>
        <td>
        <?=$cc['id']?>
        </td>
        <td>
        <?=$cc['idproduit']?>
        </td>
        <td>
        <?=$cc['quantite']?>
        </td>
        <td>
        <?=$cc['taille']?>
        </td>
        <td>
            <?= $cc['quantite']*10 ?>
        </td>
     </tr>
     <?php 
        endforeach
    ?>
    <tr>
        <td>
            <inpu type="submit" name="modifier" value="modifier"/>
        </td>
    </tr>
  </table>
   
</form>

      <a href="genpdf.php">Telecharger Reçu</a>
    </section>
</body>
<script>
    function confirm()
    {
        alert("produit ajouter au panier ");
    }
</script>
</html>