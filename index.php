<?php

  $obj = new main();

  class main {
   
    public function __construct() {
       $text = "program  started<br>";
       echo "$text";
       $text = "<h1>String Function Demonstration-PRINT</h1><br>";
       stringFunctions::printhis($text);
       $text = "Sample Text<br>";
       stringFunctions::printhis($text);
       $text = "<hr><br>";
       stringFunctions::printhis($text);
       $text = "<h1>Array Function Demonstration-ARRAY</h1><br>";
       stringFunctions::printhis($text);
       $myArray = array(1,2,3,4,5);
       arrayFunctions::printArray($myArray);
       $text = "<hr><br>";
       stringFunctions::printhis($text);
    }

    public function __destruct() {
       $text = "program ended<br>";
       echo "$text";
    } 
  }
  class stringFunctions {
     static public function printThis($text) {
        print($text);
     }
  }

  class arrayFunctions {
     static public function printArray($myArray) {
        array($myArray);
     }
  }

?>
