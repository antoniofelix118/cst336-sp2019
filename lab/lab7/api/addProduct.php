<?php
    $servername = "localhost";
    $username = "antoniofelix118";
    $password = "";
    $dbname = "ottermart";
    
    $conn = new mysqli($servername,$username,$password,$dbname);
    
    if($conn->connect_error){
        die("connection failed: "  . $conn->connect_error);
    }
    
    $sql = "INSERT INTO om_product (productId, productName, productDescription, productImage, price, catId)
    VALUES ('50','test','dasds','','0.00','1')";
    
    if($conn->query($sql) === TRUE){
        echo "New record created successfully.";
    } else {
        echo "Error: " .$sql . "<br>" . $conn->error;
    }

    $conn->close();

?>