<?php

use Models\GetPostsModel;
use Models\Request;
use Controllers\GetPostsController;

include('../import.php');


$view = (new GetPostsController(new GetPostsModel()))->run(new Request($_POST, $_GET));

header('Content-Type: application/json;');
echo $view->toString();
