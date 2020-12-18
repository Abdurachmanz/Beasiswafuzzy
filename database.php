<?php 

//error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));

$dbhost = 'localhost'; 
$dbuser = 'root';    
$dbpass = 'Konyol123';      
$dbname = 'seleksibeasiswa';
 
$connect = new mysqli($dbhost,$dbuser,$dbpass,$dbname);

if ($connect->connect_error) {
    die('Please Refresh current page: '. $connect->connect_error);
}
?>