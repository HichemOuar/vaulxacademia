<?php  session_start();   ?>
<html>
<head>

<link rel="stylesheet" href="style.css">
<title> Login Page   </title>

</head>

<body>
<?php

try {

    $connexion = new PDO('mysql:
                          host=localhost;
                          dbname=vaulx_academia;
                          charset=utf8', 
                          'root', 
                          '');

    
} catch (Exception $e) {

   die('Erreur : ' . $e->getMessage());
}



// On teste si une session est déja ouverte, si oui on redirige sur la home page
if(isset($_SESSION['admin']))   
 {
    header("Location:actu_up.php"); 
 }

if(isset($_POST['login']))   
{
    $user = $_POST['user'];
    $pass = $_POST['pass'];


    
    $sql = "SELECT * FROM logi where user=\"$user\"";

    $reponse = $connexion->query($sql);

   
    //vérification Pseudo et Password
    while ($data = $reponse->fetch()) {
        if($data['user'] === $user && (password_verify($pass,$data['pass'])))  {
            //si vérification réussi, création de sessions pour l'user
            $_SESSION['admin'] = 1;
            $_SESSION['user'] = $user;
            
            
            if( $_SESSION['admin'] === 1 )
            {
                 header("Location:actu_up.php");  
                
            }
            else
            {
                  header("Location:login.php"); 
                   
            }           
  
        }

    }
  
         
    
    


}

?>



<div class="divlogin">

<div style="text-align:center">

   
    


        <form action="login.php" method="post">
            <p id="login"> Login </p> <br> <br>
            <INPUT NAME="user" TYPE="text" placeholder="user" class="identifiants"> <br><br><br> 
            <INPUT TYPE="password" NAME="pass" placeholder="Enter Password Here" class="identifiants"> <br><br><br><br>
            <INPUT TYPE="submit" VALUE="GO!" NAME="login" class="submit">
        </form>


</div>
</div>
</body>
</html>
