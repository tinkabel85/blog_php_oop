<?php

namespace Views;

use Models\Model;

interface view {

  public function toString(): string;

  public function generate(Model $Model): void;
}


