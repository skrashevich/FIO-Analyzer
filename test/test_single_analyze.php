<?php
require_once(__DIR__ . "/../vendor/autoload.php");
require(__DIR__ . "/../src/FioAnalyzer.php");
ini_set("memory_limit","4G");
$t = microtime(true);
$fa = new \svk\FioAnalyzer\FioAnalyzer();
$t = microtime(true) - $t;
echo "Time for FioAnalyzer initialization: " . $t . "\n";


echo "Анализ строки на наличие ФИО:\n";
print_r($fa->break_apart("Иванов Иван Петрович", 0.7));
