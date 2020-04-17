<?php
function connexion($login,$pwd){
    $users=getData();
    foreach ($users as $key => $user) {
        if($users["login"]===$login && $users["password"]===$pwd){
            if($users["profil"]==="admin"){
                return "acceuil";
            }else{
                return "jeux";
            }
        }else{
            return "error";
        }
    }
}


function getData($file=utilisateur){
     $data=file_get_contents("./data".$file.".json");
     $data=json_decode($data,true);
     return $data;
}


?>