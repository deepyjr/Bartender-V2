<!DOCTYPE html>
<html>
    <head>
        <title>Cours PHP / MySQL</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="cours.css">
    </head>
    <body>
        <h1>Bases de données MySQL</h1>  
        <?php
            $servname = 'localhost';
            $dbname = 'BartenderLife';
            $user = 'root';
            $pass = '';
            
            try{
                $dbco = new PDO("mysql:host=$servname;dbname=$dbname", $user, $pass);
                $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                

                $boissons = "CREATE TABLE Boissons(
                    Id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                    Boisson_Nom VARCHAR(30) NOT NULL,
                    Boisson_Description VARCHAR(150) NOT NULL,
                    Boisson_Image VARCHAR(300) NOT NULL )";


                
                $dbco->exec($boissons);


                echo 'Tables bien crées !';
            }
            
            catch(PDOException $e){
              echo "Erreur : " . $e->getMessage();
            }
        ?>
    </body>
</html>

