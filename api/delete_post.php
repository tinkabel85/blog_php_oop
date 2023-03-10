<?php

use Models\DeletePostModel;
use Models\Request;

include('../import.php');

use Controllers\DeletePostController;

$view = (new DeletePostController(new DeletePostModel()))->run(new Request($_POST, $_GET));

echo $view->toString();

