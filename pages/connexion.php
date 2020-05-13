<?php
if(isset($_POST['btn_suscribe'])){
    $fall="suscribe";
    header("location:index.php?lien=".$fall);
}
?>
   



<div class="container">

    <div class="container-header">
        <div class="title">Login Form</div>
    </div>
    <div class="container-body">
        <form action="" method="POST" id="formConnect">
            <div class="input-form">
                <div class="icone-form icone-form-login"></div>
                <input type="text" class="form-control" error="error-1" name="login" placeholder="Login">
                <div class="error-form" id="error-1">
                    
                </div>
            </div>
            <div class="input-form">
                <div class="icone-form icone-form-login"></div>
                <input type="password" class="form-control" error="error-2" name="pwd" placeholder="Password">
                <div class="error-form" id="error-2">
                
                </div>
            </div>
            <div class="input-form">
                <button type="submit" class="btn-form" name="btn_submit">Connexion</button>
                
               
                <input type="button" name="btn_suscribe" value="S'inscrire pour jouer">
            </div>
        </form>
        <?php
    if(isset($_POST['btn_submit'])){
        $login=$_POST['login'];
        $pwd=$_POST['pwd'];
        $result= connexion($login,$pwd);
?>
<p id="msgErreur">
     <?php
        if($result=="error"){
            echo "Login ou Mot de passe Incorrect";
        }else{
    header("location:index.php?lien=".$result);
        }
    }
    ?>
</p>
    </div>

    <script>
        //Effacer le msg d'erreur quand j'écris
        const inputs= document.getElementsByTagName("input");
        for(input of inputs){
            input.addEventListener("keyup", function(e){
                if(e.target.hasAttribute("error")){
                    var idDivError=e.target.getAttribute("error");
                    document.getElementById(idDivError).innerText=""
                }''
            })
        }

        //Afficher un message d'erreur si le champ est vide
        document.getElementById("formConnect").addEventListener("submit", function(e){
            var error=false;
            const inputs= document.getElementsByTagName("input");
                for(input of inputs){
                    if(input.hasAttribute("error")){
                        var idDivError=input.getAttribute("error");
                           if(!input.value){
                            document.getElementById(idDivError).innerText="Ce champ est obligatoire"
                            error=true
                           }
                          
                    }  
                }
            if(error){
                e.preventDefault();
                return false;
            }
            
        })

    </script>