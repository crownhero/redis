<?php

require 'vendor/autoload.php';

Predis\Autoloader::register();

try {
    $redis = new Predis\Client([
        'scheme' => 'tcp',
        'host'   => 'host-string',
        'port'   => 6379,
    ]);

    echo "Connected to Redis\n";

    // Perform a test set and get operation
    $redis->set('test_key', 'Hello, Redis!');
    $value = $redis->get('test_key');

    echo "Test key value: $value\n";

    // If you've reached this point without any exceptions, the connection and basic operations were successful.
} catch (Exception $e) {
    // Log the error to stderr
    error_log("Error: " . $e->getMessage());
    // Output the error message to the browser
    echo "Error: " . $e->getMessage() . "\n";
}
?>
