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
$fecha = DateTime::createFromFormat('d/m/Y', date("d/m/Y"));
echo $fecha->format('Y-m-d');
?>
