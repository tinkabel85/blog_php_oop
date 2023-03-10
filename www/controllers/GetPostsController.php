<?php

namespace Controllers;


use Exception;
use Models\GetPostsModel;
use Models\Request;
use Views\GetPostsView;

class GetPostsController
{

  public function __construct(
    private GetPostsModel $getPostsModel
  ) {
  }

  public function run(Request $request) : GetPostsView 
  {
    try {
      $databaseEngine = new \DatabaseEngine();
      $post = new \Post($databaseEngine);
      $posts = $post->displayAllPosts($databaseEngine);

      foreach ($posts as $post) {
        echo "<h1>" . $post->getTitle() . "</h1>";
        echo "<p>" . $post->getContent() . "</p>";
        echo "<p>By: " . $post->getAuthor()->getName() . "</p>";
        echo "<hr>";
      }
      $this->getPostsModel->setSuccess(true);
      $this->getPostsModel->setMessage('Success');
    } catch (Exception $e) {
      $this->getPostsModel->setSuccess(false);
      $this->getPostsModel->setMessage('Error: ' . $e->getMessage());
    }

    $view = new GetPostsview();
    $view->generate($this->getPostsModel);
    return $view;
  }
}
