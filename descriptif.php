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
</style>
<script src="jquery.js"></script>
<script> 
$(document).ready(function(){
  $("#flip").click(function(){
    $("#panel").slideToggle("slow");
  });
});
</script>

<?php 
include("connect.php");
setcookie('pass',strval(0));
 if(isset($_COOKIE['pass']))
 {
    $mon = $_COOKIE['pass'];
 }
 if (isset($_POST['vide'])){
   header("location:vider2.php");

 }
 if (isset($_POST['ok'])){
    header("location:remplir.php");
  }
  if (isset ($_POST['input2']))
  {
    $name=$_POST['id'];
    $email=$_POST['size'];
    $password=$_POST['quantité'];
    $query="INSERT INTO commades(idproduit,quantite,taille) VALUE ('$name','$password','$email')";
    mysqli_query($conn,$query);
    echo "inscri";                             ;   
  }
 ?>

</script>
  
 

</head>
<body>
    <nav>
        <div class="logo">
            <strong>CLOTHING</strong>
        </div>
        <div class="liste">
            <ul>
                <li><a href="index1.php"><i class="fa-solid fa-house-chimney"></i>Home</a></li>
                <li><a href="index1.php"><i class="fa-solid fa-eject"></i>About</a></li>
                <li><a href="index1.php"><i class="fa-solid fa-phone"></i>Contact</a></li>
              <!--  <li><span  id="flip"><i class="fa-solid fa-basket-shopping" ></i>Pannier</span></li>   
                <label id="label"> <?php //echo $mon; ?> </label>
            </ul>-->
        </div>
        <div class="recherche">
            <input type="text" class="cherche" name="chercher" placeholder="chercher ici ..."/>
            <input type="submit" class="btn" name="chercher" value="Rechercher" />
        </div>
    </nav>
    <form id="panel" method="POST" action=""> VOICI VOTRE TOTAL <br/> <br/> 
           <label id="label1">  <?php ?> </label> <br/> <br/>
           <?php
                $total= $mon*10;
                echo $mon*10,"$";
               
           ?>
 <a   name="ok"  class="ajout" href="genpdf.php" >Telecharger Reçu</a>
<input type="submit" name="vide" value="vider pannier" class="inp"/> <br/> <br/>
</form> 
    <section>
   

        <div class="produit">
              <img src="card5.png" alt="produit1" />
          </div>
   
          <div class="right">
          <div class="desc">
              <div class="titre">
                  <!-- la partie de jquery -->


                 <div>  <strong>Watches</strong> </div>
              </div><br>
            
              <div class="texte">
                  Lorem ipsum dolor sit amet consectetur, adipisicing elit.<br> Veritatis corrupti assumenda repellendus harum voluptas <br>
                  suscipit necessitatibus quidem, delectus deleniti pariatur commodi,<br>
              </div>
                  <form method="post" action="<?php echo $_SERVER['PHP_SELF'] ;?>">
                      <label>Id </label>
                      <input type="number" name="id" value="54"  disabled/>
                      <label>Taille </label>
                      <select name="size">
                          <option value="XXL">XXL</option>
                          <option value="XL">XL</option>
                          <option value="L">L</option>
                          <option value="M">M</option>
                          <option value="S">S</option>
                      </select> <br>
                      <label>Quantité</label>
<input type="number" name="quantité" class="quant"/> <br>
 <input type="submit" name="input2" value="confirmer" class="inp" onclick="confi()"/> <br/> <br/>
                  </form>
          </div>
          </div>

    </section>
</body>
<script>
    function confi()
    {
        var conf= confirm("Voulez vous ajouter ce produit au panier?? cliquer sur ok pour consulter le panier ");
if(conf){
    window.open("panier.php");
}

    }
</script>
</html>