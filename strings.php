<!-- Print a text string -->
<?php
echo 'Hello world';
?>
<br>

<!-- Print a text string that does not interpret variables  -->
<?php
echo 'Hello world';
?>
<br>

<!-- Print a text string that interprets variables -->
<?php
$a = 'Hello world';
echo $a;
?>
<br>

<!-- Concatenate a previously declared variable in a text string -->
<?php
$b = 'world';
echo 'Hello ' . $b;
?>
<br>

<!-- Execute the function that allows you to replace text in a string  -->
<?php
echo str_replace("world", "Assembler", "Hello world!");
?>
<br>

<!-- Execute the function that allows you to replace text in a string (without taking into account upper / lower case) -->
<?php
echo str_ireplace("world", "Assembler", "Hello world!");
?>
<br>

<!-- Execute the function that allows you to write a text N times -->
<?php
echo str_repeat("Assembler, ", 5);
?>
<br>

<!-- Execute the function that allows to obtain the length of a text string -->
<?php
echo strlen("Hello world!");
?>
<br>

<!-- Executes the function that allows to obtain the position of the first occurrence of a text within a text string -->
<?php
echo strpos("Hello world!", "world");
?>
<br>

<!-- Execute the function that allows a text string to be capitalized -->
<?php
echo strtoupper("Hello world!");
?>
<br>

<!-- Execute the function that allows you to transform a text string to lowercase -->
<?php
echo strtolower("HelLO wORld!");
?>
<br>

<!-- Execute the function that allows to obtain a text substring from the position -->
<?php
echo substr("Hello world",6);
?>
