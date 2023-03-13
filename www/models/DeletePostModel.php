<?php

namespace Models;

class DeletePostModel extends Model
{
  private int $deletedPostId = 0;

  public function setDeletedPostId(int $deletedPostId): self
  {
    $this->deletedPostId = $deletedPostId;
    return $this;
  }

  public function getDeletedPostId(): string
  {
    return $this->deletedPostId;
  }

  public static function build(): Model
  {
    return new DeletePostModel();
  }
}
