<?php

$conn = mysqli_connect("localhost","root","","portfolio_db");

if($conn){
    echo "Database Connected Successfully";
}
else{
    die("Connection Failed: ".mysqli_connect_error());
}

?>