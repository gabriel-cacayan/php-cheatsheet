# :fire: PHP-Cheatsheet :octocat:

**PHP** (recursive acronym for PHP: Hypertext Preprocessor) is a widely-used open source general-purpose scripting language that is especially suited for web development and can be embedded into HTML.

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
- [Constants](https://github.com/GabrielCode-Full/php-cheatsheet#constants)
  - [Magic constants](https://github.com/GabrielCode-Full/php-cheatsheet#magic-constants)
- [Data Types](https://github.com/GabrielCode-Full/php-cheatsheet#data-types)
- [Expressions](https://github.com/GabrielCode-Full/php-cheatsheet#expressions)
- [Operators](https://github.com/GabrielCode-Full/php-cheatsheet#operators)
- [Control Structures](https://github.com/GabrielCode-Full/php-cheatsheet#control-structures)
  - [elseif/else if](https://github.com/GabrielCode-Full/php-cheatsheet#elseif-else-if)
  - [ternary operator](https://github.com/GabrielCode-Full/php-cheatsheet#ternary-operator)
  - [switch](https://github.com/GabrielCode-Full/php-cheatsheet#switch)
  - [Alternative syntax for control structures](https://github.com/GabrielCode-Full/php-cheatsheet#alternative-syntax-for-control-structures)
  - [for](https://github.com/GabrielCode-Full/php-cheatsheet#for)
  - [while](https://github.com/GabrielCode-Full/php-cheatsheet#while)
  - [do-while](https://github.com/GabrielCode-Full/php-cheatsheet#do-while)
  - [foreach](https://github.com/GabrielCode-Full/php-cheatsheet#foreach)
  - [break](https://github.com/GabrielCode-Full/php-cheatsheet#break)
  - [continue](https://github.com/GabrielCode-Full/php-cheatsheet#continue)
  - [include](https://github.com/GabrielCode-Full/php-cheatsheet#include)
  - [require](https://github.com/GabrielCode-Full/php-cheatsheet#require)
- [Functions](https://github.com/GabrielCode-Full/php-cheatsheet#functions)
  - [Anonymous functions](https://github.com/GabrielCode-Full/php-cheatsheet#anonymous-functions)
  - [Arrow functions](https://github.com/GabrielCode-Full/php-cheatsheet#arrow-functions)
  - [Internal (built-in) functions](https://github.com/GabrielCode-Full/php-cheatsheet#internal-built-in-functions)
    - [Variable handling](https://github.com/GabrielCode-Full/php-cheatsheet#variable-handling)



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

//1.Standard tag which is 

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

PHP provides a large number of **_predefined variables_** to all scripts. The variables represent everything from external variables to built-in environment variables, last error messages to last retrieved headers.

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

#### Local variables: The variables declared within a function are called _local variables_ to that function and has its scope only in that particular function.

```php
<?php
 function localVariable() {
    $greetings = "I am a local variable";
    return $greetings;
}

echo localVariable(); // I am a local variable
```
#### Global variables: The variables declared outside a function are called _global variables_.

```php
    global $greetings;
    $greetings= "I am a global variable";

  function globalVariable() {
    global $greetings;
    return $greetings;
}

echo globalVariable(); // I am a global variable
```

#### Static variable: It is the characteristic of PHP to delete the variable, ones it completes its execution and the memory is freed. But sometimes we need to store the variables even after the completion of function execution. To do this we use static keyword and the variables are then called as _static variables_.

```php
  function staticKeyword() {
   static $count = 1;
    echo $count . "<br>";
    $count = $count + 1;

  }
staticKeyword();
```

### Variable variables

Sometimes it is convenient to be able to have variable variable names. That is, a variable name which can be set and used dynamically. A normal variable is set with a statement such as:

```php
$name = "Gabriel Cacayan";
$fullName = "name";

echo $fullName . "<br>"; // name
echo $$fullName; // Gabriel Cacayan
```


## Constants

A **_constant_** is an identifier (name) for a simple value. As the name suggests, that value cannot change during the execution of the script (except for magic constants, which aren't actually constants). A constant is case-sensitive by default. By convention, constant identifiers are always uppercase.

```php
<?php

// Valid constant names
define("FOO",     "something");
define("FOO2",    "something else");
define("FOO_BAR", "something more");

// Invalid constant names
define("2FOO",    "something");

// This is valid, but should be avoided:
// PHP may one day provide a magical constant
// that will break your script
define("__FOO__", "something"); 

?>
```

### Magic constants

There are nine **_magical constants_** that change depending on where they are used. For example, the value of __LINE__ depends on the line that it's used on in your script. All these "magical" constants are resolved at compile time, unlike regular constants, which are resolved at runtime. These special constants are case-insensitive and are as follows:


Magic constants | Description
------------ | -------------
`__LINE__`  | The current line number of the file.
`__FILE__`  | The full path and filename of the file with symlinks resolved. If used inside an include, the name of the included file is returned.
`__DIR__` | The directory of the file. If used inside an include, the directory of the included file is returned. This is equivalent to dirname(__FILE__). This directory name does not have a trailing slash unless it is the root directory.
`__FUNCTION__`  | The function name, or {closure} for anonymous functions.
`__CLASS__`  | The class name. The class name includes the namespace it was declared in (e.g. Foo\Bar). Note that as of PHP 5.4 
`__CLASS__` | works also in traits. When used in a trait method, __CLASS__ is the name of the class the trait is used in.
`__TRAIT__` | The trait name. The trait name includes the namespace it was declared in (e.g. Foo\Bar).
`__METHOD__`  | The class method name.
`__NAMESPACE__`  | The name of the current namespace.

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

## Expressions

**_Expressions_** are evaluated into a result value or final value or single value. The simplest yet most accurate way to define an expression is "anything that has a value".

```php
$a = 5;
$b = 10;

$total = $a + $b;
echo $total; // 15
```

## Operators

Arithmetic | Assignment | Comparison | Logical |
------------ | ------------- | ------------- |  -------------
Addition `+`| Addition assignment `+=` | Equal `==` | And `and`
Subtraction `-`| Subtraction assignment `-=` | Identical `===` | Or `or`
Multiplication `*`| Multiplication assignment `*=` | Not equal `!=` | Xor `xor`
Division `/`| Division assigment`/=` | Not equal `<>` | Not `!`
Modulo `%`| Modulo assignment `%=` | Not identical `!==` | And `&&`
Exponentiation `**`| String Concatenation `.=` | Less than `<` | Or `ll`
Negation `-`|  Null Coalesce `??=` | Greater than `>` |
| Bitwise And `&=` | Less than or equal to `<=` | 
| Bitwise Or `l=` | Greater than or equal to `>=` |
| Bitwise Xor `^=` | Spaceship `<=>` |
| Left Shift `<<=` | 
| Right Shift `>>=` |


> **Note:** The pipe symbol `|` is replaced by letter `l` to avoid bug in the table. 

## Control Structures

### elseif/else if

```php
<?php

  $a = 5;
  $b = 10;

  if ($a > $b) {
  echo "a is bigger than b";
} else if ($a < $b) {
  echo "b is bigger than a";
}  else {
  echo "Invalid Input!";
}
  
?>
```

### ternary operator

```php
<?php
 $a = 5;
 $b = 10;

echo $a > $b ? "a is greater than b": "b is greater than a";

?>
```

### switch

```php
<?php

  switch ($i) {
    case 0:
        echo "i equals 0";
        break;
    case 1:
        echo "i equals 1";
        break;
    case 2:
        echo "i equals 2";
        break;
}

?>
```

### Alternative syntax for control structures

PHP offers an alternative syntax for some of its control structures; namely, if, while, for, foreach, and switch. In each case, the basic form of the alternate syntax is to change the opening brace to a colon (:) and the closing brace to endif;, endwhile;, endfor;, endforeach;, or endswitch;, respectively.

```php
<?php

  if ($a == 5):
      echo "a equals 5";
      echo "...";
  elseif ($a == 6):
      echo "a equals 6";
      echo "!!!";
  else:
      echo "a is neither 5 nor 6";
  endif;
 
 // Output: a is neither 5 nor 6

?>
```

### for

```php
<?php

for ($a = 0; $a < 5; $a++) {
  
  echo $a . "<br>"; 
}
  /*
    0
    1
    2
    3
    4
  */
?>
```

### while

```php
<?php

  $a = 0;

while($a < 5){
  echo $a . "<br>";
  $a++;
}
  /*
    0
    1
    2
    3
    4
  */
?>
```

### do-while

```php
<?php

  $a = 0;
    
  do {
    echo $a . "<br>";
    $a++;
} while ($a < 5);
  /*
    0
    1
    2
    3
    4
  */
?>
```

### foreach 

```php
<?php
  $arr = [1,2,3,4,5];


foreach($arr as $value){
  echo $value; 

}
 // Output: 12345
?> 
```

### break

```php
<?php
    for ($i = 0; $i < 5; $i++) {
      if ($i === 3) {
         break;
       }
       echo $i . "<br>";
    }

  /*
    0
    1
    2
  */
?>
```

### continue

```php
<?php
    for ($i = 0; $i < 5; $i++) {
  if ($i === 2) {
      continue;
    }
  echo $i . "<br>";
}
  /*
      0
      1
      2
      4
  */
?>
```

### include

```php
<!DOCTYPE html>
<html>
    <head>
        <title>Example</title>
    </head>
    <body>
        /* 
            1.) Including navbar file 
            2.) Error message will occured when there is no file but, 
            only for navbar.
        */
        <?php include "navbar.php"; ?>
        <?php
            echo "Hi, I'm a PHP script!";
        ?>

    </body>
</html>
```

### require

```php
<!DOCTYPE html>
<html>
    <head>
        <title>Example</title>
    </head>
    <body>
         /* 
            1.) Including navbar file 
            2.) Error message will occured when there is no file for whole page. 
        */
        <?php require "navbar.php"; ?>
        <?php
            echo "Hi, I'm a PHP script!";
        ?>

    </body>
</html>
```

## Functions

function with default arguments.

```php
<?php
  
     function add($a = 0, $b = 0) {
      return $a + $b;
    }


  echo add(10,5); // 15
  echo add(); // 0

?>
```

### Anonymous functions

**_Anonymous functions_**, also known as **closures**, allow the creation of functions which have no specified name. They are most useful as the value of callback parameters, but they have many other uses.

```php
<?php
  
  $add = function($a = 0, $b = 0) {
      return $a + $b;
    };


echo $add(10,5);  // 15
?>
```

```php
<?php
  //global variable
  $ten = 10;

  $add = function($a) use ($ten){
        return $a + $ten;
      };


  echo $add(10); // 20  

?>
```

### Arrow Functions

Arrow functions were introduced in PHP 7.4 as a more concise syntax for anonymous functions.

```php
<?php

   $fn = fn($x, $y) => $x + $y;
 
  echo $fn(10,5); // 15

?>
```

### Internal (built-in) functions

#### Variable handling 

Name | Description 
------------ | ------------- 
`empty` | Determine whether a variable is empty
`ettype` | Get the type of a variable
`is_array` | Finds whether a variable is an array
`is_bool`| Finds out whether a variable is a boolean
`is_double` | Alias of is_float
`is_float` | Finds whether the type of a variable is float
`is_int` | Find whether the type of a variable is integer
`is_integer` | Alias of is_int
`is_long` | Alias of is_int
`is_null` | Finds whether a variable is NULL
`is_numeric` | Finds whether a variable is a number or a numeric string
`is_object` | Finds whether a variable is an object
`is_real` | Alias of is_float
`is_scalar` | Finds whether a variable is a scalar
`is_string` | Find whether the type of a variable is string
`isset` | Determine if a variable is declared and is different than NULL
`print_r` | Prints human-readable information about a variable
`settype` | Set the type of a variable
`unset` | Unset a given variable
`var_dump` | Dumps information about a variable