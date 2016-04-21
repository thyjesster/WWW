<?php
include 'connection.php';
/*
$sql= "DROP TABLE MyGuests";
$conn->query($sql);
*/ 
// sql to create table

$sql = "CREATE TABLE MyGuests (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50),
username  VARCHAR(30),
password VARCHAR(30),
reg_date TIMESTAMP
)";

//check if table created
if ($conn->query($sql) === TRUE) {
    echo "Table MyGuests created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

//insert Jesse
$sql = "INSERT INTO MyGuests (firstname, lastname, email, username, password)
VALUES ('Jesse', 'Sheather', 'jesse@email.com' , 'jesse1' , 'pw' )";
$conn->query($sql);

//insert Baron
$sql = "INSERT INTO MyGuests (firstname, lastname, email, username, password)
VALUES ('Baron', 'Sanmugam', 'baron@email.com' , 'baron1' , 'pw' )";
$conn->query($sql);


$sql = "SELECT * FROM MyGuests";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<br> id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. " " . $row["email"]. " " .$row["username"];
    }
} else {
    echo " 0 results";
}




?>
