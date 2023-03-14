<?php

namespace Models;

use Post;

class EditPostModel extends Model 
{
  private Post $editedPost;
  private int $editedPostId = 0;

  
  public function setEditedPost(Post $post): self
  {
    $this->editedPost = $post;
    return $this;
  }

  public function getEditedPost(): Post
  {
    return $this->editedPost;
  }

  public function getEditedPostId(): int
  {
    return $this->editedPostId;
  }

  public function setEditedPostId(int $editedPostId): self
  {
    $this->editedPostId = $editedPostId;
    return $this;
  }
}
