<?php
if (date("l") =="Monday") {
  echo "We are on Monday";
}
?>
<br>

<?php
if (date("m") =="10") {
  echo "We are in October";
} else{
  echo "We are not in October";  
}
?>
<br>

<?php
if (date("i") < "10") {
  echo "the current minute is less than 10";
} elseif(date("i") > "15"){
  echo "the current minute is more than 15";  
} else {
  echo "does not meet any conditions";  
}
?>
<br>

<?php
switch (date("l")) {
    case "Sunday":
        echo "Today is Sunday";
        break;
    case "Monday":
        echo "Today is Monday";
        break;
    case "Tuesday":
        echo "Today is Tuesday";
        break;
    case "Wendsday":
        echo "Today is Wendsday";
        break;
    case "Thursday":
        echo "Today is Thursday";
        break; 
    case "Friday":
        echo "Today is Friday";
        break;
    case "Saturday":
        echo "Today is Saturday";
        break;           
}
?>