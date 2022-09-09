<?php 
    include_once 'src/db-facebook.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facebook</title>
    <link rel="stylesheet" href="assets/style.css">

</head>
<body>
    
    <?php 
        /**
         * Vérification de l'utilisateur
         */
        $isFound = false; //connu
        $connectedUser;
        $loginAttempt = 0;

        if(isset($_POST['username'], $_POST['password'])){
            
            $loginAttempt++;

            $user_name = $_POST['username'];
            $pass_word = $_POST['password'];

            $sqlQuery = "
                SELECT *
                FROM members
                WHERE username = :param_username AND password = :param_password 
            ";

            $statement = $mysqlClient->prepare($sqlQuery); 
            $statement->execute(array("param_username" => $user_name, "param_password" => $pass_word));
            $result = $statement->fetchAll(); 
         
            if($result){
                $isFound = true;
                $connectedUser = $result[0]['username'];
                $email = $result[0]['email'];
            }

        }

        if($isFound){
            echo "Bienvenue sur page d'accueil ! $connectedUser ($email)";
        }else {


            
            include_once('views/login.php');


            if(!$isFound && $loginAttempt >=1 ){
                echo "Username and password incorrect! ";
                $loginAttempt = 0;
            }
            
        }

    ?>









</body>
</html>