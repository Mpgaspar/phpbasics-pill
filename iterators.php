<?php
for ($i = 1; $i <= 10; $i++) {
    echo $i;
}
?>
<br>

<?php
foreach (array(1, 2, 3, 4, 5) as $v) {
    echo "$v\n";
}
?>
<br>

<?php
$i = 1;
while ($i <= 10) {
    echo $i++;  
}
?>
<br>

<?php 
$x = 1;
do {
    echo "The number is: $x <br>";
    $x++;
} while ($x <= 5);
?>

