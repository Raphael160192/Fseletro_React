 <?php

require_once("./connect.php");

header('Access-Control-Allow-Origin: *');
header('Content-type: application/json');
    
    
        $conn = Connect::getDb();

       $stmt = $conn->query("SELECT * FROM produto");
       print_r (json_encode($stmt->fetchAll(PDO::FETCH_ASSOC)));

        

 
