<form action="/api/post_post.php" method="POST" class="form">
  <label for="title">Post Title:</label>
  <input type="text" name="title" placeholder="Title">
  <br />
  <label for="author_name">Name:</label>
  <input type="text" name="author_name" placeholder="Please enter your name">
  <br />
  <textarea type="text" name="content" placeholder="Here goes your post...." rows="5" cols="55"></textarea>
  <br />
  <input class="form__btn" type="submit" value="Submit">
</form>