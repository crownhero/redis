<?php
// Log all errors to stderr
ini_set('error_log', 'syslog');

// Generate a asample error
//trigger_error('This is a sample error logged to stderr.', E_USER_ERROR);

 //Error handler function to log uncaught exceptions
function exception_handler($exception) {
    error_log($exception->getMessage());
}

// Set the exception handler
set_exception_handler('exception_handler');

// Generate a sample error
undefined_function(); // This function call will trigger an error

// Output something
echo "Hello, PHP World!";
