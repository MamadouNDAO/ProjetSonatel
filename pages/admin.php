 <?php
if(isset($_POST['Ad_valider'])){
    if(!empty($_POST['Ad_prenom']) && !empty($_POST['Ad_nom']) && !empty($_POST['Ad_login']) && !empty($_POST['Ad_pwd']) && !empty($_POST['Ad_pwd2'])){
        echo "ok";
    }else{
        $erreur = "ATTENTION!!! Tous les champs champs sont obligatoires.";
    }
}

?>
<div class="grand-cadre">



    <div class="header-grand-cadre">
        <div class="titre-header">CRÉER ET PARAMÉTRER VOS QUIZZ</div>
        <button class="admin-deconnexion">Déconnexion</button>
    </div>



    <div class="cadre-option">
        <div class="header-cadre-option">
            <div class="photo">
                <img src="./public/images/img5.jpg" alt="">
                
            </div>
            <div id="NameUser">
                    <span>
                        <?php 
                        echo $_SESSION['user']['prenom'].'<br>';
                        echo "\n";
                        echo $_SESSION['user']['nom'];
                        ?>
                    </span>
            </div>
        </div>
        <div class="list-qst" id="liqst"> <span>Liste Questions</span> 
            <img class="icone-yi" id="ic1" src="./public/images/ic-liste.png" alt="" srcset="">
        </div>
        <div class="list-qst" id="liAdmin"><span>Créer Admin</span> 
        <img class="icone-yi" id="ic2" src="./public/images/ic-ajout.png" alt="" srcset="">
        </div>
        <div class="list-qst" id="liJoueur"><span>Liste joueurs</span> 
        <img class="icone-yi" id="ic3" src="./public/images/ic-liste.png" alt="" srcset="">
        </div>
        <div class="list-qst" id="liCréeqst"><span>Créer Questions</span> 
        <img class="icone-yi" id="ic4" src="./public/images/ic-ajout.png" alt="" srcset="">
        </div>
    </div>



    <div class="inscrire-admin">
        <div class="tete-inscrire">
        <h3>S'INSCRIRE</h3>
        <h5>Pour proposer des quizz</h5>
        </div>
        <div class="container-form">
            <form action="" method="post" enctype="multipart/form-data">
                <div class="prenom">
                    <span>Prénom</span>
                    <input class="tom" type="text" name="Ad_prenom" id="">
                </div>
                <div class="prenom">
                    <span>Nom</span>
                    <input class="tom" type="text" name="Ad_nom" id="">
                </div>
                <div class="prenom">
                    <span>Login</span>
                    <input class="tom" type="text" name="Ad_login" id="">
                </div>
                <div class="prenom">
                    <span>Password</span>
                    <input class="tom" type="password" name="Ad_pwd" id="">
                </div>
                <div class="prenom">
                    <span>Confirm Password</span>
                    <input class="tom" type="password" name="Ad_pwd2" id="">
                </div>
                <div class="choix-avatar">
                    <span>Avatar</span>
                    <input id="avatar-bi" type="file" name="Ad_avatar" value="Choisir un fichier">
                </div>
                <div class="make-compte">
                    <input id="btn-make" type="submit" name="Ad_valider" value="Créer compte">
                </div>
            </form>
            <p id="Ad_erreur">
            <?php
                if(isset($erreur)){
                echo $erreur;
                }
            ?>
            </p>
            
        </div>
        <div class="avatar">
            
        </div>



</div>
