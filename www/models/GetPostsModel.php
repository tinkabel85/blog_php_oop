<?php

namespace Models;

class GetPostsModel extends Model
{
  private array $posts = [];

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

  public static function build(): Model
  {
    return new GetPostsModel();
  }

}
