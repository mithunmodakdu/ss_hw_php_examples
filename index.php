<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
   <div class="container">
   
   <?php

    // Example-01
    echo "<h1>"."Hello world,"." "."Welcome to our website"."</h1>";
    
    
    // Example-02
    print "<h1>"."Hello world"."<br>";

    // Example-03: Single Line Commenting
    //echo "<h1>"."Hello world,"." "."Welcome to our website"."</h1>";
    
    // Example-04: Single Line Commenting
    #echo "<h1>"."Hello world,"." "."Welcome to our website"."</h1>";

    // Example-05: Multiple Lines Commenting
    /*
    echo "<h1>"."Hello world,"." "."Welcome to our website"."</h1>";
    echo "<h1>"."Hello world,"." "."Welcome to our website"."</h1>";
    echo "<h1>"."Hello world,"." "."Welcome to our website"."</h1>";
    echo "<h1>"."Hello world,"." "."Welcome to our website"."</h1>";
    */
    
    // Example-06: The  + 15 part will be ignored in the calculation:
    $x = 5 /* +15 */ + 5;
    echo $x ."<br>"; 
   
    

    // Example-07: Checking php version
    echo phpversion()  ."<br>";


    /************** PHP Variables ************/

    // Example-08: php variable 
    $name = "Mithun Kumer Modak";
    echo "My name is $name" ."<br>";

    // Example-09: php variable 
    $y = 5;
    $z = 10;
    echo $y + $z ."<br>";

    // Example-10: The var_dump() function returns the data type and the value:
    $age = 35;
    echo var_dump($age) ."<br>";

    // Example-11: The var_dump() function returns the data type and the value:
    $district = "Mymensingh";
    echo var_dump($district) ."<br>";

    // Example-12: The var_dump() function returns the data type and the value:
    $isItTrue = true;
    echo $isItTrue ."<br>";
    echo var_dump($isItTrue) ."<br>";

    // Example-13: The var_dump() function 
    echo var_dump(false) ."<br>";

    // Example-14: The var_dump() function 
    echo var_dump(100.05) ."<br>";

    // Example-15: The var_dump() function 
    echo var_dump([2, 3, 56]) ."<br>";

    // Example-16: The var_dump() function 
    echo var_dump(null) ."<br>";

    // Example-17: All three variables get the value "Fruit":
    $a = $b = $c = "Fruit";
    echo $a ."<br>";
    echo $b ."<br>";
    echo $c ."<br>";


    /************** PHP Variables Scope ************/

    // Example-18: Variable with global scope:
    $banglaMarks = 55; // global scope

    function myBanglaMarks(){
      // using banglaMarks inside this function will generate an error
      // echo "<p>My Bangla mark is $banglaMarks</p>"
    }
    myBanglaMarks();
    // echo "<p>My Bangla mark is $banglaMarks</p>"


    // Example-19: Variable with local scope:
  
    function myEnglishMark(){
      $englishMark = 65; // local scope
      echo "<p>My English mark is $englishMark</p>";
    }
    myEnglishMark();


    // Example-20: Variable with global scope is used in local scope using global keyword:
    $mathMark = 90;

    function myMathMark(){
      global $mathMark; // using global keyword
      echo "<p>My Math mark is $mathMark</p>";
    }
    myMathMark();


    // Example-21: PHP also stores all global variables in an array called $GLOBALS[index]. The index holds the name of the variable. This array is also accessible from within functions and can be used to update global variables directly

    $m = 100;
    $n = 90;

    function result(){
      $GLOBALS["m"] = $GLOBALS["m"] + $GLOBALS["n"];
      echo $GLOBALS["m"];
    }
    result();
    echo "<br>";


    // Example-22: PHP The static Keyword: Normally, when a function is completed/executed, all of its variables are deleted. However, sometimes we want a local variable NOT to be deleted. We need it for a further job. To do this, use the static keyword when you first declare the variable:

    function useStaticKeyword(){
      static $x = 0;
      echo $x;
      $x++;

    }
    useStaticKeyword();
    echo "<br>";
    useStaticKeyword();
    echo "<br>";
    useStaticKeyword();
    echo "<br>";



    /************* PHP echo and print *************/ 
    // Example-23: The echo statement can be used with or without parentheses: echo or echo().
    echo "Hello";
    echo "<br>";
    //same as:
    echo("Hello"); 
    echo "<br>";

     // Example-24: The following example shows how to output text with the echo command (notice that the text can contain HTML markup):
     echo "<h2>PHP is Fun!</h2>";
     echo "Hello world!<br>";
     echo "I'm about to learn PHP!<br>";
     echo "This ", "string ", "was ", "made ", "with multiple parameters.";

    // Example-25: The following example shows how to output text and variables with the echo statement:
    $txt1 = "Learn PHP";
    $txt2 = "W3Schools.com";

    echo "<h2>$txt1</h2>";
    echo "<p>Study PHP at $txt2</p>";


    /************* PHP Data Types *************/ 
    // Example-26: The var_dump() function returns the data type and the value:
    $x = 5;
    var_dump($x);

    // Example-27:PHP String
    $x = "Hello world!";
    $y = 'Hello world!';

    var_dump($x);
    echo "<br>";
    var_dump($y);

    // Example-28:PHP Boolean
    $x = true;
    var_dump($x);


    /************* PHP Strings *************/ 
     // Example-29: Double quoted string literals perform operations for special characters:
      $x = "John";
      echo "Hello $x";
    
    // Example-30: Single quoted strings does not perform such actions, it returns the string like it was written, with the variable name:
      $x = "John";
      echo 'Hello $x';

    // Example-31: The PHP strlen() function returns the length of a string.
    echo strlen("Hello world!");

    // Example-32: The PHP str_word_count() function counts the number of words in a string.
    echo str_word_count("Hello world!");

    // Example-33: The PHP strpos() function searches for a specific text within a string. If a match is found, the function returns the character position of the first match. If no match is found, it will return FALSE.
    echo strpos("Hello world!", "world");


   /************* PHP - Modify Strings *************/ 
  // Example-34: The strtoupper() function returns the string in upper case:
   $name = "Mithun Kumer Modak";
   echo strtoupper($name);

  // Example-35: The strtolower() function returns the string in lower case:
    $text = "I eat rice";
    echo strtolower($text);

  // Example-36: The PHP str_replace() function replaces some characters with some other characters in a string.
  $x = "Hello World!";
  echo str_replace("World", "Dolly", $x);

  // Example-37: The PHP strrev() function reverses a string.
  $x = "Hello World!";
  echo strrev($x);

  // Example-38: The trim() removes any whitespace from the beginning or the end:
  $x = "  Hello World!  ";
  echo "<input value='" . $x ."'>";
  echo "<br>";
  echo "<input value='" . trim($x) . "'>";

  // Example-39: The PHP explode() function splits a string into an array. The first parameter of the explode() function represents the "separator". The "separator" specifies where to split the string.
  $x = "Mithun Kumer Modak";
  $y = explode(" ", $x);
  print_r($y);


  /************* PHP - Concatenate Strings *************/ 
  // Example-40: To concatenate, or combine, two strings you can use the . operator:
  $firstName = "Mithun";
  $lastName = "Modak";
  $fullName = $firstName . $lastName;
  echo $fullName;

  // Example-41: To concatenate, or combine, two strings you can use the . operator and the " " space character to give space between them:
  $firstName = "Mithun";
  $lastName = "Modak";
  $fullName = $firstName . " " . $lastName;
  echo $fullName;

  // Example-42: By surrounding the two variables in double quotes with a white space between them, the white space will also be present in the result:
  $firstName = "Mithun";
  $lastName = "Modak";
  $fullName = "$firstName $lastName";
  echo $fullName;



 /************* PHP - Slicing Strings *************/ 
  // Example-43: Slicing: We can return a range of characters by using the substr() function. Specify the start index and the number of characters you want to return.
  $name = "Mithun Kumer Modak";
  echo substr($name, 7, 3);

  // Example-44: Slice to the End: By leaving out the length parameter, the range will go to the end:
  $name = "Mithun Kumer Modak";
  echo substr($name, 7);

  // Example-45: Slice From the End: Use negative indexes to start the slice from the end of the string:
  $name = "Mithun Kumer Modak";
  echo substr($name, -5, 3);

  // Example-46: Negative Length: Use negative length to specify how many characters to omit, starting from the end of the string:
  $name = "Mithun Kumer Modak";
  echo substr($name, 7, -3);


/************* PHP - Escape Characters *************/ 
// Example-47: An escape character is a backslash \ followed by the character you want to insert.
$x = "We are the so-called \"Vikings\" from the north.";
echo $x;

// Example-48: An escape character is a backslash \ followed by the character you want to insert.
$price = "Price is \$productprice.";
echo $price;


/************* PHP Numbers *************/ 
// Example-49: is_int()
$num1 = 5364;
var_dump(is_int($num1));

$num2 = 56.53;
var_dump(is_int($num2));

// Example-50: is_float()
$num3 = 567.53;
var_dump(is_float($num3));



   

    

   ?>


   </div>



    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>