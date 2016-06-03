<?php
include "db.php";

if (isset($_POST['car_name'])){
    $car_name = $_POST['car_name'];

    if ($car_name!=null){

        $query = "INSERT INTO cars(cars) VALUES('$car_name')";
        $add_car_query = mysqli_query($connection, $query);

        if ($add_car_query){
            echo "Successfully added";
        }else{
            die("failed". mysqli_error($connection));
        }
        
    }else{
        echo "Input field is empty";
    }
    
    
}


?>

