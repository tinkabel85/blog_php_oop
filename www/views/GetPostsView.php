<?php

namespace Views;

use Models\GetPostsModel;
use Models\Model;

class GetPostsView implements View
{

  private array $output = [];

  public function generate(Model $getPostsModel) : void
  {
    /**  @var GetPostsModel $getPostsModel */

    $this->output = [
      'status' => $getPostsModel->getSuccess() ? 'Success' : 'Error',
      'message' => $getPostsModel->getMessage(),
      'data' => [
        'posts' => $getPostsModel->getPostsToString()],
    ];
  }
  public function toString(): string
  {
    return json_encode($this->output);
  }
}
