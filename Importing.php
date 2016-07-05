<!-- EXAMPLE 1 -->
<?php
/* REQUIRE vs INCLUDE
require is identical to include except upon failure it will also produce a 
fatal E_COMPILE_ERROR level error. In other words, it will halt the script 
whereas include only emits a warning (E_WARNING) which allows the script to continue. 
*/

/* REQUIRE_ONCE vs REQUIRE
will check if the file has already been included, and if so, not include (require) it again
*/

define('__ROOT__', dirname(dirname(__FILE__))); // call dirname the times neccessary
require_once(__ROOT__.'/config.php');
// vs
require_once('/var/www/public_html/config.php');

?>
<!-- END EXAMPLE 1 -->
