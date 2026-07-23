<?php

$str = "Hello World, Welcome to PHP Programming";

echo "1. strlen()";
echo "String: " . $str . "<br>";
echo "Length of String: " . strlen($str) . "<br><br>";

echo "2. strpos()";
echo "Position of 'Welcome': " . strpos($str, "Welcome") . "<br>";
echo "Position of 'PHP': " . strpos($str, "PHP") . "<br><br>";

echo "3. str_word_count()";
echo "Total Words: " . str_word_count($str) . "<br><br>";

echo "4. strrev()";
echo "Reversed String: " . strrev($str) . "<br><br>";

echo "5. strtolower()";
echo "Lowercase String: " . strtolower($str) . "<br><br>";

echo "6. strtoupper()";
echo "Uppercase String: " . strtoupper($str) . "<br><br>";
?>