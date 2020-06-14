
<?php
require('db/conn.php');

function ExecuteQuery($sql, $name)
{
    $conn = OpenCon();



    if (!$result = $conn->query($sql)) {
        //$error = "Error creating table: " . $conn->error;
        echo "Error: Our query failed to execute and here is why: \n";
        echo "Query: " . $sql . "\n";
        echo "Errno: " . $conn->errno . "\n";
        echo "Error: " . $conn->error . "\n";
        CloseCon($conn);
        // return $error;
    }

    return $result;
}
