<?php

  $obj = new main();

  class main {
   
    public function __construct() {
       $text = "program  started<br>";
       echo "$text";

       $text = "<h1>print  Function Demonstration</h1><br>";
       stringFunctions::printThis($text);
       $text = "Sample Text<br>";
       stringFunctions::printThis($text);
       $text = "<hr><br>";
       stringFunctions::printThis($text);

       $text = "<h1>StrLen Function Demonstration</h1><br>";
       stringFunctions::printThis($text);
       stringFunctions::strlenF($text);
       $text = "<hr><br>";
       stringFunctions::printThis($text);

       $text = "<h1>Strrev Function Demonstration</h1><br>";
       stringFunctions::printThis($text);
       stringFunctions::strrevF($text);
       $text = "<hr><br>";
       stringFunctions::printThis($text);

       $text = "<h1>Strtolower  Function Demonstration</h1><br>";
       stringFunctions::printThis($text);
       stringFunctions::strtolowerF($text);
       $text = "<hr><br>";
       stringFunctions::printThis($text);

       $text = "<h1>Strtoupper  Function Demonstration</h1><br>";
       stringFunctions::printThis($text);
       stringFunctions::strtoupperF($text);
       $text = "<hr><br>";
       stringFunctions::printThis($text);

       $text = "<h1>Str_shuffle  Function Demonstration</h1><br>";
       stringFunctions::printThis($text);
       stringFunctions::str_shuffleF($text);
       $text = "<hr><br>";
       stringFunctions::printThis($text);

       $text = "<h1>Str_repeat  Function Demonstration</h1><br>";
       stringFunctions::printThis($text);
       stringFunctions::str_repeatF($text);
       $text = "<hr><br>";
       stringFunctions::printThis($text);

       $text = "<h1>Str_word_count  Function Demonstration</h1><br>";
       stringFunctions::printThis($text);
       stringFunctions::str_word_countF($text);
       $text = "<hr><br>";
       stringFunctions::printThis($text);

       $text = "<h1>Strcmp  Function Demonstration</h1><br>";
       stringFunctions::printThis($text);
       stringFunctions::strcmpF($text);
       $text = "<hr><br>";
       stringFunctions::printThis($text);

       $text = "<h1>echo  Function Demonstration</h1><br>";
       stringFunctions::printThis($text);
       stringFunctions::echoF($text);
       $text = "<hr><br>";
       stringFunctions::printThis($text);

       $text = "<h1>Array Function Demonstration</h1><br>";
       stringFunctions::printThis($text);
       $myArray = array(1,2,3,4,5);
       arrayFunctions::printArray($myArray);
       $text = "<hr><br>";
       stringFunctions::printThis($text);

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

     static public function strlenF($text) {
         $text = "the length of KISHORE is.....";
	 echo "<br>";
	 print($text);
	 print(strlen($text));
     }

     static public function strrevF($text) {
        $text = "the text to be reversed";
	echo "<br>";
	print($text);
	print(strrev($text));
     }

     static public function strtolowerF($text) {
        $text = "THE TEXT TO BE LOWERED<br>";
	print($text);
	print(strtolower($text));
     }

     static public function strtoupperF($text) {
        $text = "the text to be uppered<br>";
	print($text);
	print(strtoupper($text));
     }

     static public function str_shuffleF($text) {
	$text = "the text to be shuffled";
	print($text);
	echo "<br>";
        print(str_shuffle($text));
     }
				       
     static public function str_repeatF($text) {
        $text = "the text to be repeated";
	print($text);
	echo "<br>";
        print(str_repeat($text));
     }

     static public function str_word_countF($text) {
     $text = "the text to be counted";
     print($text);
     echo "<br>";
     print(str_word_count($text));
     }

     static public function strcmpF($text) {
     $text = "comparing one and two";
     print($text);
     echo "<br>";
     print(strcmp("one","two"));
     }

     static public function echoF($text) {
     echo "<br>this is a sample of echo command";
     }

  }

  class arrayFunctions {
     static public function printArray($myArray) {
       print_r ($myArray);
     }
  }

?>
