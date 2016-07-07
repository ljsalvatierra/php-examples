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
* **APC** - Alternative PHP Cache.
    * APCu - APC stripped of opcode caching.
* **APD** (*Zend Extension*) - Advanced PHP Debugger.
    * Can be turn on or off for individual scripts.
* **BLENC** (*Experimental*) - PHP source script protector.
* **Error Handling Functions**.
    * *set_error_handler*.
* **Inclued** - Traces through and dumps the hierarchy of file inclusions and class inheritance at runtime. (include, require, ...)
* **Memtrack** (*Experimental*) - Detects the most memory hungry scripts and functions.
* **OPcache** (*Bundled with PHP 5.5.0*) - Improves PHP performance by storing precompiled script bytecode in shared memory.
* **Output Control** - Allows you to control when output is sent from the script.
    * OC functions do not affect headers sent using *header()* or *setcookie()*.
```php
<?php

ob_start();
echo "Hello\n";

setcookie("cookiename", "cookiedata");

ob_end_flush();

?>
```
* **phpinfo()**
* **Scream** - Gives the possibility to disable the silencing *error control operator* so all errors are being reported.
* **Windows Cache Extension** - PHP accelerator that is used to increase the speed of PHP applications running on Windows and Windows Server.
    * *PHP Opcode Cache, File Cache, Resolve File Path Cache, User Cache and Session Handler*.
* **XHProf** - light-weight hierarchical and instrumentation based profiler.
    * *Metrics*:
        * Wall (elapsed) time.
        * CPU and Memory usage.
        * ...

## Compression and Archive Extensions

* **Bzip2**
* **LZF**
* **Phar** - Provides a way to put entire PHP applications into a single file called a *phar* for easy distribution and installation.
    * Also provides a file-format abstraction method for creating and manipulating *tar* and *zip* files through the **PharData** class.
    ```php
    <?php
    include 'phar:///path/to/myphar.phar/file.php';
    ?>
    ```
* **Rar**
* **Zip**
* **Zlib** (*gzip .gz*)

## Credit Card Processing

* **MCVE** - Monetra Payment
* **SPPLUS** - Payment System

## Cryptography Extensions

* **Crack** (*No bundled with PHP 5.0.0+*) - Test the *strength* of a password.
* **CSPRNG** (*PHP 7.0.0+*) - Crypto-strong random integers and bytes generator.
* **Hash**
* **Mcrypt** (*deprecated??*)
* **OpenSSL**
* **Password Hashing** (*PHP 5.5.0+*)

## Database Extensions

### Abstraction Layers

* **dbx**
* **ODBC**
* **PDO** - PHP Data Objects defines a lightweight, consistent interface for accessing databases in PHP. You must use a *database-specific PDP driver* to access a database server.
    * Provides a data-access abstraction layer, which means that, regardless of which database you're using, you use the same functions to issue queries and fetch data.

### Vendor Specific Database Extensions

* **dBase**
* **MongoDB**
* **MySQL**
* **PostgreSQL**
* **SQLite**, **SQLite3**

### Date and Time Related Extensions

* **Calendar**
* **Date/Time**
* **HRTime** - Implements a high resolution StopWatch class.

### File System Related Extensions

* **Direct IO** (*POSIX*) - For performing I/O functions at a lower level that *C*.
* **Directory Functions** - chdir, chroot, closedir, ...

### Human Language and Character Encoding Support

* **Enchant**
* **FriBiDi**
* **Gender**
* **Gettext** - Implements an Native Language Support (NLS) API which can be used to internationalize your PHP applications.
* **iconv** - This extension comes with various utility functions that help you write multilingual scripts.
    * On some systems may not work as expected -> install *GNU libiconv* library
* **intl** - Internationalization extension (intl) is a wrapper for *ICU* library.
    * *Modules*:
        * Calendar, Collator, Date formatter, Locale, Message formatter, Normalizer, Number formatter, Transliterator.
* **Multibyte String** - Provides functions to work with characters that cannot be contained within the range a mere byte can code. Multibyte character encoding schemes were developed to express more than 256 characters in the regular bytewise coding system.
* **Pspell** - Allows you to check the spelling of a word and offer suggestions.
* **Recode** (*not available on Windows platforms*).

### Mail Related Extensions

* **Cyrus** (*not available on Windows platforms*).
* **IMAP** - IMAP, NNTP, POP3 and local mailbox access methods.
    * [Functions](http://php.net/manual/en/ref.imap.php).
* **Mail** - Allows you to send mail.
* **Mailparse** - Extension for parsing and working with email messages. *Stream based*, which means that it does not keep in-memory copies of the files it processes, so it is very resource efficient when dealing with large messages.
* **vpopmail** (*Experimental*)

### Mathematical Extensions

* **BC Math** - Offers the Binary Calculator which supports numbers of any size and precision, represented as strings.
* **GMP** 
* **Lapack** (*Fortran 90*) - Provides routines for solving systems of simultaneous linear equations, least-squares solutions of linear systems of equations, eigenvalue problems, and singular value problems.
* **Math**
* **Statistics**
* **Trader**

### Non-Text MIME Output

* **FDF**
* **GnuPG**
* **haru** (*Experimental*) - libHaru is a free, cross platform, and Open Source library for generating PDF files.
* **Ming** (*flash*)
* **PDF** (*non-free*)
    * (*free*) FPDF and TCPDF
* **PS**
* **RPM Reader**

### Process Control Extensions

* **POSIX, phthreads, Semaphore, Shared Memory, Sync, ...**

### Other Basic Extensions

* **GeoIP**
* **JSON**
* **Lua**
* **Parsekit** - Allow runtime analysis of opcodes compiled from PHP scripts.
* **Streams**
* **Tokenizer** (*Embedded in Zend Engine*)
* **URLs**
* **V8js** - V8 Javascript Engine Integration
* **YAML**
* **Yaf** - Yet Another Framework extension is a PHP framework that is used to develop web applications.
* **Taint** - Extension for detecting XSS codes (tainted string). And also can be used to spot sql injection vulnerabilities, shell inject, etc.

### Other Services

* **CHDB** - Constant hash database is a fast key-value database for constant data.
* **cURL**
* **Event** - Extension to efficiently schedule I/O, time and signal based events using the best I/O notification mechanism available for specific platform.
* **FAM** - Monitors files and directories, notifying interested applications changes.
* **FTP**
* **Gearman** - Generic application framework for farming out work to multiple machines or processes. It allows applications to complete tasks in parallel, to load balance processing, and to call functions between languages.
* **LDAP**
* **Memcache** - Designed to decrease database load in dynamic web applications.
* **Memcached** - High-performance, distributed memory object caching system, intended for use in speeding up dynamic web applications by alleviating database load.
* **Socket**
* **SSH2**
* **SVN** (*Experimental*)
* **TCP**
* **Varnish Cache**
* **NIS** (*Not available on Windows platforms*) - Allows network management of important administrative files.

### Search Engine Extensions

* **mnoGoSearch** (*Not available on Windows platforms*) - Full-featured search engine software for intranet and internet servers.
* **Sphinx** - Standalone search engine meant to provide fast, size-efficient and relevant fulltext search functions to other applications. Specially designed to integrate well with SQL databases and scripting languages.

### Server Specific Extensions

* **Apache** - Functions only available when running PHP as an Apache module.
    * *Functions*: *apache_child_terminate*, *apache_request_headers*, etc.
* **FPM** - FastCGI Process Manager is an alternative PHP FastCGI implementation, useful for heavy-loaded sites.
* **IIS** (*Available for Win32 only*) - The extension includes function to create web sites and virtual directories as well as configuring security and script mapping.

### Session Extensions

* **Msession** (*Not available on Windows platforms*) - Interface to a high speed session daemon which can run either locally or remotly. It's designed to provide consistent session management for a PHP web farm.
* **Sessions**

### Text Processing

* **BBCode**
* **PCRE** - Set of functions that implement regular expression pattern matching using the same syntax and semantics as Perl 5.
* **ssdeep** - Utility for creating and comparing fuzzy hashes.
* **Strings** - *strcmp*, *strlen*, ...

### Variable and Type Related Extensions

* **Filter** - This extension filters data by either validating or sanitizing it, specially useful when the data source contains unknown (or foreign) data, like user supplied input.
    * There're two main types of filtering: validation and sanitization.
    ```php        
<?php
$a = 'joe@example.org';
$b = 'bogus - at - example dot org';
$c = '(bogus@example.org)';

$sanitized_a = filter_var($a, FILTER_SANITIZE_EMAIL);
if (filter_var($sanitized_a, FILTER_VALIDATE_EMAIL)) {
    echo "This (a) sanitized email address is considered valid.\n";
}

$sanitized_b = filter_var($b, FILTER_SANITIZE_EMAIL);
if (filter_var($sanitized_b, FILTER_VALIDATE_EMAIL)) {
    echo "This sanitized email address is considered valid.";
} else {
    echo "This (b) sanitized email address is considered invalid.\n";
}

$sanitized_c = filter_var($c, FILTER_SANITIZE_EMAIL);
if (filter_var($sanitized_c, FILTER_VALIDATE_EMAIL)) {
    echo "This (c) sanitized email address is considered valid.\n";
    echo "Before: $c\n";
    echo "After:  $sanitized_c\n";    
}
?>
    ```
* **Function Handling**
* **Quickhash** - Set of specific strongly-typed classes to deal with specific set and hash implementations.
* **Reflection** - PHP 5 comes with a complete reflection API that adds the ability to *reverse-engineer* classes, interfaces, functions, methods and extensions.
* **Variable handling**

### Web Services

* **OAuth** - Authorization protocol built on top of HTTP.
* **SOAP** - Simple Object Access Protocol is a protocol specification for exchanging structured information in the implementation of web services.
* **Yar** - Yet Another RPC framework aims to provide a simple and easy way to do communication between PHP applications.

### XML Manipulation

* **DOM**
* **libxml**
* **SimpleXML**
* **XMLDiff**
* **XMLParser**
* **XMLReader**
* **XMLWriter**
