<!-- EXAMPLE 1 -->
<?php
// Check the user browser info
if (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== FALSE) {
?>
<h3>strpos() must have returned non-false</h3>
<p>You are using Internet Explorer</p>
<?php
} else {
?>
<h3>strpos() must have returned false</h3>
<p>You are not using Internet Explorer</p>
<?php
}
?>
<!-- END EXAMPLE 1 -->

<!-- EXAMPLE 2 -->
<!--
<form action="action.php" method="post">
 <p>Your name: <input type="text" name="name" /></p>
 <p>Your age: <input type="text" name="age" /></p>
 <p><input type="submit" /></p>
</form>
-->

Hi 
<?php 
// htmlspecialchars VS htmlentities
echo htmlspecialchars($_POST['name']); 
?>.

Hi 
<?php 
echo htmlentities($_POST['name']); 
?>.
<!-- END EXAMPLE 2 -->

<!-- EXAMPLE 3 -->

<?php
$a_bool = TRUE;   // a boolean
$a_str  = "foo";  // a string
$a_str2 = 'foo';  // a string
$an_int = 12;     // an integer

echo gettype($a_bool); // prints out:  boolean
echo gettype($a_str);  // prints out:  string

// If this is an integer, increment it by four
if (is_int($an_int)) {
    $an_int += 4;
}

// If $a_bool is a string, print it out
// (does not print out anything)
if (is_string($a_bool)) {
    echo "String: $a_bool";
}
?>

<?php
$a = 1234; // decimal number
$a = -123; // a negative number
$a = 0123; // octal number (equivalent to 83 decimal)
$a = 0x1A; // hexadecimal number (equivalent to 26 decimal)
$a = 0b11111111; // binary number (equivalent to 255 decimal)
?>

<?php
var_dump(25/7);         // float(3.5714285714286)
var_dump((int) (25/7)); // int(3)
var_dump(round(25/7));  // float(4)
?>

<?php
echo intval( (0.1+0.7) * 10.0 ); // echoes 7
echo ", ";
echo (int) ( (0.1+0.7) * 10); // echoes 7
?>

<?php
/* To test floating point values for equality, an upper bound on the 
relative error due to rounding is used. This value is known as the 
machine epsilon, or unit roundoff, and is the smallest acceptable 
difference in calculations. */
$a = 1.23456789;
$b = 1.23456780;
$epsilon = 0.00001;

if(abs($a-$b) < $epsilon) {
    echo "true";
}
?>

<!-- END EXAMPLE 3 -->

<!-- ERRORS -->
<?php
// Show all errors
error_reporting(E_ALL);
?>
<!-- END ERRORS -->

<!-- PHP INFO -->
<?php
// Apache2 server install info
phpinfo();
?>
<!-- END PHP INFO -->

