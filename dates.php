<?php
echo "Today is " . date("d/m/Y") . "<br>";
echo "Today is " . date("l") . "<br>";
echo "The month is " . date("m") . "<br>";
?>
<br>

<?php
echo "The minute is " . date("i");
?>
<br>

<?php
$fecha = DateTime::createFromFormat('j-M-Y', '28-Nov-2019');
echo $fecha->format('Y-m-d');
?>
