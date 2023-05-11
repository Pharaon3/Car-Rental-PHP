<?php
header('Content-Type: application/json');

$products = array(
    array('id' => 1, 'name' => 'Product 1', 'price' => 10.99),
    array('id' => 2, 'name' => 'Product 2', 'price' => 19.99),
    array('id' => 3, 'name' => 'Product 3', 'price' => 5.99)
);

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    echo json_encode($products);
} else {
    http_response_code(405);
    echo json_encode(array('error' => 'Method not allowed'));
}
?>