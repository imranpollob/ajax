<?php
include "db.php";

$query = "SELECT * FROM cars";
$query_result = mysqli_query($connection, $query);

if ($query_result){

    while ($row = mysqli_fetch_array($query_result)){
        echo "<tr>";
        echo "<td id=''>{$row['id']}</td>";
        echo "<td>{$row['cars']}</td>";
        echo "</tr>";
    }
    
}


?>