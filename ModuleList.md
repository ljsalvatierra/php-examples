# Module list
# Ubuntu 16.04
# php7.0
#
php-auth
php-auth-sasl
php-cache-litle
php-cas
php-crypt-gpg
php-email-validator
php-fshl
php-gnupg
php-imap
php-json
php-mail
php-markdown
php-oauth
php-pdfparser
php7.0-{imap,json,ldap,mcrypt,mysql,odbc,pgsql,phpdbg,sqlite3,xml}
#
#Unknown libraries
php-horde-XXXX
php-net-XXXX
php-pear
php-symfony-XXXX
phpunit

# Function Reference

## Affecting PHP's Behaviour
* APC - Alternative PHP Cache.
    * APCu - APC stripped of opcode caching.
* APD (Zend Extension) - Advanced PHP Debugger.
    * Can be turn on or off for individual scripts.
* BLENC (Experimental) - PHP source script protector.
* Error Handling Functions.
    * *set_error_handler*.
* Inclued - Traces through and dumps the hierarchy of file inclusions and class inheritance at runtime. (include, require, ...)
* Memtrack (Experimental) - Detects the most memory hungry scripts and functions.
* OPcache (Bundled with PHP 5.5.0) - Improves PHP performance by storing precompiled script bytecode in shared memory.
* Output Control - Allows you to control when output is sent from the script.
    * OC functions do not affect headers sent using *header()* or *setcookie()*.
```php
<?php

ob_start();
echo "Hello\n";

setcookie("cookiename", "cookiedata");

ob_end_flush();

?>
```
* *phpinfo()*
* Scream - Gives the possibility to disable the silencing *error control operator* so all errors are being reported.
* Windows Cache Extension - PHP accelerator that is used to increase the speed of PHP applications running on Windows and Windows Server.
    * *PHP Opcode Cache, File Cache, Resolve File Path Cache, User Cache and Session Handler*.
* XHProf - light-weight hierarchical and instrumentation based profiler.
    * Metrics:
        * Wall (elapsed) time.
        * CPU and Memory usage.
        * ...

