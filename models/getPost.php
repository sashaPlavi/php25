<?php
include '../cad.php';

function getPosts()
{
    $query = "SELECT * FROM all_the_best_post;";
    $result = ExecuteQuery($query, 'reading congrats successfuly!');
    //var_dump($post);
    if ($result->num_rows === 0) {
        // Oh, no rows! Sometimes that's expected and okay, sometimes
        // it is not. You decide. In this case, maybe actor_id was too
        // large? 
        echo "We could not find a match for ID   sorry about that. Please try again.";
        exit;
    }
    $posts = $result->fetch_all(MYSQLI_ASSOC);

    return $posts;
};
