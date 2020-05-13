<?php
function getData($file="utilisateur"){
    $data=file_get_contents("./data/".$file.".json");
    $merry=array();
    $merry=json_decode($data,true);
  return $merry;
}

function connexion($login,$pwd){
   
    $users=getData();
    
    foreach ($users as $key => $user) {
        if($user["login"]===$login && $user["password"]===$pwd){
            $_SESSION['user']=$user;
            if($user["profil"]==="admin"){
                return "acceuil";
            }else{
                return "jeux";
            }
        }
          
    }
    return "error";
}





?>