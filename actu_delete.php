<?php  

  if (isset($_GET['id'])) {  
    
    try {
        // Connexion à la base de donnée
        $connexion = new PDO('mysql:
                              host=localhost;
                              dbname=vaulx_academia;
                              charset=utf8', 
                              'root', 
                              '');

        
    } catch (Exception $e) {

       die('Erreur : ' . $e->getMessage());
    }
    $id = $_GET['id'];
    
    
    
    

        

        $sql = "DELETE FROM actus WHERE id =".$id;
        echo $sql;
        $reponse = $connexion->query($sql);
        
        
        header("location:actu_up.php");
    } else {
        
        echo"error";
    }

  
?>