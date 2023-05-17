<?php
    $servername = "s571";
    $username = "creatuportada_shalom";
    $password = "w3!ojv_pItKI";
    $dbname = "creatuportada_carrental";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO carrental (PK, data)
    VALUES ('01', 'asdfasdfasdf')";

    if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    }

$conn->close();
?>