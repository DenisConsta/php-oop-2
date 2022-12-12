<?php

class Product{
  private $id;
  public $name;
  public $brand;
  public $category;
  public $price;
  public $is_available;
  public $image = null;

  /**
   * Summary of __construct
   * @param Integer $_id
   * @param String $_name
   * @param String $_brand
   * @param Category $_category
   * @param Number $_price
   * @param Bool $_is_available
   * @param String $_image
   */
  public function __construct($_id, $_name, $_brand, Category $_category, $_price, $_is_available, $_image)
  {
    $this->id = $_id;
    $this->name = $_name;
    $this->brand = $_brand;
    $this->category = $_category;
    $this->price = $_price;
    $this->is_available = $_is_available;
    $this->image = $_image;
  }
}

?>