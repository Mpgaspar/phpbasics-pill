<?php
$x = true;
var_dump($x);
?>
<br>

<?php
$x = 12345;
var_dump($x);
?>
<br>

<?php
$x = 10.150;
var_dump($x);
?>
<br>

<?php
$x = "Marcelo";
var_dump($x);
?>
<br>

<?php
$cars = array("Ferrari","BMW","Mercedes");
var_dump($cars);
?>
<br>

<?php
class Tech {
    function Tech() {
        $this->stack = "PHP";
    }
}

// create an object
$assembler = new Tech();

// show object properties
echo $assembler->stack;
?>
<br>

<?php
$x = "Hello world!";
$x = null;
var_dump($x);
?>


