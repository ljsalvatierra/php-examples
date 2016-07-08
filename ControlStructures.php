<!-- EXAMPLE 1 -->
<?php
// Looping is also possible with letters
// returns: R S T U V W X Y Z AA AB AC
for($col = 'R'; $col != 'AD'; $col++) {
    echo $col.' ';
}

// Looping through dates
for ($date = strtotime("2014-01-01"); $date < strtotime("2014-02-01"); $date = strtotime("+1 day", $date)) {
    echo date("Y-m-d", $date)."<br />";
}

$people = array(
    array('name' => 'Kalle', 'salt' => 856412),
    array('name' => 'Pierre', 'salt' => 215863)
);
$size = count($people);
for($i = 0; $i < $size; ++$i) { // ++$i better than $i++ performance wise (bit quicker)
    $people[$i]['salt'] = mt_rand(000000, 999999);
}
?>
<!-- END EXAMPLE 1 -->

<!-- EXAMPLE 2 -->
<?php
$arr = array(1, 2, 3, 4);
foreach ($arr as &$value) { // use reference '&' if you're going to change the value
    $value = $value * 2;    // not for echoing
}
// $arr is now array(2, 4, 6, 8)
unset($value); // break the reference with the last element
               // it's recommended to unset if you're goint to use $value later
?>
<!-- END EXAMPLE 2 -->

<!-- EXAMPLE 3 -->
<?php
$array = [
    [1, 2],
    [3, 4],
];

foreach ($array as list($a, $b)) { // you can also ask for fewer elements "as list($a)"
    // $a contains the first element of the nested array,
    // and $b contains the second element.
    echo "A: $a; B: $b\n";
}

$array = ["foo", "bar"];
list(, $value) = each($array); // $elem = foo
list($key) = each($array);   // $key = 0 | 1 if you run both statements
?>
<!-- END EXAMPLE 3 -->

<!-- EXAMPLE 4 -->
<?php
switch ($i) {
    case 0:
        echo "i equals 0";
        break;
    case 1:
        echo "i equals 1";
        break;
    case 2:
        echo "i equals 2";
        break;
    default: // always include "default" case
       echo "i is not equal to 0, 1 or 2";
}
?>
<!-- END EXAMPLE 4 -->

<!-- EXAMPLE 5 -->
<?php

declare(ticks=1);

// A function called on each tick event
function tick_handler()
{
    echo "tick_handler() called\n";
}

register_tick_function('tick_handler');

$a = 1;

if ($a > 0) {
    $a += 2;
    print($a);
}

?>
<!-- END EXAMPLE 5 -->
