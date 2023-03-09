<?php

include('import.php');
$post = POST::loadPost(new DatabaseEngine(), $_GET['id']);


?>

<form action="/api/edit_post.php" method="POST" class="form">
  <input type="hidden" name='id' value="<?php echo $_GET['id'] ?>">
  <label for="title">Post Title:</label>
  <input type="text" name="title" value="<?php echo $post->getTitle() ?>" placeholder="Title">
  <br />
  <label for="author_name">Name:</label>
  <input type="text" name="author_name" value="<?php echo $post->getAuthor()->getName() ?>" placeholder="Please enter your name">
  <br />
  <textarea type="text" name="content" placeholder="Here goes your post...." rows="5" cols="55"><?php echo $post->getContent() ?></textarea>
  <br />
  <input class="form__btn" type="submit" value="Submit">
</form>

<form action="/api/get_posts.php" method="GET">
  <input class="btn--all" type="submit" value="Show all posts">
</form>