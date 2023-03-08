<?php

include('../import.php');

$title = $_POST['title'] ?? '';
$content = $_POST['content'] ?? '';
$authorName = $_POST['author_name'] ?? '';

if (in_array('', [$title, $content, $authorName])) {
  die('invalid input');
}

$post = (new Post(new DatabaseEngine()))
  ->setTitle($title)
  ->setContent($content)
  ->setAuthor(new Author($authorName));

$post->save();
header("Location: get_posts.php");