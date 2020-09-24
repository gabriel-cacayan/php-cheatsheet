# :fire: PHP-Cheatsheet :octocat:

### PHP (recursive acronym for PHP: Hypertext Preprocessor) is a widely-used open source general-purpose scripting language that is especially suited for web development and can be embedded into HTML.

> **Example:** An introductory example
```php
<!DOCTYPE html>
<html>
    <head>
        <title>Example</title>
    </head>
    <body>

        <?php
            echo "Hi, I'm a PHP script!";
        ?>

    </body>
</html>
```


# Table of Contents
- [Introduction](https://github.com/GabrielCode-Full/php-cheatsheet#fire-php-cheatsheet-octocat)
  - [Types of installation](https://github.com/GabrielCode-Full/php-cheatsheet#types-of-installation)
- [Basic Syntax](https://github.com/GabrielCode-Full/php-cheatsheet#basic-syntax)
  - [PHP Tags](https://github.com/GabrielCode-Full/php-cheatsheet#php-tags)
  - [Escaping from HTML](https://github.com/GabrielCode-Full/php-cheatsheet#escaping-from-html)
  - [Instruction separation](https://github.com/GabrielCode-Full/php-cheatsheet#instruction-separation)
- [Variables](https://github.com/GabrielCode-Full/php-cheatsheet#variables)
  - [Predefined Variables](https://github.com/GabrielCode-Full/php-cheatsheet#predefined-variables)
  - [Variable scope](https://github.com/GabrielCode-Full/php-cheatsheet#variable-scope)
  - [Variable variables](https://github.com/GabrielCode-Full/php-cheatsheet#variable-variables)
- [Data Types](https://github.com/GabrielCode-Full/php-cheatsheet#data-types)

### Types of installation
* **LAMP Stack**(Linux, Apache, MySQL, and PHP)
* **MAMP Stack**(Mac, Apache, MySQL, and PHP)
* **WAMP Stack**(Windows, Apache, MySQL, and PHP)
* **XAMPP Stack**(Apache, MariaDB, PHP, and Perl) Recommended.


## Basic Syntax  

### PHP tags 

When PHP parses a file, it looks for opening and closing tags, which are `<?php` and `?>` which tell PHP to start and stop interpreting the code between them. 
```php
// Now php recommended you to use only two tags.

// 1.Standard tag which is 
<?php echo "I'm Standard tag"; ?>

// 2.Short echo tag which is 
<?= "I'm Short echo tag"; ?>
```

If a file contains only PHP code, it is preferable to omit the PHP closing tag at the end of the file. 
```php
<?php
echo "Hello world";

// ... more code

echo "Last statement";

// the script ends here with no PHP closing tag
```

### Escaping from HTML 

Everything outside of a pair of opening and closing tags is ignored by the PHP parser which allows PHP files to have mixed content. This allows PHP to be embedded in HTML documents, for example to create templates.
```php
<p>This is going to be ignored by PHP and displayed by the browser.</p>
<?php echo 'While this is going to be parsed.'; ?>
<p>This will also be ignored by PHP and displayed by the browser.</p>


// Example #1 Advanced escaping using conditions
<?php if ($expression == true): ?>
  This will show if the expression is true.
<?php else: ?>
  Otherwise this will show.
<?php endif; ?>
```
### Instruction separation

The closing tag of a block of PHP code automatically implies a semicolon; you do not need to have a semicolon terminating the last line of a PHP block.
```php
<?php
    echo 'This is a test';
?>

<?php echo 'This is a test' ?>

<?php echo 'We omitted the last closing tag';
```
## Variables

**_Variables_** in PHP are represented by a dollar sign followed by the name of the variable. The variable name is case-sensitive.

> **Important:** it is recommended to use camelcase in declaring variables to avoid errors.
```php
<?php
$var = 'Bob';
$Var = 'Joe';
echo "$var, $Var";      // outputs "Bob, Joe"

$4site = 'not yet';     // invalid; starts with a number
$_4site = 'not yet';    // valid; starts with an underscore
$täyte = 'mansikka';    // valid; 'ä' is (Extended) ASCII 228.
?>

<?php
  // Concatenating String using Double Quotes.
  $firstName = "Mikasa";
  $lastName = "Ackerman";
  echo "$firstName $lastName"; // Mikasa Ackerman
  
  // Concatenating String using dot.
  echo $firstName . " " . $lastName; // Mikasa Ackerman
?>  
```
### Predefined Variables

PHP provides a large number of predefined variables to all scripts. The variables represent everything from external variables to built-in environment variables, last error messages to last retrieved headers.

* **Superglobals** — Superglobals are built-in variables that are always available in all scopes
* **$GLOBALS** — References all variables available in global scope
* **$_SERVER** — Server and execution environment information
* **$_GET** — HTTP GET variables
* **$_POST** — HTTP POST variables
* **$_FILES** — HTTP File Upload variables
* **$_REQUEST** — HTTP Request variables
* **$_SESSION** — Session variables
* **$_ENV** — Environment variables
* **$_COOKIE** — HTTP Cookies
* **$php_errormsg** — The previous error message
* **$HTTP_RAW_POST_DATA** — Raw POST data
* **$http_response_header** — HTTP response headers
* **$argc** — The number of arguments passed to script
* **$argv** — Array of arguments passed to script

### Variable scope

The scope of a variable is the context within which it is defined. For the most part all PHP variables only have a single scope.

* **Local variables:** The variables declared within a function are called local variables to that function and has its scope only in that particular function.
* **Global variables:** The variables declared outside a function are called global variables.
* **Static variable:** It is the characteristic of PHP to delete the variable, ones it completes its execution and the memory is freed. But sometimes we need to store the variables even after the completion of function execution. To do this we use static keyword and the variables are then called as static variables.

## Data Types

PHP supports ten primitive types.

**Four scalar types:** **_boolean_**, **_integer_**, **_float (floating-point number, aka double)_**, & **_string_**.

**Four compound types:** **_array_**, **_object_**, **_callable_**, & **_iterable_**.

**Special types:** **_resource_** and  **_NULL_**.

Data Types | Description
------------ | -------------
`boolean` | A boolean expresses a truth value. It can be either TRUE or FALSE.
`integer` | An integer is a number of the set ℤ = {..., -2, -1, 0, 1, 2, ...}.
`float` | Floating point numbers (also known as "floats", "doubles", or "real numbers") can be specified using any of the following syntaxes:
`string` | A string is series of characters, where a character is the same as a byte. This means that PHP only supports a 256-character set, and hence does not offer native Unicode support. 
`array` | An array in PHP is actually an ordered map. A map is a type that associates values to keys.
`object` |
`callable` |
`iterable` | Iterable is a pseudo-type introduced in PHP 7.1. It accepts any array or object implementing the Traversable interface. Both of these types are iterable using foreach and can be used with yield from within a generator.
`resource` | A resource is a special variable, holding a reference to an external resource. Resources are created and used by special functions.
`NUll` | The special NULL value represents a variable with no value. NULL is the only possible value of type null.


```php
<?php
$a_bool = TRUE;   // a boolean
$a_str  = "foo";  // a string
$an_int = 12;     // an integer
$a_float = 4.1; // a float
$an_arr = ["Gabriel", "Cacayan"]; // an array
$a_null; // a null


echo gettype($a_bool); // prints out:  boolean
echo gettype($a_str);  // prints out:  string
echo gettype($an_int);  // prints out:  interger
echo gettype($a_float); // prints out: double
echo gettype($an_arr); // prints out: array
echo gettype($a_null); // prints out: NULL
```
