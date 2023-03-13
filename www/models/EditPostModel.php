<?php

namespace Models;

class EditPostModel extends Model
{
  private int $editedPostId = 0;

  public function setEditedPostId(int $editedPostId): self
  {
    $this->editedPostId = $editedPostId;
    return $this;
  }

  public function getEditedPostId(): int
  {
    return $this->editedPostId;
  }
}
