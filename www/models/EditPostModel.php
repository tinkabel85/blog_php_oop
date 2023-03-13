<?php

namespace Models;

class EditPostModel
{
  private bool $success = false;
  private string $message = '';

  private int $editedPostId = 0;

  public function setSuccess(bool $success): self
  {
    $this->success = $success;
    return $this;
  }

  public function getSuccess(): bool
  {
    return $this->success;
  }

  public function setMessage(string $message): self
  {
    $this->message = $message;
    return $this;
  }

  public function getMessage(): string
  {
    return $this->message;
  }

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
