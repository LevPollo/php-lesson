<?php

namespace domains;
require_once('JSONWriter.php');
require_once('CSVWriter.php');

include "index.php";

/** @var array $myArray */
print_r($myArray);

$jsonWriter = new JSONWriter();
$jsonWriter->generateContent($myArray);
$jsonWriter->write('newJson.json');

$csvWriter = new CSVWriter();
$csvWriter->generateContent($myArray);
$csvWriter->write('newCsv.csv');









