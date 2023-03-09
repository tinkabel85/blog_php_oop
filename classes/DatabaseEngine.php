<?php

class DatabaseEngine
{

  private string $docRoot;

  public function __construct()
  {
    $this->docRoot = $_SERVER['DOCUMENT_ROOT'] . '/filestore/';
  }
  public function createFile(string $fileName, string $content): bool
  {
    try {
      $file = fopen($this->docRoot . $fileName, 'w');
      fwrite($file, $content);
      fclose($file);
    } catch (Exception $e) {
      return false;
    }
    return true;
  }

  public function deleteFile(string $fileName)
  {
    unlink($this->docRoot . $fileName);
  }

  public function getFile(string $fileName) : string {
    $file = fopen($this->docRoot . $fileName, 'r');
    $content = file_get_contents($this->docRoot . $fileName);
    fclose($file);
    return $content;
  }

  public function getAllFiles(): array {
    $files = glob($this->docRoot . 'post_*');
    return $files;
  }
}
