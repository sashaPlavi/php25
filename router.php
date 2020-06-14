<?php
function getPath()
{

    $parsed_url = parse_url($_SERVER['REQUEST_URI']); //Parse Uri

    return $parsed_url['path'];
}
