<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
    <link rel="stylesheet" href="./public/css/style.css">
  
   
    
</head>
<body>
    <div class="header">
        <div class="logo"></div>
        <div class="header-text">Le plaisir de jouer</div>
    </div>
    <div class="content">
    <?php
        session_start();
        require_once("./traitement/fonctions.php");
        if(isset($_GET['lien'])){
           if($_GET['lien']=="acceuil"){
               require_once("./pages/admin.php");
           }elseif($_GET['lien']=="jeux"){
               require_once("./pages/jugar.php");
           }
        }else{
            require_once("./pages/connexion.php");
            
        }
        
        if(isset($_GET['lien']) && $_GET['lien']=="suscribe"){
            
                require_once("./pages/suscribe.php");
            
        }
            
    ?>
    </div>

</body>
</html>