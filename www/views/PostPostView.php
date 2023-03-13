<?php

namespace Views;

use Models\PostPostModel;

class PostPostView {

  private array $output = [];

  public function generate(PostPostModel $postPostModel) {
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