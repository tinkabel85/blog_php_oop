<?php

namespace Models;

class PostPostModel {
  private bool $success = false;
  private string $message = '';

  private string $postedTitle = '';

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

  public function setPostedTitle(int $postedTitle): self
  {
    $this->postedTitle = $postedTitle;
    return $this;
  }

  public function getPostedTitle(): string
  {
    return $this->postedTitle;
  }

}
