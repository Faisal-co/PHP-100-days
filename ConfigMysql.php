<?php
$host = "127.0.0.1";
$username = "root";
$password = null;
$dbname = "my_db1";
try{
    $conn = new PDO("mysql:host=$host;dbname=my_db1",$username,$password);
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    echo "conection done please make simple projectxxxxxxx";
}catch(PDOException $err){
    echo "connection failed $err->getMessage()";
}
echo "<br>";
// Sql Query
$sql = "CREATE TABLE IF NOT EXISTS fa_Table (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";
try {
    $conn->exec($sql);   // Execute the query
    echo "Table 'fa' created successfully!";
} catch(PDOException $err) {
    echo "Error creating table: " . $err->getMessage();
}
/*
// Connection Made
// Put Mysql Query in Connection
echo "<br>";
$Q = $conn->query("show tables");
while($v=$Q->fetch(PDO::FETCH_NUM)){
    // print_r($v);
}*/
?>
