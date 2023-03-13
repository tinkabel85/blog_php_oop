<?php

namespace Views;

use Models\PostPostModel;
use Models\Model;

class PostPostView implements View
{

  private array $output = [];

  public function generate(Model $postPostModel): void
  {
    /**  @var PostPostModel $postPostModel */
    $this->output = [
      'status' => $postPostModel->getSuccess() ? 'Success' : 'Error',
      'message' => $postPostModel->getMessage(),
      'data' => [
        'postedTitle' => $postPostModel->getPostedTitle(),
      ],
    ];
  }
  public function toString(): string
  {
    return json_encode($this->output);
  }
}
