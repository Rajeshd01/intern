<?php
include_once 'includes/Session.class.php';
include_once 'includes/Mic.class.php';
include_once 'includes/User.class.php';
include_once 'includes/Database.class.php';

Session::start();

function load_template($name)
{
    include $_SERVER['DOCUMENT_ROOT']."/intern_site/_templates/$name.php"; //not consistant.
}

function validate_credentials($username, $password)
{
    if ($username == "rajeshd01@new.com" and $password == "rajeshd01") {
        return true;
    } else {
        return false;
    }
}

