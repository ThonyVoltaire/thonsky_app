<!DOCTYPE html>
<html>
    <head>
        <title>PHP / MySQL</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="FormeVisiteurs.html">
    </head>
    <body>
        <h1>Bases de donnees MySQL</h1>  
        <?php
            $servername = 'localhost';
            $username = 'AARONS';
            $password = 'root';
            
            //On etablit la connexion
            $conn = mysqli_connect($servername, $username, $password);
            
            //On verifie la connexion
            if(!$conn){
                die('Erreur : ' .mysqli_connect_error());
            }
            echo 'Connexion r&ussie';
        ?>
    </body>
</html>
