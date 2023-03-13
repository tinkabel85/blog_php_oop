<?php

namespace Models;

class PostPostModel extends Model
{
  private string $postedTitle = '';
  
  public function setPostedTitle(int $postedTitle): self
  {
    $this->postedTitle = $postedTitle;
    return $this;
  }

  public function getPostedTitle(): string
  {
    return $this->postedTitle;
  }

  // public static function build(): Model {
  //   return new PostPostModel();
  // }
}
