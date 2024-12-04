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

    


    

   ?>


   </div>



    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>