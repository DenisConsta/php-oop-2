<?php

class Food extends Product{

  public $weight;
  public $ingredients;
  public $taste;

  /**
   * Summary of __construct
   * @param Number $_weight
   * @param Array $_ingredients
   * @param String $_taste
   * 
   * @param Integer $_id
   * @param String $_name
   * @param String $_brand
   * @param Category $_category
   * @param Float $_price
   * @param Bool $_is_available
   * @param String $_image
   */
  public function __construct($_weight, $_ingredients, $_taste, $_id, $_name, $_brand, Category $_category, $_price, $_is_available, $_image)
  {
    parent::__construct($_id, $_name, $_brand, $_category, $_price, $_is_available, $_image);

    $this->weight = $_weight;
    $this->ingredients = $_ingredients;
    $this->taste = $_taste;
  }
}

?>