<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My Blog</title>
  <link rel="stylesheet" type="text/css" href="./styles.css">
</head>

<body>
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

  <form action="/api/get_posts.php" method="GET">
    <input class="btn--all" type="submit" value="Show all posts">
  </form>
</body>

</html>