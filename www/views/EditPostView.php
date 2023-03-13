<?php

namespace Views;

use Models\EditPostModel;

class EditPostView
{

  private array $output = [];

  public function generate(EditPostModel $editPostModel)
  {
    $this->output = [
      'status' => $editPostModel->getSuccess() ? 'Success' : 'Error',
      'message' => $editPostModel->getMessage(),
      'editedPostId' => $editPostModel->getEditedPostId(),
    ];
  }
  public function toString(): string
  {
    return json_encode($this->output);
  }
}
