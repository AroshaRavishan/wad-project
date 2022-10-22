<?php
$con = "";
   
try {
    $servername = "localhost:3306";
    $dbname = "food_oder";
    $username = "root";
    $password = "";
   
    $conn = new PDO(
        "mysql:host=$servername; dbname=food_oder",
        $username, $password
    );
      
   $conn->setAttribute(PDO::ATTR_ERRMODE,
                    PDO::ERRMODE_EXCEPTION);
                    
}
catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

?>