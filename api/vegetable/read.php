<?php

// Headers
Header('Access-Control-Allow-Origin: *');
Header('Content-Type: application/json');

include_once 'models/Vegetable.php';
include_once 'config/Database.php';

// Instantiate DB & connect
$database = new Database();
$db = $database->connect();

// Instantiate Vegetable object
$vegetable = new Vegetable($db);

// Vegetable Query
$result = $vegetable->read();
// Count Rows
$num = $result->rowCount();

// Check if any posts
if ($num > 0) {
    // Vegetable array
    $vegetables_arr = [];
    $vegetables_arr['data'] = [];

    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
        extract($row);

        $vegetable_item = array(
            'id' => $id,
            'name' => $name,
            'classification' => $classification,
            'description' => $description,
            'editable' => $editable,
        );

        // Push to data
        array_push($vegetables_arr['data'], $vegetable_item);
    }

    // Turn to JSON & output
    echo json_encode($vegetables_arr);
} else {
    // No Posts
    echo json_encode(
        array('message' => 'No Vegetables Found')
    );
}
