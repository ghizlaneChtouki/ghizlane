 <?php
//   $non=isset($_POST['quantité']) ? $_POST['quantité']: '';

//  setcookie('pass',$non);
//  if(isset($_COOKIE['pass']))
// {
  
// }
// header("location:descriptif.php");

if(isset($_POST["quantité"])) {
    $nom = $_POST["quantité"];
        setcookie('pass',$nom-1 + print_r($_COOKIE), time() + (60*60*24*30)); // Durée de vie: 30jrs
        setcookie('dans',$mon-1 + print_r($_COOKIE), time() + (60*60*24*30));

}


header('Location: descriptif.php');
?>
