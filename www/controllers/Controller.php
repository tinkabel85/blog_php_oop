<?php

namespace Controllers;

use Models\Request;
use Views\PostPostView;
use Views\View;

interface Controller {

  public function run(Request $request): View;


}