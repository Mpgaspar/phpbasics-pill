<!-- simple array composed of text strings -->
<?php
$cars = array("Ferrari", "BMW", "Mercedes");
print_r($cars);
?>
<br>

<!--  simple array consisting of whole numbers and decimal numbers -->
<?php
$num = array(2,4,6,8.3,5.47,10);
print_r($num);
?>
<br>

<!--  a multidimensional array -->
<?php
$fruits = array
  (
  array("Banana",20,8),
  array("Apple",15,13),
  array("Orange",10,2),
  );
echo $fruits[0][0].": In stock: ".$fruits[0][1].", sold: ".$fruits[0][2].".<br>";
echo $fruits[1][0].": In stock: ".$fruits[1][1].", sold: ".$fruits[1][2].".<br>";
echo $fruits[2][0].": In stock: ".$fruits[2][1].", sold: ".$fruits[2][2].".<br>";
?>

<!--  function that allows to obtain the length of an array -->
<?php
$cars = array("Ferrari", "BMW", "Mercedes");
echo count($cars);
?>
<br>

<!--  function that allows to obtain the combination of two arrays -->
<?php
$a = array('green', 'red', 'yellow');
$b = array('avocado', 'apple', 'banana');
$c = array_combine($a, $b);
print_r($c);
?>
<br>

<!-- function that once is given an array return the last element of it -->
<?php
$cars = array("Ferrari", "BMW", "Mercedes");
echo end($cars);
?>
<br>

<!-- function that once is given an array add a new element to the array in question -->
<?php
$cars = array("Ferrari", "BMW", "Mercedes");
array_push($cars, 'Porsche');
print_r($cars);
?>
<br>
