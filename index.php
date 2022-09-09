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

        if(isset($_POST['username'], $_POST['password'])){

            $user_name = $_POST['username'];
            $pass_word = $_POST['password'];

            $sqlQuery = "
                

            ";
         



            

        }

        if($isFound){
            echo "Bienvenue sur page d'accueil !";
        }else {
            include_once('views/login.php');




        }

    ?>









</body>
</html>