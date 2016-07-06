<?php

/*
* Exception
* ErrorException
* Error
* ArithmeticError
* AssertionError
* DivisionByZeroError
* ParseError
* TypeError
*/

Exception {
    /* Properties */
    protected string $message ;
    protected int $code ;
    protected string $file ;
    protected int $line ;
    
    /* Methods */
    public __construct ([ string $message = "" [, int $code = 0 [, Throwable $previous = NULL ]]] )
    final public string getMessage ( void )
    final public Exception getPrevious ( void )
    final public mixed getCode ( void )
    final public string getFile ( void )
    final public int getLine ( void )
    final public array getTrace ( void )
    final public string getTraceAsString ( void )
    public string __toString ( void )
    final private void __clone ( void )
}
?>

<!-- EXAMPLE 1 -->
<?php
namespace foo;


function inverse($x) {
    if (!$x) {
        throw new \Exception('Division by zero.');
    }
    return 1/$x;
}

try {
    echo inverse(5) . "\n";
    echo inverse(0) . "\n";
} catch (\Exception $e) {
    echo 'Caught exception: ',  $e->getMessage(), "\n";
}

// Continue execution
echo "Hello World\n";

?>
<!-- END EXAMPLE 1 -->
