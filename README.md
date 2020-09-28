# :fire: PHP-Cheatsheet :octocat:

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
    - [String Functions](https://github.com/GabrielCode-Full/php-cheatsheet#string-functions)
    - [Array Functions](https://github.com/GabrielCode-Full/php-cheatsheet#array-functions)


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

### Types of installation
* **LAMP Stack**(Linux, Apache, MySQL, and PHP)
* **MAMP Stack**(Mac, Apache, MySQL, and PHP)
* **WAMP Stack**(Windows, Apache, MySQL, and PHP)
* **XAMPP Stack**(Apache, MariaDB, PHP, and Perl) Recommended.


## Basic Syntax  

### PHP tags 

When PHP parses a file, it looks for opening and closing tags, which are `<?php` and `?>` which tell PHP to start and stop interpreting the code between them.

```php
  <?php echo "I'm Standard tag"; ?>

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
<?php
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
<?php
  // Without static keyword
  function staticKeyword() {
      $count = 1;
      echo $count . "<br>";
      $count = $count + 1;

  }

  staticKeyword(); // 1
  staticKeyword(); // 1
  staticKeyword(); // 1
  staticKeyword(); // 1
  staticKeyword(); // 1

  // With static keyword
  function staticKeyword() {
     static $count = 1;
      echo $count . "<br>";
      $count = $count + 1;

  }

  staticKeyword(); // 1
  staticKeyword(); // 2
  staticKeyword(); // 3
  staticKeyword(); // 4
  staticKeyword(); // 5
```

### Variable variables

Sometimes it is convenient to be able to have variable variable names. That is, a variable name which can be set and used dynamically. A normal variable is set with a statement such as:

```php
<?php
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
<?php
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
```

### for

```php
<?php

  for ($a = 0; $a < 5; $a++) {
    
    echo $a . "<br>"; 
  }
 
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
 
?>
```

### foreach 

```php
<?php

  $arr = [1,2,3,4,5];


  foreach($arr as $value){
    echo $value; 

  }

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
```

### Internal (built-in) functions

#### Variable handling 

Name | Description 
------------ | ------------- 
`empty` | Determine whether a variable is empty
`gettype` | Get the type of a variable
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

[Reference](https://www.php.net/manual/en/book.var.php)

##### Example:

```php
<?php

  $progLan = "PHP";
  $number = 1.25;
  $boolean = true;
  $arr = [1,2,3,4,5];
  $anInteger = 10;

  // Check whether the variable has value or none.
  var_dump(empty($progLan)) . "<br>"; // bool(false)
  var_dump(isset($progLan)) . "<br>"; // bool(true)

  // Check the Data type of the variable.
  echo gettype($progLan) . "<br>"; // string
  var_dump(is_array($arr)) . "<br>"; // bool(true)
  var_dump(is_bool($boolean)) . "<br>"; // bool(true)
  var_dump(is_double($number)) . "<br>"; // bool(true)
  var_dump(is_float($number)) . "<br>"; // bool(true)
  var_dump(is_int($number)) . "<br>"; // bool(false)
  var_dump(is_integer($anInteger)) . "<br>"; // bool(true)
  var_dump(is_long($number)) . "<br>"; // bool(false)
  var_dump(is_null($number)) . "<br>"; // bool(false)
  var_dump(is_numeric($number)) . "<br>"; // bool(true)
  var_dump(is_object($arr)) . "<br>"; // bool(false)
  var_dump(is_real($number)) . "<br>"; // bool(true)
  var_dump(is_scalar($progLan)) . "<br>"; // bool(true)
  var_dump(is_string($progLan)) . "<br>"; // bool(true)
  

  // Displaying variable's value
  print_r($number); // 1.25
  var_dump(10); // int(10)
```

#### String Functions 

Name | Description 
------------ | ------------- 
`echo()` | Output one or more strings
`htmlentities()` | Convert all applicable characters to HTML entities
`implode()` | Join array elements with a string
`join()` | Alias of implode
`lcfirst()` | Make a string's first character lowercase
`ltrim()` | Strip whitespace (or other characters) from the beginning of a string
`print()` | Output a string
`printf()` | Output a formatted string
`rtrim()` | Strip whitespace (or other characters) from the end of a string
`str_ireplace()` | Case-insensitive version of str_replace
`str_pad()` | Pad a string to a certain length with another string
`str_repeat()` | Repeat a string
`str_replace()` | Replace all occurrences of the search string with the replacement string
`str_shuffle()` | Randomly shuffles a string
`str_split()` | Convert a string to an array
`str_word_count()` | Return information about words used in a string
`strlen()` | Get string length
`strpbrk()` | Search a string for any of a set of characters
`strpos()` | Find the position of the first occurrence of a substring in a string
`strrchr()` | Find the last occurrence of a character in a string
`strrev()` | Reverse a string
`strripos()` | Find the position of the last occurrence of a case-insensitive substring in a string
`strrpos()` | Find the position of the last occurrence of a substring in a string
`strstr()` | Find the first occurrence of a string
`strtolower()` | Make a string lowercase
`strtoupper()` | Make a string uppercase
`substr()` | Return part of a string
`trim()` | Strip whitespace (or other characters) from the beginning and end of a string
`ucfirst()` | Make a string's first character uppercase
`ucwords()` | Uppercase the first character of each word in a string

[Reference](https://www.php.net/manual/en/book.strings.php)

##### Example:

```php
<?php

  $progLan = "PHP";
  $script = "<script>Harmful script</script>";
  $arr = [1,2,3,4,5];
  $longText = "I love programming because, it is fun!";
  $vowels = ["a", "e", "i", "o", "u", "A", "E", "I", "O", "U"];

  printf("entities: %s <br>", htmlentities($script)); // &lt;script&gt;Harmful script&lt;/script&gt;
  printf("pad: %s <br>", str_pad("Hello", 10, "!!", STR_PAD_BOTH));  // !!Hello!!!
  printf("repeat: %s <br>", str_repeat("love", 5)); // lovelovelovelovelove
  print_r(str_split($progLan)); // Array ( [0] => P [1] => H [2] => P )
  echo "<br>";
  printf("search: %s <br>",strpbrk($longText, "f")); // fun!
  printf("pos: %d <br>",strpos($longText, "love")); // 2

  // Outputing string in different format.
  print ("print: Hello, World!") . "<br>"; // Hello, World!
  printf ("printf: %s <br>", $progLan); // The PHP is cool!

  // Finding the first occurrence of a string.
  printf("firstOcc: %s <br>",strstr($longText, "m")); // mming because, it is fun

  //  Finding the last occurrence of a string that is case sensitive and not.
  printf("lastiOcc: %d <br>",strripos($longText, "M")); // 14
  printf("lastOcc: %d <br>",strrpos($longText, "m")); // 14
  printf("lastOccu2: %s <br>",strrchr($longText, "m")); // ming because, it is fun!

  // Reverse or Shuffle the string
  printf("shuffle: %s <br>", str_shuffle($longText)); // random text
  printf("reverse: %s <br>", strrev($longText)); // !nuf si ti ,esuaceb gnimmargorp evol I

  // Slicing the string
  printf("slice: %s <br>",substr($longText, 2, 4)); // love

  // Returns a replaced word.
  printf("iReplace: %s <br>",str_ireplace("%body%", "black", "<body text=%BODY%>")); // <body text=black>
  printf("replace: %s <br>",str_replace($vowels, "", $longText)); //  lv prgrmmng bcs, t s fn!

  // Returns the length of a string.
  printf("length: %d <br>", strlen($longText)); // 38
  printf("word count: %d <br>", str_word_count($longText)); // 7

  // Changing the text to upper or lower case.
  printf("upperFirst: %s <br>" ,ucfirst($longText)); // I love programming because, it is fun!
  printf("upperWords: %s <br>", ucwords($longText)); // I Love Programming Because, It Is Fun!
  printf("toLower: %s <br>", strtolower($longText)); // i love programming because, it is fun!
  printf("toUpper: %s <br>", strtoupper($longText)); // I LOVE PROGRAMMING BECAUSE, IT IS FUN!

  // Returns removed whitespaces
  printf("leftTrim: %s <br>", ltrim("             Hello, World!")); // Hello, World!
  printf("rightTrim: %s <br>", rtrim("Text with whitespace!              ")); // Text with whitespace!
  printf("trim: %s <br>", trim(" Text with whitespace.       ")); // Text with whitespace.
```

#### Array Functions 

Name | Description 
------------ | ------------- 
`array_filter()` | Filters elements of an array using a callback function
`array_map()` | Applies the callback to the elements of the given arrays
`array_reduce()` | Iteratively reduce the array to a single value using a callback function
`array_reverse()` | Return an array with elements in reverse order
`array_push()` | Push one or more elements onto the end of array
`array_pop()` | Pop the element off the end of array
`array_shift()` | Shift an element off the beginning of array
`array_unshift()` | Prepend one or more elements to the beginning of an array
`count()` | Count all elements in an array, or something in an object
`array_replace()` | Replaces elements from passed arrays into the first array
`array_slice()` | Extract a slice of the array
`array_splice()` | Remove a portion of the array and replace it with something else
`array_search()` | Searches the array for a given value and returns the first corresponding key if successful
`array_key_exists()` | Checks if the given key or index exists in the array

[Reference](https://www.php.net/manual/en/book.array.php)

##### Example:

```php
  <?php

  $arr = [1,2,3,4,5,6,7,8,9,10];


  function removeEven($var) {
    return $var & 1;
  }

  function removeOdd($var) {
    return !($var & 1);
  }

  function sum($carry, $item) {
      $carry += $item;
      return $carry;
  }

  function squre($var){
    return $var * $var;
  }

  // filtering elements
  print_r(array_filter($arr, "removeEven")); // Array ( [0] => 1 [2] => 3 [4] => 5 [6] => 7 [8] => 9 )
  echo "<br>";
  print_r(array_filter($arr, "removeOdd"));  // Array ( [1] => 2 [3] => 4 [5] => 6 [7] => 8 [9] => 10 )
  echo "<br>";

  // modifying array elements
  print_r(array_map("squre", $arr)); // Array ( [0] => 1 [1] => 4 [2] => 9 [3] => 16 [4] => 25 [5] => 36 [6] => 49 [7] => 64 [8] => 81 [9] => 100 )
  echo "<br>";

  // reduce
  var_dump(array_reduce($arr, "sum")); // int(55)
  echo "<br>";

  // Reversing an array
  print_r(array_reverse($arr)); // Array ( [0] => 10 [1] => 9 [2] => 8 [3] => 7 [4] => 6 [5] => 5 [6] => 4 [7] => 3 [8] => 2 [9] => 1 )
  echo "<br>";

  // Adding element to the end of array
  array_push($arr, 11); 
  print_r($arr); 
  echo "<br>";

  // Removing element to the end of array
  array_pop($arr);
  print_r($arr);
  echo "<br>";

  // Adding element to the start of array
  array_unshift($arr, 0);
  print_r($arr);
  echo "<br>";

  // Removing element to the start of array
  array_shift($arr);
  print_r($arr); 
  echo "<br>";

  // Count of element in the array
  var_dump(count($arr)); // int(10)
```