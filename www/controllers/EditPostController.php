<?php

namespace Controllers;

use Exception;
use Models\EditPostModel;
use Models\Request;
use Views\EditPostView;
use Views\View;

class EditPostController implements Controller
{

  public function __construct(
    private EditPostModel $editPostModel)
  {
  }

  public function run(Request $request): View
  {
    $id = $request->getFromPost('id', '');
    $title = $request->getFromPost('title', '');
    $content = $request->getFromPost('content', '');
    $authorName = $request->getFromPost('author_name', '');

    if (empty($id) || empty($title) || empty($content) || empty($authorName)) {
      $this->editPostModel->setSuccess(false);
      $this->editPostModel->setMessage('Error: invalid input!');
    } else {
      try {
        $post = (\Post::loadPost(new \DatabaseEngine, $id))->setTitle($title)->setContent($content)->setAuthor(new \Author($authorName));
        $post->save();

        $this->editPostModel->setSuccess(true);
        $this->editPostModel->setMessage('Succes');
        $this->editPostModel->setEditedPost($post);
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
