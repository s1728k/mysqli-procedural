<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'krishna@1');
define('DB_NAME', 'test');
 
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Attempt create table query execution
// $sql = "CREATE TABLE employees(
//     id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
//     name VARCHAR(30) NOT NULL,
//     address VARCHAR(30) NOT NULL,
//     salary INT NOT NULL 
// )";
// if(mysqli_query($link, $sql)){
//     echo "Table created successfully.";
// } else{
//     echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
// }

 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>