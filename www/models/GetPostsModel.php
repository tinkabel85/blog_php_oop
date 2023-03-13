<?php

namespace Models;

class GetPostsModel
{
  private bool $success = false;
  private string $message = '';

  private array $posts = [];


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

  public function setPosts(array $posts): self
  {
    $this->posts = $posts;
    return $this;
  }

  public function getPosts(): array
  {
    return $this->posts;
  }

  public function getPostsToString(): string
  {
    $postsArray = array_map(function ($post) {
      return [
        'id' => $post->getId(),
        'title' => $post->getTitle(),
        'content' => $post->getContent(),
        'author' => $post->getAuthor(),
      ];
    }, $this->posts);

    return json_encode(['posts' => $postsArray]);
  }

}
