<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="StyleIndex.css" rel="stylesheet" />
    <title>Document</title>
    <style>
        nav{
            z-index: 2;
        }
        </style>
</head>
<body>
    <!--Navbar-->
<nav>
        <div class="logo">
            <strong>CLOTHING</strong>
        </div>
        <div class="liste">
            <ul>
                <li><a href="index1.php"><i class="fa-solid fa-house-chimney"></i>Home</a></li>
                <li><a href="about.html"><i class="fa-solid fa-eject"></i>About</a></li>
                <li><a href="https://www.linkedin.com/in/ghizlane-chtouki-392701225?lipi=urn%3Ali%3Apage%3Ad_flagship3_profile_view_base_contact_details%3BdQlR8VJbTZO94oLwC6eKOw%3D%3D"><i class="fa-solid fa-phone"></i>Contact</a></li>
                <li><a href="panier.php"><i class="fa-solid fa-basket-shopping"></i>Pannier</a></li>
            </ul>
        </div>
        <div class="recherche">
            <input type="text" class="cherche" name="chercher" placeholder="chercher ici ..."/>
            <input type="submit" class="btn" name="chercher" value="Rechercher" />
        </div>
        <div class="liste">
        <ul>
            <li>
            <span onclick="decon()"><i class="fa-solid fa-phone"></i>Deconnexion</span>
            </li>
        </ul>
        </div>

</nav>
    <!--Centre-->
    <div class="image">
		<img src="image/img one.jpg">
	</div>
    <header>
        <div class="titre">
              <h1>Donnez votre entrainement <br/>un nouveau style !</h1>
              <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Hic qui id tempora, <br>
                  repudiandae non voluptatem et quos ratione ea<br>
                   fugit? Temporibus culpa iure quod tempora soluta beatae magni non placeat. <br/>
                si possible de passer un stage de Fin D'etude</p>
        </div>
    </header>
    
 <!--les produits les plus achetés  -->
 <section class="categories"  >
    <div class="contrainer">
        <h2>les produits les plus achetés</h2>
       <div class="row" >
           
               <div class="col-3">
           <a href="#"><img src="card1.png" alt="categorie-1" id="im1" />
               <h4>A Short line about the dress</h4>
              <p>10 $</p> </a>
               </div>
               <div class="col-3">
               <a href="#"><img src="card2.png" alt="categorie-2" id="im2"/>
                   <h4>A Short line about the dress </h4>
                   <p>20 $</p></a>
              </div>
              <div class="col-3">
           <a href="#"><img src="card3.png" alt="categorie-3" id="im3"/>
               <h4>A Short line about the dress</h4>
               <p>29 $</p></a>
              </div>
         <div class="col-3">
       <a href="#"><img src="card4.png" alt="categorie-3" id="im4" />
           <h4>A Short line about the dress</h4>
              <p>30 $</p></a>
           </div>
       
       </div>
    </div>
</section>

<!--Meilleur produits -->
<section class="Feature-produit">
      <div class="contrainer">
          <h2>Categories </h2> <br />
          <h4 class="teste">  Shirts</h4> <br/>
          <div class="row" >
              <div class="col-4">
               <a href="descriptif.php">
                   <img src="card5.png" alt="product-2" />
               <h3>T-shurt Rouge</h3>
               <i class="fa fa-star" aria-hidden="true"></i>
               <i class="fa fa-star" aria-hidden="true"></i>
               <i class="fa fa-star" aria-hidden="true"></i>
               <i class="fa fa-star" aria-hidden="true"></i>
               <i class="fa fa-star-half-o" aria-hidden="true"></i>
               <i class="fa fa-star-o"></i>
               <p>550 $</p>
               </a>
           </div>
           <div class="col-4">
              <a href="#">
               <img src="product image 3.png" alt="product-1" />
               <h3>T-shurt vert </h3>
               <i class="fa fa-star" aria-hidden="true"></i>
               <i class="fa fa-star" aria-hidden="true"></i>
               <i class="fa fa-star" aria-hidden="true"></i>
               <i class="fa fa-star" aria-hidden="true"></i>
               <i class="fa fa-star-half-o" aria-hidden="true"></i>
               <i class="fa fa-star-o"></i>
               <p>100 $</p>
              </a> 
           </div>
           <div class="col-4">
               <a href="#">
                   <img src="Images/product-6.jpg" alt="product-1" />
               <h3>T-shurt Noir</h3>
               <i class="fa fa-star" aria-hidden="true"></i>
               <i class="fa fa-star" aria-hidden="true"></i>
               <i class="fa fa-star" aria-hidden="true"></i>
               <i class="fa fa-star" aria-hidden="true"></i>
               <i class="fa fa-star-half-o" aria-hidden="true"></i>
               <i class="fa fa-star-o"></i>
               <p>50 $</p>
               </a>
           </div>
           <div class="col-4">
              <a href="#">
               <img src="Images/product-4.jpg" alt="product-1" />
               <h3>T-shurt bleu_marine</h3>
               <i class="fa fa-star" aria-hidden="true"></i>
               <i class="fa fa-star" aria-hidden="true"></i>
               <i class="fa fa-star" aria-hidden="true"></i>
               <i class="fa fa-star" aria-hidden="true"></i>
               <i class="fa fa-star-half-o" aria-hidden="true"></i>
               <i class="fa fa-star-o"></i>
               <p>500 $</p>
              </a>
           </div>     
          </div> <br/>
          <!-- Shoes -->
        <h4 class="teste">Shoes</h4> <br/>
             <div class="row">
               <div class="col-4">
               <a href="#"><img src="Images/product-10.jpg" alt="product-1" />
                <h3>T-shurt Rouge</h3>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star-half-o" aria-hidden="true"></i>
                      <i class="fa fa-star-o"></i>
                <p>500 $</p></a>
             </div>
             
             <div class="col-4">
               <a href="#"><img src="Images/product-11.jpg" alt="product-1" />
                <h3>T-shurt Rouge</h3>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star-half-o" aria-hidden="true"></i>
                      <i class="fa fa-star-o"></i>
                <p>500 $</p></a>
            </div>
           
            <div class="col-4">
               <a href="#"><img src="card9.png" alt="product-1" />
                <h3>T-shurt Rouge</h3>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star-half-o" aria-hidden="true"></i>
                      <i class="fa fa-star-o"></i>
                <p>500 $</p></a>
            </div>
           
            <div class="col-4">
               <a href="#"><img src="card10.png" alt="product-1" />
                <h3>T-shurt Rouge</h3>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star-half-o" aria-hidden="true"></i>
                      <i class="fa fa-star-o"></i>
                <p>500 $</p></a>
            </div>
           </div>
        
          <h4 class="teste" >Girl Shoes </h4> <br/>
             <div class="row" >
               <div class="col-4">
                   <a href="#"><img src="Images/img-20220322T103020Z-001/img/b72ae3b40098a279e930fe8af4d39d43.jpg" alt="product-1" />
                       <h3>T-shurt Rouge</h3>
                             <i class="fa fa-star" aria-hidden="true"></i>
                             <i class="fa fa-star" aria-hidden="true"></i>
                             <i class="fa fa-star" aria-hidden="true"></i>
                             <i class="fa fa-star" aria-hidden="true"></i>
                             <i class="fa fa-star-half-o" aria-hidden="true"></i>
                             <i class="fa fa-star-o"></i>
                       <p>500 $</p></a>
               </div>     
               <div class="col-4">
                   <a href="#"><img src="Images/img-20220322T103020Z-001/img/images.jpg" alt="product-1" s />
                       <h3>T-shurt Rouge</h3>
                             <i class="fa fa-star" aria-hidden="true"></i>
                             <i class="fa fa-star" aria-hidden="true"></i>
                             <i class="fa fa-star" aria-hidden="true"></i>
                             <i class="fa fa-star" aria-hidden="true"></i>
                             <i class="fa fa-star-half-o" aria-hidden="true"></i>
                             <i class="fa fa-star-o"></i>
                       <p>500 $</p></a>
               </div>       
               <div class="col-4">
                   <a href="#"><img src="Images/img-20220322T103020Z-001/img/téléchargement (1) (1).jpg" alt="product-1" />
                       <h3>T-shurt Rouge</h3>
                             <i class="fa fa-star" aria-hidden="true"></i>
                             <i class="fa fa-star" aria-hidden="true"></i>
                             <i class="fa fa-star" aria-hidden="true"></i>
                             <i class="fa fa-star" aria-hidden="true"></i>
                             <i class="fa fa-star-half-o" aria-hidden="true"></i>
                             <i class="fa fa-star-o"></i>
                       <p>500 $</p></a>
               </div>      
             </div>
          
           <h4 class="teste">Robes de l'epoque victorienne</h4> <br/>
           <div class="row" >
            <div class="col-4">
                <a href="#"><img src="10.jpg" alt="product-1" />
                    <h3>T-shurt Rouge</h3>
                          <i class="fa fa-star" aria-hidden="true"></i>
                          <i class="fa fa-star" aria-hidden="true"></i>
                          <i class="fa fa-star" aria-hidden="true"></i>
                          <i class="fa fa-star" aria-hidden="true"></i>
                          <i class="fa fa-star-half-o" aria-hidden="true"></i>
                          <i class="fa fa-star-o"></i>
                    <p>500 $</p></a>
            </div>
            <div class="col-4">
                <a href="#"><img src="4.jpg" alt="product-1" />
                    <h3>T-shurt Rouge</h3>
                          <i class="fa fa-star" aria-hidden="true"></i>
                          <i class="fa fa-star" aria-hidden="true"></i>
                          <i class="fa fa-star" aria-hidden="true"></i>
                          <i class="fa fa-star" aria-hidden="true"></i>
                          <i class="fa fa-star-half-o" aria-hidden="true"></i>
                          <i class="fa fa-star-o"></i>
                    <p>500 $</p></a>
            </div>
            <div class="col-4">
                <a href="#"><img src="6.jpg" alt="product-1" />
                    <h3>T-shurt Rouge</h3>
                          <i class="fa fa-star" aria-hidden="true"></i>
                          <i class="fa fa-star" aria-hidden="true"></i>
                          <i class="fa fa-star" aria-hidden="true"></i>
                          <i class="fa fa-star" aria-hidden="true"></i>
                          <i class="fa fa-star-half-o" aria-hidden="true"></i>
                          <i class="fa fa-star-o"></i>
                    <p>500 $</p></a>
            </div>
            <div class="col-4">
                <a href="#"><img src="8.jpg" alt="product-1" />
                    <h3>T-shurt Rouge</h3>
                          <i class="fa fa-star" aria-hidden="true"></i>
                          <i class="fa fa-star" aria-hidden="true"></i>
                          <i class="fa fa-star" aria-hidden="true"></i>
                          <i class="fa fa-star" aria-hidden="true"></i>
                          <i class="fa fa-star-half-o" aria-hidden="true"></i>
                          <i class="fa fa-star-o"></i>
                    <p>500 $</p></a>
            </div>
           </div>
             <h4 class="teste">Montres à Mains</h4> <br/>
           <div class="row"  >
            <div class="col-4">
                   <a href="#"><img src="Images/img-20220322T103020Z-001/img/(Image Files) Ecommerce Website Using HTML And CSS Step By Step/img/watches/1.jpg" alt="product-1" />
                       <h3>T-shurt Rouge</h3>
                             <i class="fa fa-star" aria-hidden="true"></i>
                             <i class="fa fa-star" aria-hidden="true"></i>
                             <i class="fa fa-star" aria-hidden="true"></i>
                             <i class="fa fa-star" aria-hidden="true"></i>
                             <i class="fa fa-star-half-o" aria-hidden="true"></i>
                             <i class="fa fa-star-o"></i>
                       <p>500 $</p></a>
             </div>
               <div class="col-4">
                   <a href="#"><img src="Images/img-20220322T103020Z-001/img/(Image Files) Ecommerce Website Using HTML And CSS Step By Step/img/watches/3.jpg" alt="product-1" />
                       <h3>T-shurt Rouge</h3>
                             <i class="fa fa-star" aria-hidden="true"></i>
                             <i class="fa fa-star" aria-hidden="true"></i>
                             <i class="fa fa-star" aria-hidden="true"></i>
                             <i class="fa fa-star" aria-hidden="true"></i>
                             <i class="fa fa-star-half-o" aria-hidden="true"></i>
                             <i class="fa fa-star-o"></i>
                       <p>500 $</p></a>
               </div>
               <div class="col-4">
                   <a href="#"><img src="Images/img-20220322T103020Z-001/img/(Image Files) Ecommerce Website Using HTML And CSS Step By Step/img/watches/4.jpg" alt="product-1" />
                       <h3>T-shurt Rouge</h3>
                             <i class="fa fa-star" aria-hidden="true"></i>
                             <i class="fa fa-star" aria-hidden="true"></i>
                             <i class="fa fa-star" aria-hidden="true"></i>
                             <i class="fa fa-star" aria-hidden="true"></i>
                             <i class="fa fa-star-half-o" aria-hidden="true"></i>
                             <i class="fa fa-star-o"></i>
                       <p>500 $</p></a>
               </div>
               <div class="col-4">
                   <a href="#"><img src="Images/product-8.jpg" alt="product-1" />
                       <h3>T-shurt Rouge</h3>
                             <i class="fa fa-star" aria-hidden="true"></i>
                             <i class="fa fa-star" aria-hidden="true"></i>
                             <i class="fa fa-star" aria-hidden="true"></i>
                             <i class="fa fa-star" aria-hidden="true"></i>
                             <i class="fa fa-star-half-o" aria-hidden="true"></i>
                             <i class="fa fa-star-o"></i>
                       <p>500 $</p></a>
               </div>
           </div>
       </div>        
</section>
<!--Nos derniers produits -->
<section class="Feature-produit" >
   <div class="contrainer">
       <h2>Nos derniers produits  </h2>
       <div class="row">
           <div class="col-4">
               <a href="#"><img src="Images/img-20220322T103020Z-001/img/(Image Files) Ecommerce Website Using HTML And CSS Step By Step/img/clothes/1.jpg" alt="product-1" />
                <h3>T-shurt Rouge</h3>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star-half-o" aria-hidden="true"></i>
                      <i class="fa fa-star-o"></i>
                <p>500 fsfa</p>
            </div></a>
           <div class="col-4">
            <a href="#">
                <img src="Images/img-20220322T103020Z-001/img/(Image Files) Ecommerce Website Using HTML And CSS Step By Step/img/insta/1.jpg" alt="product-1" />
            <h3>T-shurt Rouge</h3>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star-half-o" aria-hidden="true"></i>
            <i class="fa fa-star-o"></i>
            <p>550 fsfa</p>
        </div>
            </a>
        <div class="col-4">
            <a href="#">
                <img src="women-collection.png" alt="product-1" />
            <h3>T-shurt Rouge</h3>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star-half-o" aria-hidden="true"></i>
            <i class="fa fa-star-o"></i>
            <p>500 fsfa</p>
        </div>
            </a>
        <div class="col-4">
           <a href="#">
            <img src="men-collection.png" alt="product-1" />
            <h3>T-shurt Rouge</h3>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star-half-o" aria-hidden="true"></i>
            <i class="fa fa-star-o"></i>
            <p>500 fsfa</p>
        </div>  
           </a> 
       </div>
      
   </div>
</section>

<script>
    function decon()
{
    var conf = confirm("Voulez Vous quitter ? ") ;  
    if(conf)
    {
        window.location.assign("login.php");
    }
}
</script>
</body>

    <!--Footer -->
<footer>
    <div class="logo">
        <strong>CLOTHING</strong>
    </div>
    <div class="center">
        <ul>
            <li><a href="#"> <i class="fa-thin fa-location-check"> </i>http://localisation.com</a></li>
            <li><a href="#"><i class="fa-brands fa-whatsapp"> </i> http://whatsapp.com</a></li>
        </ul>
    </div>
    <div class="right">
        <ul>
            <li><a href="#">http://Facebook.com</a></li>
            <li><a href="#">http://twitter.com</a></li>
            <li><a href="#">http://linkedin.com</a></li>
            <li><a href="#">http://insta.com</a></li>
        </ul>
    </div>
</footer> 
</html>