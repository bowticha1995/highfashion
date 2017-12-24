<?php 
    if(isset($_POST['product']) == true && empty($_POST['product']) == false) {
        require 'connect.php';
        $sql = "INSERT INTO rent (product) VALUES ('".$_POST['product']."')";
        if ($conn->query($sql) === false) {
            echo "Error: " . $sql . "<br>" . $conn->error;
        } else {
            echo $_POST['product'];
        }
    }
    $conn->close();
?>