<?php
$host = "192.168.146.140";
$username = "essai1";
$password = "essai1";
$database = "essai1";

$conn = pg_connect("host=192.168.146.140 port=5432  user=essai1 password=essai1 dbname=essai1");
if(!$conn){
    echo "Database connection failed. Error:".$conn->error;
    exit;
}
?>
