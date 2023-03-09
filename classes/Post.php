<?php

class Post
{
  private int $id = 0;
  private string $title = '';
  private string $content = '';
  private Author $author;
  private DatabaseEngine $databaseEngine;
  public function __construct(DatabaseEngine $databaseEngine){
    $this->id = hexdec(uniqid());
    $this->databaseEngine = $databaseEngine;
  }

  public function save()
  {
    $this->databaseEngine->createFile(
      'post_' . $this->id,
      json_encode([
        'id' => $this->id,
        'title' => $this->title,
        'content' => $this->content,
        'author' => $this->author->getName(),
      ])
    );
  }

  public function delete()
  {
    $this->databaseEngine->deleteFile(
      'post_' . $this->id
    );
  }

  public function getId(): int
  {
    return $this->id;
  }
  public function setId(int $id): self {
    $this->id = $id;
    return $this;
  }

  public function getTitle(): string
  {
    return $this->title;
  }
  public function setTitle(string $title): self {
    $this->title = $title;
    return $this;
  }

  public function getContent(): string
  {
    return $this->content;
  }
  public function setContent(string $content): self {
    $this->content = $content;
    return $this;
  }
  public function getAuthor() : Author
  {
    return $this->author;
  }

  public function setAuthor(Author $author): self {
    $this->author = $author;
    return $this;
  }

  public static function loadPost(DatabaseEngine $databaseEngine, int $id): Post {
    // read a file from db -> dbEngine should return json from file
    // this func should parse then json and init a Post obj
    //return that Post obj
    $content = $databaseEngine->getFile('post_' . $id);
    $data = json_decode($content, true);

    $post = new Post($databaseEngine);
    $post->setId($data['id']);
    $post->setTitle($data['title']);
    $post->setContent($data['content']);

    $author = new Author($data['author']);
    $post->setAuthor($author);

    return $post;
  }

  public function displayAllPosts(DatabaseEngine $databaseEngine) {
    $files = $databaseEngine->getAllFiles();
    $posts = [];
    foreach($files as $file) {
      preg_match('/post_(\d+)/', $file, $matches);
      $id = (int)$matches[1];
      $post = Post::loadPost($databaseEngine, $id);
      $posts[] = $post;
    }
    return $posts;
  }
}
