<!-- EXAMPLE 1 -->
<?php
// single quoted vs double quoted -> double (escaped chars, eg.: \n)


$juice = "apple";
echo "He drank some $juice juice.".PHP_EOL; // PHP_EOL -> end of line (doesn't work on browsers)

$juices = array("apple", "orange", "koolaid1" => "purple");
echo "He drank some $juices[0] juice.".PHP_EOL;

$juice = "apple";
$anotherJuice = "strawberry";
$myJuice = $juice.$anotherJuice;
echo "My favorite juice is $myJuice.";
?>

<?php
class people {
    public $john = "John Smith";
    public $jane = "Jane Smith";
    public $robert = "Robert Paulsen";
    
    public $smith = "Smith";
}

$people = new people();
echo "$people->john then said hello to $people->jane.".PHP_EOL;
?>
<!-- END EXAMPLE 1 -->

<!-- EXAMPLE 2 -->
<?php
// Show all errors.
error_reporting(E_ALL);

class beers {
    const softdrink = 'rootbeer';
    public static $ale = 'ipa';
}

$rootbeer = 'A & W';
$ipa = 'Alexander Keith\'s';

// This works; outputs: I'd like an A & W
echo "I'd like an {${beers::softdrink}}\n";

// This works too; outputs: I'd like an Alexander Keith's
echo "I'd like an {${beers::$ale}}\n";
?>
<!-- EXAMPLE 2 -->

<!-- EXAMPLE 3 -->
<?php
// Get the first character of a string
$str = 'This is a test.';
$first = $str[0];

// Get the third character of a string
$third = $str[2];

// Get the last character of a string.
$str = 'This is still a test.';
$last = $str[strlen($str)-1]; 

// Modify the last character of a string
$str = 'Look at the sea';
$str[strlen($str)-1] = 'e';

?>
<!-- END EXAMPLE 3 -->

<!-- EXAMPLE 4 -->
<?php
$foo = 1 + "10.5";                // $foo is float (11.5)
$foo = 1 + "-1.3e3";              // $foo is float (-1299)
$foo = 1 + "bob-1.3e3";           // $foo is integer (1)
$foo = 1 + "bob3";                // $foo is integer (1)
$foo = 1 + "10 Small Pigs";       // $foo is integer (11)
$foo = 4 + "10.2 Little Piggies"; // $foo is float (14.2)
$foo = "10.0 pigs " + 1;          // $foo is float (11)
$foo = "10.0 pigs " + 1.0;        // $foo is float (11)     
?>
<!-- END EXAMPLE 4 -->
