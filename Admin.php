<?php
include("connect.php");
$f="SELECT * FROM produit ";
$k=mysqli_query($conn,$f);
$T="SELECT * FROM inscri ";
$t=mysqli_query($conn,$T);
$C="SELECT * FROM commades";
$c=mysqli_query($conn,$C);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin</title>
    
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
   <style> 
   *
{
    margin: 0;
    padding: 0;
    list-style: none;
    text-decoration: none;
}
.leftbar
{
    background-color: black;
    position: fixed;
    width: 20%;
 
    opacity: 0.88;
    margin-left: -300px;
    transition: 0.4s;
}
.leftbar header
{
    padding-bottom: 10px;
    width: 100%;
    text-align: center;
    color: white;
    font-size: 45px;
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    background-color: rgb(4, 4, 48);
}
.leftbar ul 
{
    text-align: center;
}
.leftbar ul li
{
    
    padding-bottom: 44px;
    border-top: 1px solid rgb(113, 113, 204);
    border-bottom: 1px solid rgb(113, 113, 204);
    padding-top: 20px;
    text-align: center;
    color: white;
}
.leftbar ul li a
{
    color: white;
    cursor: pointer;
    transition: 0.5s ;
    font-size: 30px;
}
.leftbar ul li a i
{
    color: white;
}
.leftbar ul li:hover a
{
    padding-left: 50px;
}
#check
{
    display: none;
}
label #btn , label #cancel
{
    position: absolute;
    cursor: pointer;

}
label #btn
{
    margin-left: 100px;
    left: 40px;
    top: 25px;
    font-size: 35px;
    color: white;
    background: transparent;
    transition: all .5s;
}
label #cancel
{
    z-index: 1111;
    margin-left: -300px;
   color: white;
    cursor: pointer;
    transition: all .7s ease;
}

#check:checked ~ .leftbar
{
    margin-left:0;
}
#check:checked ~ label #btn
{
    margin-left: 250;
    opacity: 0;
    pointer-events: none;
}
section
{
    background: url(1111.jpg) no-repeat;
    background-position: center;
    background-size: cover;
    height: 100vh;
    display: flex;
}
#check:checked ~ label #cancel
{
    margin-left: 240px;
}

section .tot
{
    margin-top: 200px;
    margin-left: 400px;
    width: 80%;
}
section .tot th
{
    background-color: #B2BEB5;
    margin: 10px;
    padding: 10px;
    border-radius: 3px;
    opacity: 0.88;
}
section .tot td
{
    background-color: #d8deda ;
    margin: 10px;
    padding: 10px;
    padding-bottom: -10;
    border-radius: 3px;
    opacity: 0.88;
}
.tot a
{
    background-color:#d8deda ;
    padding: 20px;
    font-size: 18px;
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    border-radius: 2px ;
    opacity: 0.8;
    cursor: pointer;
}
.tot .btn:hover a 
{
   border:2px solid #575a58 ;
   font-size: 20px;
}
section .user
{
    margin-top: 100px;
    margin-left: -1000px;
}
section .user th
{
    background-color: #B2BEB5;
    margin: 20px;
    padding: 20px;
    border-radius: 3px;
    opacity: 0.88;
}
section .user td
{
    background-color: #d8deda ;
    margin: 20px;
    padding: 20px;
    border-radius: 3px;
    opacity: 0.88;
}


    </style>
</head>
<body>
<div class="tet">
    <input type="checkbox" id="check">
    <label for="check">
         <i class="fas fa-stream" id="btn"></i>
         <i class="far fa-window-close" id="cancel"></i>

</label>
    <div class="leftbar">
        <header>CLOTHING</header>
        <ul>
            <li>
                <a href="#" id="coner1" onclick="teste1()"><i class="fas fa-user-edit"> </i>  Utilisateur</a>
            </li>
            <li>
                <a href="#" id="coner" onclick="teste()"><i class="fas fa-shopping-cart"  > </i>  Produit</a>
            </li>
            <li>
                <a href="#"  onclick="com()"><i class="fa fa-check-square"> </i> Commandes </a>
            </li>
            <li>
                <a href="#"  onclick="decon()"><i class="fas fa-power-off"> </i>  Deconnexion</a>
            </li>

        </ul>
    </div>
    <section>
    <div class="tot"  id="produit"  style="visibility: hidden;" >
        <table >
            <tr >
                <td colspan="5">
               
                </td>
            </tr>
        <tr>
            <th>
                id 
            </th>
            <th>
                nom
            </th>
            <th>
                prix
            </th>
            <th>
                size
            </th>
            <th>
                detail
            </th>
        </tr>
    <?php
        foreach ($k as $A) :
        ?>
        <tr>
          <td>
        <?=$A['id']?>
          </td>
          <td>
          <?=$A['nom']?>
          </td>
          <td>
          <?=$A['prix']?>
          </td>
          <td>
          <?=$A['taille']?>
          </td>
          <td>
          <?=$A['detail']?>
          </td>
          <td>
          <?php  echo " <img src='images/".$A['image']."' >";
                ?>
          </td>
          <td>
              <?= $A['categ'] ?>
          </td>
        </tr>
        <?php 
        endforeach
    ?>
    </table><br><br><br>
    <a href="ajouter.php" id="btn1" style="margin-left:100px;">Ajouter</a>
    <a href="modifier.php" id="btn1" style="margin-left: 100px;">Modifier</a>
    <a href="supprimer.php" id="btn1" style="margin-left: 100px;">Supprimer</a>
</div>
<div class="user" id="users" style="visibility: hidden;" >
    <table >
            <tr >
                </td>
            </tr>
        <tr>
            <th>
                id 
            </th>
            <th>
            nom
            </th>
            <th>
                prenom
            </th>
            <th>
                cne
            </th>
            <th>
                email
            </th>
        </tr>
    <?php
        foreach ( $t as $A) :
        ?>
        <tr>
          <td>
        <?=$A['id']?>
          </td>
          <td>
          <?=$A['fname']?>
          </td>
          <td>
          <?=$A['lname']?>
          </td>
          <td>
          <?=$A['cne']?>
          </td>
          <td>
          <?=$A['email']?>
          </td>
        </tr>
        <?php 
        endforeach
    ?>
  </table><br><br><br>
  <form id="form" >
<table id="validCom" style="visibility: visibles;">
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
     </tr>
     <?php
        foreach ( $c as $cc) :
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
     </tr>
     <?php 
        endforeach
    ?>
  </table>
</form>
</div>
    </section>
</body>
<script>
    var produit=document.getElementById('produit');
    var users= document.getElementById('users');
    var commande=document.getElementById("validCom");
     function teste()
 {
    //document.getElementById('cont2').style.visibility='hidden';
    produit.style.visibility='visible';
 users.style.visibility='hidden';
 commande.style.visibility='hidden';
    
 }
 function teste1()
 {
  users.style.visibility='visible';
 commande.style.visibility='hidden';
 produit.style.visibility='hidden';
 }
function decon()
{
    var conf = confirm("Voulez Vous quitter ? ") ;  
    if(conf)
    {
        window.location.assign("login.php");
    }
}

 function com(){
    commande.style.visibility="visible";
    users.style.visibility='hidden';
    produit.style.visibility='hidden';
}
</script>
</html>