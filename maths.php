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



