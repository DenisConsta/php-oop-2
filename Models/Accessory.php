<?php

class Accessory extends Product{

  public $material;
  public $size;

  /**
   * Summary of __construct
   * @param Array $_material
   * @param String $_size
   * 
   * @param Integer $_id
   * @param String $_name
   * @param String $_brand
   * @param Category $_category
   * @param Number $_price
   * @param Bool $_is_available
   * @param String $_image
   */
  public function __construct($_material, $_size, $_id, $_name, $_brand, Category $_category, $_price, $_is_available, $_image)
  {
    parent::__construct($_id, $_name, $_brand, $_category, $_price, $_is_available, $_image);

    $this->material = $_material;
    $this->size = $_size;
  }
}

?>