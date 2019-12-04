<!-- result of the function that returns an absolute value -->
<?php
function sum() {
    $a = 5;
    $b = 10;
    return $a + $b;
};
$result = sum();
echo $result;
?>
<br>

<!-- returns a rounded value to the next highest integer  -->
<?php
function divide() {
    $x = 5;
    $y = 10;
    return $x / $y;
};
$res = divide();
echo $res . "<br>";
echo (round($res, 0, PHP_ROUND_HALF_UP));
?>
<br>

<!--the highest value of a series of values ​​that are received by parameter-->
<?php
function maxValue() {
    $a = [1,4,2,8,9,3];
    return max($a);
};
$result = maxValue();
echo $result;
?>
<br>

<!-- returns the lowest value of a series of values ​​that are received by parameter -->
<?php
function minValue() {
    $a = [1,4,2,8,9,3];
    return min($a);
};
$result = minValue();
echo $result;
?>
<br>

<!-- returns a random number -->
<?php
function randomValue() {
    return mt_rand(1,10);
};
$result = randomValue();
echo $result;
?>
<br>




