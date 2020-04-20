<?php
function connexion($login,$pwd){
    $users=getData();
    foreach ($users as $key => $user) {
        if($user["login"]===$login && $user["password"]===$pwd){
            if($user["profil"]==="admin"){
                return "acceuil";
            }else{
                return "jeux";
            }
        }else{
            return "error";
        }
          
    }
    
}


function getData($file="utilisateur"){
     $data=file_get_contents("./data/".$file.".json");
     $data=json_decode($data,true);
     return $data;
}


?>