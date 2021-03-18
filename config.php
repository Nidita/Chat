<?php

$mysqli = new mysqli('localhost', 'techhubx_Chat', 'zanid', 'techhubx_Chat');
 
// Check connection
if($mysqli === false){
    die("ERROR: Could not connect. " . $mysqli->connect_error);
}
?>