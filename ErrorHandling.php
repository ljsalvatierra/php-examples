<!-- EXAMPLE 1 -->
<?php
declare(strict_types=1);

function sum(int $a, int $b) {
    return $a + $b;
}

try {
    var_dump(sum(1, 2));
    var_dump(sum(1.5, 2.5));
} catch (TypeError $e) {
    echo 'Error: '.$e->getMessage();
}
/*
int(3)
Error: Argument 1 passed to sum() must be of the type integer, 
float given, called in - on line 10
*/
?>
<!-- END EXAMPLE 1 -->
