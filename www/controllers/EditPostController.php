<?php

namespace Controllers;

use Exception;
use Models\EditPostModel;
use Models\Request;
use Views\EditPostView;

class EditPostController
{

  public function __construct(
    private EditPostModel $editPostModel
  ) {}


  public function run(Request $request): EditPostView
  {
    $id = $request->getFromPost('id', 0);
    $title = $request->getFromPost('title', '');
    $content = $request->getFromPost('content', '');
    $authorName = $request->getFromPost('author_name', '');

      if (empty($id) || empty($title) || empty($content) || empty($authorName)) {
        $this->editPostModel->setSuccess(false);
        $this->editPostModel->setMessage('Error: invalid input!');
    } else {
      try {
        $post =
        \POST::loadPost(new \DatabaseEngine(), $id)->setTitle($title)->setAuthor(new \Author($authorName))->setContent($content);
        $post->save();
  
        $this->editPostModel->setSuccess(true);
        $this->editPostModel->setMessage('Success');
        $this->editPostModel->setEditedPostId($id);
      } catch (Exception $e) {
        $this->editPostModel->setSuccess(false);
        $this->editPostModel->setMessage('Error: ' . $e->getMessage());
      }
    }

    $view = new EditPostView();
    $view->generate($this->editPostModel);
    return $view;
  }
}
