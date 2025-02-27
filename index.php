<?php
// Allow cross-origin requests
header("Access-Control-Allow-Origin: *");

// Handle the GET request for 'cats'
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $cats = [
        ['name' => 'Pinecone'],
        ['name' => 'Mr']
    ];

    echo json_encode($cats);  // Return the cat names as JSON
}
?>

