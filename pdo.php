<?php
// This is for pdo db connection;
$host = "localhost";
$username = "root";
$password = null;
try{
    $conn = new PDO("mysql:host=$host;dbname=my_db1",$username,$password);
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    //echo "conection done";
}catch(PDOException $err){
    //echo "connection failed $err->getMessage()";
}
// Connection Made
// Put Mysql Query in Connection
echo "<br>";
$Q = $conn->query("show tables");
while($v=$Q->fetch(PDO::FETCH_NUM)){
    // print_r($v);
}

?>
