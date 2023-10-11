//echo json_encode($GLOBALS);
//echo json_encode($_SERVER); 
//echo json_encode($_COOKIE);
//echo json_encode($_REQUEST);
//echo json_encode($_POST);
//echo json_encode($_FILES);
//echo json_encode($_SESSION);
//echo json_encode($_GET);
//echo json_encode($_ENV);
<?php

$users = [
    ["username"=>"pranish", "password"=>"pranish123"],
    ["username"=>"ram", "password"=>"sita2323"],
    ["username"=>"harry", "password"=>"maguire@#"],
    ["username"=>"alone", "password"=>"prince$"],
    ["username"=>"tommy", "password"=>"bro1@#"]

];





    if($_POST){
        if(($_POST["username"]) != [] && ($_POST["password"]) != []){
            $input_username = strtolower($_POST["username"]);
            $input_password = $_POST["password"];
            $isValid = false;
    
            foreach($users as $user){
                if(($user["username"] === $input_username) && ($user["password"] === $input_password)){
                    $isValid = true;
                    
                    
                    
                }          
            
            }
    
            if($isValid){
                echo "Login successful!!!";
            }else{
                echo "Invalid credentials!!!";
            }
        } else{
            echo"";
        }
    }

