<?php
if(isset($_POST['btn_submit'])){
    $login=$_POST['login'];
    $pwd=$_POST['pwd'];
    $result= connexion($login,$pwd);
    if($result=="error"){
            echo "Login ou Mot de passe Incorrect";
        
    }else{
        header("location:index.php?lien=".$result);
    }
}



?>

<div class="container">
    <div class="container-header">
        <div class="title">Login Form</div>
    </div>
    <div class="container-body">
        <form action="" method="POST">
            <div class="input-form">
                <div class="icone-form icone-form-login"></div>
                <input type="text" class="form-control" name="" placeholder="Login">
                <div class="error-form">
                    
                </div>
            </div>
            <div class="input-form">
                <div class="icone-form icone-form-login"></div>
                <input type="password" class="form-control" name="" placeholder="Password">
                <div class="error-form">
                
                </div>
            </div>
            <div class="input-form">
                <button type="submit" class="btn-form" name="btn_submit">Connexion</button>
                <a href="" class="link-form">S'inscrire pour jouer</a>
            </div>
        </form>

    </div>