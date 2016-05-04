<?php
define('DB_SERVER', 'eu-cdbr-azure-north-d.cloudapp.net');
define('DB_USERNAME', 'b4cfc5bf348c66');
define('DB_PASSWORD', 'da012a82');
define('DB_DATABASE','acsm_7968ef750daf6a5 ');
$db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);

if(!$db){
    echo "Cant connect to database" . mysqli_error();
}
?>