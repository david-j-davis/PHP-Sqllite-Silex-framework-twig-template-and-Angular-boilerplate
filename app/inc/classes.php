<?php

class GenericClass {
  //assign properties to class with public, private, or protected keywords
  //its a good idea to set all properties to private and set public getters and setters
  private $title;
  private $source = "David Davis";
  private $description;

  //set magic method
  public function __construct($title = null) {
    $this->setTitle($title);
  }
  //create a method like so
  public function setTitle($title) {
    if (empty($title)) {
      $this->title = null;
    } else {
      $this->title = ucwords($title);
    }
  }
  //use a getter or setter to access private properties
  public function getTitle() { //getter
    return $this->title;
  }
  public function getDescription() { //getter
    return $this->description;
  }
  public function addDescription($description) { //getter
    $this->description = $description;
  }
  public function setSource($source) {
    $this->source = ucwords($source);
  }
  public function getSource() {
    return $this->source;
  }
}

class Render {
  public static function listTitles($titles) {
    asort($titles);
    return implode("\n", $titles);
  }
  public static function displayResults($recipe) { //declare this public method as static so it does not need to be instantiated
    $output = array(
      "title" => $recipe->getTitle(),
      "source" => $recipe->getSource(),
      "description" => $recipe->getDescription()
    );
    return $output;
  }
}
