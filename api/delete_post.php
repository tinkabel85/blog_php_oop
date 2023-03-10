<?php

use Models\DeletePostModel;
use Models\Request;
use Controllers\DeletePostController;
include('../import.php');


$view = (new DeletePostController(new DeletePostModel()))->run(new Request($_POST, $_GET));

echo $view->toString();
