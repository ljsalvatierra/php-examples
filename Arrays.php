<!-- EXAMPLE 1 -->
<?php
// no keys
$array = array("foo", "bar", "hello", "world");
$numElem = count($array);
var_dump($array);
print_r($array);

// key => value
// The key can either be an integer or a string. The value can be of any type.
$array = [
    "foo" => "bar",
    "bar" => "foo",
    3 => "pub",
    -100 => 45,
];
var_dump($array);

// mixed
$array = array("foo", "bar" => "foo bar", "hello", "world");
var_dump($array["bar"]); // string(7) "foo bar"
var_dump($array{"bar"}); // string(7) "foo bar"
?>
<!-- END EXAMPLE 1 -->

<!-- EXAMPLE 2 -->
<?php
function getArray() {
    return array(1, 2, 3);
}

// on PHP 5.4+
$secondElement = getArray()[1];
?>


<?php
$arr = array(5 => 1, 12 => 2);

$arr[] = 56;    // This is the same as $arr[13] = 56;
                // at this point of the script

$arr["x"] = 42; // This adds a new element to
                // the array with key "x"

// unset - Be aware that the array will not be reindexed
// use array_values()                
unset($arr[5]); // This removes the element from the array

// $b is indexed "correctly"
// var_dump -> array(1) { [0]=> int(2) }
$b = array_values($arr);

unset($arr);    // This deletes the whole array
?>

<!-- END EXAMPLE 2 -->

<!-- EXAMPLE 3 -->
<?php
$arr = array('fruit' => 'apple', 'veggie' => 'carrot');
print "Hello {$arr['fruit']}\n";
//print "Hello $arr['fruit']"; // error
print "Hello " . $arr['fruit'] . "\n";
?>

<?php
$b = array();
$b[] = 'a';
$b[] = 'b';
$b[] = 'c';
// array(0 => 'a', 1 => 'b', 2 => 'c')
?>
<!-- END EXAMPLE 3 -->
