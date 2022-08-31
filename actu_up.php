<!DOCTYPE html>
<?php
  
session_start();
//si la session est vide, redirection vers la page de login
if(!isset($_SESSION['admin'])) 
{
    header("Location:Login.php");  
}
  $msg = "";
  
  // If upload button is clicked ...
  if (isset($_POST['upload'])) {
    try {
        // Connexion à la base de donnée
        $connexion = new PDO('mysql:host=localhost;dbname=vaulx_academia;charset=utf8', 'root', '');

        
    } catch (Exception $e) {

       die('Erreur : ' . $e->getMessage());
    }
    
    $titre = $_POST["titre"];
    $contenu = $_POST["contenu"];
    $filename = $_FILES["image"]["name"];
    $tempname = $_FILES["image"]["tmp_name"];    
    $folder = "image_actu/".$filename;
          
    if (!empty($titre) && !empty($contenu) ) {

        $reponse = $connexion->prepare("INSERT INTO actus(titre,contenu,media) VALUES (?,?,?)");

        $reponse->execute(array($titre, $contenu, $filename));
        
        
        header("actu_up.php");
    } else {
        echo"error";
    }
          
        // Now let's move the uploaded image into the folder: image
        if (move_uploaded_file($tempname, $folder))  {
            $msg = "Image uploaded successfully";
        }else{
            $msg = "Failed to upload image";
      }
  }
  

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/edec10413c.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style_actu_up.css">
    <title>Document</title>
</head>
<body>
    <a href="logout.php">déconnection</a>
    <h1>Gestion des actualités</h1>
    <div class="main">
<form action="actu_up.php"method="POST" enctype="multipart/form-data">
    
    <input type="text" name="titre" placeholder="titre">
    <br>
    <textarea  name="contenu"  rows="20" cols="50" ></textarea>
    <br>
    <input type="file" name="image" value="" />
    <br>
    <input type="submit"name="upload"></input>
       
</form>
  
<?php
  
  
  try {
        // Connexion à la base de donnée
        $connexion = new PDO('mysql:host=localhost;dbname=vaulx_academia;charset=utf8', 'root', '');

        
    } catch (Exception $e) {

       die('Erreur : ' . $e->getMessage());
    }

     $sql1 = "SELECT * FROM actus";
  
    $reponse1 = $connexion->query($sql1); 
    ?>
    <div class="list">
<?php 
   
    while ($data1 = $reponse1->fetch()) { ?>   
      
    
      <p>
          
       <?php
      echo $data1['titre']
      
      ?>
      <a href="actu_delete.php?id=<?php echo $data1['id'] ?>"><i class="far fa-times-circle cross"></i> </a>
      </p>
    
          
    
      
      
      <?php
       } 
    
       ?>
       </div>
     </div>  
</body>
</html>