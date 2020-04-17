<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
    <link rel="stylesheet" href="public/css/style.css">
</head>
<body>
    <div class="header">
        <div class="logo"></div>
        <div class="header-text">Le plaisir de jouer</div>
    </div>
    <div class="content">
    <?php
        require_once("./traitement/fonctions.php");
        if(isset($_GET['lien'])){
            if($_GET['lien']=="acceuil"){
                require_once("./pages/admin.php");
            }
            if( $_GET['lien']=="jeux"){
                require_once("./pages/jugar.php");
            }
        }else{
            require_once("./pages/connexion.php");
        }
        
    ?>
    </div>

</body>
</html>