<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital@0;1&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<?php 
    try {

        $connexion = new PDO('mysql:host=localhost;dbname=vaulx_academia;charset=utf8', 'root', '');
    
         // echo 'accès avec succès à  la base de données ';
    } catch (Exception $e) {
    
        die('Erreur : ' . $e->getMessage());
    } 

    $sql1 = "SELECT * FROM actus";

    $reponse1 = $connexion->query($sql1);
?>
<body>
<nav id="sidebar" class="active">
		<div class="custom-menu">
			<button type="button" id="sidebarCollapse" class="btn btn-primary">
	  <i class="fa fa-bars"></i>
	  <span class="sr-only">Toggle Menu</span>
	</button>
</div>
		<div class="p-4 pt-5">
    <ul class="list-unstyled components mb-5">
	  
	  <li>
		  <a href="index.html#">Accueil</a> 
	  </li>
	  <li>
	    <a href="index.html#programmes">Programmes</a>
	  </li>
	  <li>
	  <a href="actus.php">Actualité</a>
	  </li>
      <li>
	    <a href="index.html#equipe">L'équipe</a>
	  </li>
	  <li>
	  <a href="index.html#partenaires">Partenaires</a>
	  </li>
      
	  <li>
		<a href="#">Application mobile</a>
		</li>
	  <li>
	    <a href="contact.php">Contact</a>
	  </li>
	</ul>

  </div>
</nav>
    <H1>Actualité</H1>
    <main>
    <?php  while ($data1 = $reponse1->fetch()) { ?>
        <a href="actu_page.php?id=<?php echo $data1['id'];?>">
        <h2>
        
           <?php echo $data1['titre'];?>
           
        </h2>
        </a>
        <img class="fade" src="image_actu\<?php echo $data1['media'];?>" alt="">
        <br> 
    
    <?php }?>

    </main> 
    <script src="js/jquery.min.js"></script>
    <script src="js/main.js"></script>   
</body>
</html>