 <?php

require_once("./connect.php");

class Content extends Connect{
    public static function getAll() {
        $conn = Connect::getDb();

       $stmt = $conn->query("SELECT * FROM produto");
       print_r ($stmt->fetchAll(PDO::FETCH_ASSOC));

        header('Access-Control-Allow-Origin: *');
        header('Content-type: application/json');
        echo json_encode($json);
    }
}
 
