<?php
include 'cad.php';

//echo 'Hello ' . htmlspecialchars($_POST["title"]) . '! <br>';
//echo 'Hello ' . htmlspecialchars($_POST["content"]) . '!';

function addPost()
{

    $title = htmlspecialchars($_POST["title"]);
    $content = htmlspecialchars($_POST["content"]);
    //INSERT INTO all_the_best_post (title, content ) VALUES (tihi don,danka danka)

    $query = "INSERT INTO all_the_best_post (title, content ) VALUES ( '  $title  ','  $content  ');";
    echo $query;

    $result = ExecuteQuery($query, "Inserted Successfully");
    echo $result;
};

function getPosts()
{
    $query = "SELECT * FROM all_the_best_post;";
    $post = ExecuteQuery($query, 'reading congrats successfuly!');
    //var_dump($post);
    return $post;
};
