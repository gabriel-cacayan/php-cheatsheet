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

1.Standard tag which is <?php echo "I'm Standard tag"; ?>
2.Short echo tag which is <?= "I'm Short echo tag"; ?>
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
### Variables

**_Variables_** declaration should start with `$` follow by `_` or alphabet.

> **Important:** it is recommended to use camelcase in declaring variables to avoid errors.
```php
<?php
  // Concatenating String using Double Quotes.
  $firstName = "Mikasa";
  $lastName = "Ackerman";
  echo "$firstName $lastName"; // Mikasa Ackerman
  
  // Concatenating String using dot.
  echo $firstName . " " . $lastName; // Mikasa Ackerman
?>  
```

## Data Types

PHP supports ten primitive types.

**Four scalar types:** **_boolean_**, **_integer_**, **_float (floating-point number, aka double)_**, & **_string_**.

**Four compound types:** **_array_**, **_object_**, **_callable_**, & **_iterable_**.

**Special types:** **_resource_** and  **_NULL_**.
```php
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
```
