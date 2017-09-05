<?php

echo "1) " .  __FILE__ . " : path to this file.<br>";
echo "2) " . __LINE__ . " : line number of the code.<br>"; //be careful once you include files
echo "3) " . dirname(__FILE__) . " : old directory command<br>";
echo "4) " . __DIR__ . " : new directory command<br>"; //only PHP 5.3

echo "5) " . file_exists(__FILE__) ? 'yes' : 'no';
echo "<br>";
echo "6) " . file_exists(dirname(__FILE__)."/index.php") ? 'yes' : 'no';
echo "<br>";

echo "7) " . file_exists(dirname(__FILE__)) ? 'yes' : 'no';
echo "<br>";

echo "8) " . is_file(dirname(__FILE__). "/index.php") ? 'yes' : 'no';
echo "<br>";

echo "9) " .is_file(dirname(__FILE__)) ? 'yes' : 'no';
echo "<br>";
echo "10) " . is_dir(dirname(__FILE__)."/index.php") ? 'yes' : 'no' ;
echo "<br>";

echo "11) " . is_dir(dirname(__FILE__)) ? 'yes' : 'no';
echo "<br>";

echo "12) " . is_dir('..') ? 'yes' : 'no';
echo "<br>";


echo "13) " . file_exists((__DIR__)."/index.php") ? 'YES' : 'NO';
?>

