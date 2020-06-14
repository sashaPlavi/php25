
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
    if ($result->num_rows === 0) {
        // Oh, no rows! Sometimes that's expected and okay, sometimes
        // it is not. You decide. In this case, maybe actor_id was too
        // large? 
        echo "We could not find a match for ID   sorry about that. Please try again.";
        exit;
    }
    $actor = $result->fetch_all(MYSQLI_ASSOC);

    return $actor;
}
