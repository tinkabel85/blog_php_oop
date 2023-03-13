<?php

include('../import.php');
use Models\EditPostModel;
use Models\Request;
use Controllers\EditPostController;



// $id = $_POST['id'] ?? '';
// $title = $_POST['title'] ?? '';
// $content = $_POST['content'] ?? '';
// $authorName = $_POST['author_name'] ?? '';

// $post = POST::loadPost(new DatabaseEngine(), $id)->setTitle($title)->setAuthor(new Author($authorName))->setContent($content);
// $post->save();

$view = (new EditPostController(new EditPostModel()))->run(new Request($_POST, $_GET));

echo $view->toString();