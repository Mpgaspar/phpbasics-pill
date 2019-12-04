<!-- two numbers returns the sum of both -->
<?php
function sum($a,$b){
    echo $a + $b;
}
sum(8,4);
?>
<br>

<!-- two numbers returns the multiplication of both -->
<?php
function mult($a,$b){
    echo $a * $b;
}
mult(8,4);
?>
<br>

<!-- two numbers returns the division of both -->
<?php
function div($a,$b){
    echo $a / $b;
}
div(8,4);
?>
<br>

<!-- two numbers and an operation (add, multiply or divide), returns the result of that operation. -->
<?php
function math($a,$b,$o){
    if($o=='+'){echo $a + $b;}
    elseif($o=='*'){echo $a * $b;}
    elseif($o=='/'){echo $a / $b;}   
}
math(8,4,'/');
?>
<br>



