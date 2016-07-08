# [Security](http://php.net/manual/en/security.php)

## Installed as CGI binary

* Using PHP as a CGI binary is an option for setups that for some reason do not wish to integrate PHP as a module into server software (like Apache).
* Accessing system files. Usually interpreters open and execute the file specified as the first argument on the command line.
* Accessing any web document on server.
* The configuration directive **cgi.force_redirect** prevents anyone from 
calling PHP directly with a URL like http://my.host/cgi-bin/php/secretdir/script.php. Instead, PHP will only parse in this mode if it has gone through a web server redirect rule.
    * Apache configuration
    ```
    Action php-script /cgi-bin/php
    AddHandler php-script .php
    ```
    ```
    Note:

    Windows Users: When using IIS this option must be turned off. 
    For OmniHTTPD or Xitami the same applies.
    ```
* Setting *doc_root*. setting up another directory structure for scripts that are accessible only through the PHP CGI, and therefore always interpreted and not displayed as such. You can set the PHP script document root by the configuration directive *doc_root* in the configuration file, or you can set the environment variable *PHP_DOCUMENT_ROOT*.
* Opening a URL like http://my.host/~user/doc.php does not result in opening a file under users home directory, but a file called ~user/doc.php under *doc_root*. If *user_dir* is set to for example *public_php*, the file executed is */home/user/public_php/doc.php*.

## Installed as an Apache module

* ...*open_basedir*

## Filesystem

```php
<?php
$username     = $_SERVER['REMOTE_USER']; // using an authentication mechanisim
$userfile     = $_POST['user_submitted_filename'];
$homedir      = "/home/$username";

$filepath     = "$homedir/$userfile";

if (!ctype_alnum($username) || !preg_match('/^(?:[a-z0-9_-]|\.(?!\.))+$/iD', $userfile)) {
    die("Bad username/filename");
}

if (file_exists($filepath) && unlink($filepath)) {
    $logstring = "Deleted $filepath\n";
} else {
    $logstring = "Failed to delete $filepath\n";
}
$fp = fopen("/home/logging/filedelete.log", "a");
fwrite($fp, $logstring);
fclose($fp);

echo htmlentities($logstring, ENT_QUOTES);
?>
```

## Database security

* Connecting to DB: SSL/SSH
* Encrypted Storage Model
    * Hashing
    ```php

<?php

// storing password hash
$stmt = $dbh->prepare("INSERT INTO users (name, value) VALUES (:name, :value)");
stmt->bindParam(':name', $name);
stmt->bindParam(':value', $value);

$name = $username;
$value = password_hash($password, PASSWORD_DEFAULT));

if (!is_object($stmt)) {
    die();
}
$stmt->execute();


// querying if user submitted the right password
$stmt2 = $dbh->prepare("SELECT pwd FROM users WHERE name = :name");
$stmt2->bindParam(':name', $name);

if (!is_object($stmt)) {
    die();
}

if ($stmt2->execute()) {
    $row = $stmt2->fetch();
    if ($row && password_verify($password, $row['pwd'])) {
        echo 'Welcome, ' . htmlspecialchars($username) . '!';
    } else {
        echo 'Authentication failed for ' . htmlspecialchars($username);
    }
}

?>
    ```

### Avoidance Techniques

* Never connect to the database as a superuser or as the database owner. Use always customized users with very limited privileges.
* Use prepared statements with bound variables. They are provided by PDO, by MySQLi and by other libraries.
* Check if the given input has the expected data type. PHP has a wide range of input validating functions, from the simplest ones found in Variable Functions and in Character Type Functions (e.g. *is_numeric(), ctype_digit()* respectively) and onwards to the Perl compatible Regular Expressions support.

* If the application waits for numerical input, consider verifying data with *ctype_digit()*, or silently change its type using settype(), or use its numeric representation by sprintf().

## Error reporting

* Prior to deployment, test the code with **E_ALL** and find areas where variables may be open to poisoning or modification.
* Once ready for deployment, disable all error reporting by setting *error_reporting()* to *0*, or turn off error display using the *php.ini* option *display_errors*.
    * You should also define the path to your log file using the *error_log* ini directive, and turn *log_errors* *on*.

## Security by obscurity

* Turn off *expose_php* option in *php.ini*

## To have in mind

* HTTP authentication with PHP.
    * *PHP_AUTH_USER* and *header()*.
* Cookies.
    * *setcookie(...)*.
* Sessions.
* Handling file uploads.
    * Check *$_FILES* structure and values. [(link)](http://php.net/manual/en/features.file-upload.php#114004)
    * *$_FILES['userfile'][<'name','type','size','tmp_name','error'>]*

* Connection handling.
    * Connection status: 0-NORMAL, 1-ABORTED, 2-TIMEOUT(30s), 3-ABORTED and TIMEOUT.
    * *php.ini*: *ignore_user_abort*, *max_execution_time*.
* Persistent Database Connections.
