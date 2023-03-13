<?php

namespace Models;

abstract class Model {
  protected bool $success = false;
  protected string $message = '';

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

  //abstract public static function build(): self;

}