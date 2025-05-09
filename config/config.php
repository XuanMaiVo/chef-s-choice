<?php
<<<<<<< Updated upstream
$host = "localhost";
$username = "root";
$password = "";
$database = "chef_db"; 
$conn = mysqli_connect($host, $username, $password, $database);
=======
define("DB_HOST", "localhost:3307"); //tại tui xài port này nên tui dể 3307
define("DB_USER", "root");
define("DB_PASS", ""); //nếu có mkhau thig mng set mkhau lại nha
define("DB_NAME", "chef_db");
?>
<!--
db_user với db_pass là để theo cái xampp hoặc mysql
của mng á nha
>>>>>>> Stashed changes

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
