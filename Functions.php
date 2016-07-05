<!-- EXAMPLE 1 -->
<?php
function makecoffee($type = "cappuccino") //any defaults should be on the right side of any non-default arguments
{
    return "Making a cup of $type.\n";
}


echo makecoffee(); // "cappuccino"
echo makecoffee(null); // ""
echo makecoffee("espresso"); // "espresso"
?>
<!-- END EXAMPLE 1 -->

<!-- EXAMPLE 2 -->
<?php
function add_some_extra(&$string)
{
    $string .= 'and something extra.';
}


$str = 'This is a string, ';
add_some_extra($str);
echo $str;    // outputs 'This is a string, and something extra.'
?>
<!-- END EXAMPLE 2 -->

<!-- EXAMPLE 3 -->
<?php
interface I { public function g(); }
class H implements I { public function g() {} }
class C {}
class D extends C {}

// This doesn't extend C.
class E {}


function f(C $c) { //
    echo get_class($c)."\n";
}


function g(I $i) {
    echo get_class($i)."\n";
}


f(new C);
f(new D);
f(new E);
g(new E);
g(new H);
/*
C
D

Fatal error: Uncaught TypeError: Argument 1 passed to f() must be an 
instance of C, instance of E given, called in - on line 14 and defined in -:8
Stack trace:
#0 -(14): f(Object(E))
#1 {main}
  thrown in - on line 8

Fatal error: Uncaught TypeError: Argument 1 passed to f() must implement 
interface I, instance of E given, called in - on line 13 and defined in -:8
Stack trace:
#0 -(13): f(Object(E))
#1 {main}
  thrown in - on line 8

H
*/
?>
<!-- END EXAMPLE 3 -->

<!-- EXAMPLE 4 -->
<?php
function sum(...$numbers) { // PHP 5.6+ - variable number of parameters
    $acc = 0;               // it's also possible to use Type Hints. (int ...$numbers)
    foreach ($numbers as $n) { // use func_get_args() with PHP 5.5-
        $acc += $n;
    }
    return $acc;
}

echo sum(1, 2, 3, 4);
?>

<?php
function add($a, $b) {
    return $a + $b;
}

echo add(...[1, 2])."\n";

$a = [1, 2];
echo add(...$a);
?>
<!-- END EXAMPLE 4 -->

<!-- EXAMPLE 5 -->
<?php
function small_numbers()
{
    return array (0, 1, 2);
}
list ($zero, $one, $two) = small_numbers();
?>

<?php
function &returns_reference() // use the reference operator & in both the function 
                              // declaration and when assigning the returned value to a variable
{
    return $someref;
}

$newref =& returns_reference();
?>

<?php
function foo() {
    echo "In foo()<br />\n";
}

$func = 'foo';
$func();        // This calls foo()
?>
<!-- END EXAMPLE 5 -->

<!-- EXAMPLE 6 -->
<?php
class Foo
{
    static function bar()
    {
        echo "bar\n";
    }
    function baz()
    {
        echo "baz\n";
    }
}

$func = array("Foo", "bar");
$func(); // prints "bar"
$func = array(new Foo, "baz");
$func(); // prints "baz"
$func = "Foo::bar";
$func(); // prints "bar" as of PHP 7.0.0; prior, it raised a fatal error
?>
<!-- END EXAMPLE 6 -->
