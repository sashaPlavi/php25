<?php

include 'cad.php';
include 'index4.php';
echo "halo Sasha!";
$sql = "CREATE TABLE MyGuests(
id INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50),
reg_date TIMESTAMP
)";
$result = ExecuteQuery($sql, "Table Created Successfully");
echo $result;
