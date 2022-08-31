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
    <script src="https://kit.fontawesome.com/edec10413c.js" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
<?php
$id = $_GET['id'];

try {

    $connexion = new PDO('mysql:host=localhost;dbname=vaulx_academia;charset=utf8', 'root', '');
    
     // echo 'accès avec succès à  la base de données ';
    } catch (Exception $e) {
    
    die('Erreur : ' . $e->getMessage());
    } 
    $sql = "SELECT * FROM actus WHERE id=\"$id\"";
    
    $reponse = $connexion->query($sql);
?>

<?php
    while ($data = $reponse->fetch()){
?>
<a href="actus.php">
<i class="fas fa-sign-out-alt icon"></i> 
</a>
<h1><?php echo $data['titre'] ?>  </h1>
<br>
<div style="text-align:center"><img class="actu" src="image_actu\<?php echo $data['media'] ?>" alt=""></div>
<video src="<?php echo $data['media'] ?>"></video>
<br>
<p class="actu"><?php echo $data['contenu'] ?></p>

<?php } ?>

</body>
</html>