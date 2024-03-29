<?php
declare(strict_types=1);

namespace App;

class Inventory {

    private $author;
    private $title;
      
    public function __construct($title, $author)
    {
      $this->author = $author;
      $this->title  = $title;
    }
  
    public function getAuthor() {
      return $this->author;
    }
 
    public function getTitle()
    {
      return $this->title;
    }
  
    public function getAuthorAndTitle() {
      return $this->getTitle() . ' by ' . $this->getAuthor();
    }
}
