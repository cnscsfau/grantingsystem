<?php

require __DIR__ . '../vendor/autoload.php';

use Kreait\Firebase\Factory;

$factory = (new Factory)
  ->withServiceAccount(__DIR__ . '/sfauprofiling-firebase-adminsdk-dqcf4-6cb8dc0630.json')
  ->withDatabaseUri('https://sfauprofiling-default-rtdb.firebaseio.com/');

$database = $factory->createDatabase();

// // Read data from the JSON file
// $jsonData = file_get_contents('../sample_data.json');
// $tblgranteeData = json_decode($jsonData, true);

// // Create separate database references for each set of fields
// $tblgrantee = 'granteetbl'; // Choose an appropriate name for the first table
// $tblgranteeDatabase = $factory->createDatabase()->getReference($tblgrantee);

// // Sample code to add data to the first table
// $tblgranteeDatabase->set($tblgranteeData);

// // Sample code to retrieve data from the first table
// $retrievedgranteeData = $tblgranteeDatabase->getValue();
// print_r($retrievedgranteeData);
