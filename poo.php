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

<!-- Classes with __construct and __destruct -->
<?php
class Fruits1 {
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
$apple = new Fruits1("Apple", "red");
?>
<br>

<?php
class Dogs {
  // Properties
  var $breed;
  var $size;

  // Methods
  function __construct($breed, $size) {
    $this->breed = $breed;
    $this->size = $size; 
  }
  function __destruct() {
    echo "The dog is a {$this->breed} and is {$this->size}.".'<br>'; 
  }
}
$bulldog = new Dogs("Bulldog", "big");
?>
<br>

<?php
class Employees {
  // Properties
  var $name;
  var $salary;

  // Methods
  function __construct($name, $salary) {
    $this->name = $name;
    $this->salary = $salary; 
  }
  function __destruct() {
    echo "The employee {$this->name} have a salary of {$this->salary}.".'<br>'; 
  }
}
$Axel = new Employees("Axel", "$5000");
?>
<br>

<?php
class Movies {
  // Properties
  var $name;
  var $date;

  // Methods
  function __construct($name, $date) {
    $this->name = $name;
    $this->date = $date; 
  }
  function __destruct() {
    echo "The movie {$this->name} was released in {$this->date}.".'<br>'; 
  }
}
$jurassicPark = new Movies("Jurasic Park", "1993");
?>