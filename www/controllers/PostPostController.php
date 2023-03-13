<?php

namespace Controllers;

use Exception;
use Models\PostPostModel;
use Models\Request;
use Views\PostPostView;
use Views\View;
use Controllers\Controller; 

class PostPostController implements Controller{

  public function __construct(
    private PostPostModel $postPostModel) 
    {}

  public function run(Request $request) : View {

    $title = $request->getFromPost('title', '');
    $content = $request->getFromPost('content', '');
    $authorName = $request->getFromPost('author_name', '');

    if (in_array('', [$title, $content, $authorName])) {
      $this->postPostModel->setSuccess(false);
      $this->postPostModel->setMessage('Error: invalid input!');
    } else {
      try {
        $post = (new \Post(new \DatabaseEngine()))
        ->setTitle($title)
        ->setContent($content)
        ->setAuthor(new \Author($authorName));

        $post->save();

        $this->postPostModel->setSuccess(true);
        $this->postPostModel->setMessage('Success');
      } catch (Exception $e) {
        $this->postPostModel->setSuccess(false);
        $this->postPostModel->setMessage('Error: ' . $e->getMessage());
      }
    }

    $view = new PostPostview();
    $view->generate($this->postPostModel);
    return $view;

  }

}
