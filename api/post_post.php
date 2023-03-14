<?php

use Models\PostPostModel;
use Models\Request;
use Controllers\PostPostController;
include('../import.php');


$view = (new PostPostController(new PostPostModel()))->run(new Request($_POST, $_GET));
echo $view->toString();
header('Content-Type: application/json;');
header("Location: get_posts.php");