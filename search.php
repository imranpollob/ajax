<?php

include "db.php";

//if ($connection){
//    echo "We are connection";
//}

$search = $_POST['search'];

if (!empty($search)){
    $query = "SELECT * FROM cars WHERE cars LIKE '$search%' ";
    $search_query = mysqli_query($connection,$query);

    if (!$search_query){
        die("Failed".mysqli_error($connection));
    }

    while ($row = mysqli_fetch_array($search_query)){
        $brand = $row['cars'];
        ?><ul class="list-unstyled"><?php
        echo "<li>{$brand} available</li>";
        ?></ul><?php


    }
}

//echo "$search";

?>