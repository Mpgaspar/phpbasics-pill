<!-- Create at least 4 classes -->
<?php
class Fruit {
  // Properties
  public $name;
  public $color;

  // Methods
  function set_name($name) {
    $this->name = $name;
  }
  function get_name() {
    return $this->name;
  }
  function set_color($color) {
    $this->color = $color;
  }
  function get_color() {
    return $this->color;
  }
}

$apple = new Fruit();
$apple->set_name('Apple');
$apple->set_color('Red');
echo "Name: " . $apple->get_name();
echo "<br>";
echo "Color: " . $apple->get_color();
?>
<br>

<!-- builders and destroyers  -->
<?php
class Fruits {
  public $name;
  public $color;

  function __construct($name) {
    $this->name = $name; 
  }
  function get_name() {
    return $this->name;
  }
}

$apple = new Fruits("Apple");
echo $apple->get_name();
?>
<br>

<!-- __destruct -->
<?php
class Fruit1 {
  // Properties
  var $name;
  var $color;

  // Methods
  function __construct($name, $color) {
    $this->name = $name;
    $this->color = $color; 
  }
  function __destruct() {
    echo "The fruit is {$this->name} and the color is {$this->color}."; 
  }
}

$apple = new Fruit1("Apple", "red");
?>