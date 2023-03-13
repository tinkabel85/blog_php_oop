<?php

namespace Views;

use Models\GetPostsModel;

class GetPostsView
{

  private array $output = [];

  public function generate(GetPostsModel $getPostsModel)
  {
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