<?php
include("connect.php");
ob_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <link rel="stylesheet" href="css - Copie.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        .admin #coner
        {
            margin-left: 200px;
            padding: 10px;
            background: transparent;
            border: transparent;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            font-size: 18px;
            cursor: pointer;
        }
        .admin #coner:hover
        {
            color: #3d85c6;
        }
       #admin
       {
           padding: 40px;
           background-color: #d0e0e3;
           opacity: 0.89;
           border: 2px solid #8F9779;
           border-radius: 20px 20px 20px 20px;
       }
       #admin #inp1
       {
          margin: 40px;
          margin-bottom: -7px;
          margin-top: -5px;
          margin-top: 40px;
          border: transparent;
          font-size: 18px;
          background-color: transparent;
          font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
          border-bottom: 2px solid #3d85c6;
          color: #3d85c6;
          width: 280px;
          height: 40px;
          

       }
       #admin #btn
       {
           
           margin-top: 90px;
           margin-left: 70px;
           width: 100px;
           height: 40px;
           color: #3d85c6;
           border: 2px solid #3d85c6;
           background-color: #d0e0e3;
           font-size: 18px;
           font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
           border-radius: 10px 10px 10px 10px ;
            cursor: pointer;
       }
       #admin #btn:hover
       {
           border: 2px solid #073763;
           color:#cfe2f3 ;
       }
       #admin #btn1
       {
           margin-left: 40px;
           width: 100px;
           height: 40px;
           font-size: 18px;
           font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
           border-radius: 10px 10px 10px 10px ;
            cursor: pointer;
            color: #3d85c6;
           border: 2px solid #3d85c6;
           background-color: #d0e0e3;
       }
       #admin #btn1:hover
       {
           border: 2px solid #073763;
           color:#cfe2f3 ;
       }
    </style>

</head>
<body>

    <div class="container" id="cont" >
    <div class="container2"  id="cont2" style="visibility: visible;">
      <div class="page-left">
          <header> 
          <h1>
              CLOTHING
          </h1>

          <div class="admin">
              <button class="con" id="coner" onclick="teste()">sign in for admin</button>
              <form id="admin" style="visibility: hidden;"  action="<?php echo $_SERVER ['PHP_SELF'] ?>" method="POST">
              <?php
              //session_start();
    function filter($name)
    {
        $name = strtolower(strip_tags(trim($name)));
        return $name ; 

    }
    if($_POST)
    {
        if(filter($_POST['admin']) == "admin" && filter($_POST['password']) == "admin")
        {
            header('Location:Admin.php');
        
        }
    }
    //session_destroy();
    ?>
                  <input type="text" name="admin"placeholder="  Admin" required id="inp1"/> <br>
                  <input type="password"  name ="password" placeholder=" Password" required id="inp1"/><br>
                  <input type="submit" id="btn" name="btn" value="Login" />
                  <input  type="submit" class="con" id="btn1" onclick="teste1()" value="Retour" />
              </form>
          </div>

          </header>

      </div>
      <div class="page-right" id="princip">
          <header>
              <div class="sign">
                  
                <div class="sign-logo" id="logo-1"> Dont have an account ? </div>
                 <button class="btn" id="btn-1" onclick="show()"> Sign in</button>



                <button class="btn-2" id="btn-2" onclick="show2()" > login in</button>
                
                </div>
                 <div  class="parol" id="parol"> create an account now !</div>
          
                
          
            </header>
           
          <div class="page-right-sign" >
           
        <?php
        if(isset($_POST['submit']))
        {
            $email=$_POST['email'];
            $password=$_POST['password'];
            //$query=array();
            $query="SELECT * FROM inscri WHERE email='$_POST[email]' && password='$_POST[password]' ";
            //$res=mysqli_query($con,$query);
           if(mysqli_num_rows(mysqli_query($conn,$query))>0) // mysqli_num_rows : calculer le nombre des lignes 
            {
                //$_SESSION['email']=$email;
              header("Location: index1.php") ;
            
               // echo "you are welcome";
            }
            else
            {
                echo "email or password are false";   }
        }
       ?>


                       <div class="party-one" id="party-one">

                        <form action="" method="POST">
                
                            <div class="box">  <span class="icon user"> <span class="fa fa-user"></span></span>
                                    <input id="form" type="email" name="email" placeholder=" email :" class="foemail">
                                     
                                           <br/>
                            </div>
                            <div class="pass">

                            <span class="iconlock"> <span class="fa fa-lock"></span></span>
                            <input class="fopassword" type="password" id="password" name="password" placeholder="password :" ></div>
                        

                                 <br/>

                            <input type="submit" class="button"  name="submit"  onclick="verfier()"/>
                        </form> 
                       <!-- <div class="div-butt" > 
                            <a href="" class="butt"> <button type="submit" class="button" onclick="verfier()" > Login </button> </a>

                        </div> --> 

                        <div class="icone">
                            <a href=""><span class="facebook"> <span class="fa fa-facebook"></span></span></a>
                            <a href=""></a><span class="facebook"> <span class="fa fa-instagram"></span></span></a>
                            <a href=""></a><span class="facebook"> <span class="fa fa-twitter"></span></span></a>
        
                                   </div>






                  </div>







        
                         <div class="partytow" id="party-two">
            <?php
            
            if(isset($_POST['submit']))
            {
                if(isset($_POST['fname']))
               {
                $fname=$_POST['fname'];
               }
               if(isset($_POST['lname']))
            {
                $lname=$_POST['lname'];
            }
            if(isset($_POST['cne']))
            {
                $cne=$_POST['cne'];
            }
            if(isset($_POST['email']))
            {
                $email=$_POST['email'];
            }
            if(isset($_POST['password']))
            {
                $pwd=$_POST['password'];
            }
               
            if(isset($_POST['cpassword']))
            {
                $cpwd=$_POST['cpassword'];
            }
               
               
               $con="INSERT INTO inscri(fname,lname,cne,email,password,cpassword) VALUE ('$fname','$lname','$cne','$email','$pwd','$cpwd')";
               mysqli_query($conn,$con);
            }
            ?>

             <form id="for1" class="forclass" method="POST" action="<?php echo $_SERVER ['PHP_SELF'] ?>">

                <input type="text" placeholder="First Name" class="first" name="fname"> </br>
                <input type="text" placeholder="Last Name" class="last" name="lname"> </br>
                <input type="text" placeholder="CNE" class="cne" name="cne">  </br>
                <input type="email"   placeholder="email" class="email2" name="email"> </br>
                
                <input type="password" placeholder="Password" class="passwo" name="password"> 
                <input type="password" placeholder="Confime" class="confirm" name="cpassword"> </br>
                 <button type="submit" class="button2" name='submit'> Login </button> 
             </form> 
                       <div class="div-butt2"> 
                      <a href=" " class="reset-a"> <button type="reset" class="reset" > Cancel </button> </a>

               

                         </div>
                        </div>


              

         
        
        
                               </div>



      </div>
    </div>
</div>
<script  type="text/javascript" language="script">

function show(){
    document.getElementById('party-two').style.display='block';
    document.getElementById('btn-2').style.display='block';
    document.getElementById('parol').style.display='block';

    document.getElementById('party-one').style.display='none';
    document.getElementById('btn-1').style.display='none';
    document.getElementById('logo-1').style.display='none';



 }
 function show2(){
    document.getElementById('party-two').style.display='none';
    document.getElementById('btn-2').style.display='none';
    document.getElementById('parol').style.display='none';

    document.getElementById('party-one').style.display='block';
    document.getElementById('btn-1').style.display='block';
    document.getElementById('logo-1').style.display='block';


 }


 function verfier(){
    

if(document.getElementById('form').value=="" ||document.getElementById('password').value=="")

{
    alert("attention");
}


 }
 function teste()
 {
    //document.getElementById('cont2').style.visibility='hidden';
     document.getElementById('admin').style.visibility='visible';
     
 }
    function teste1()
    {
        document.getElementById('admin').style.visibility='hidden';
    }
   
    </script>
</body>
</html>