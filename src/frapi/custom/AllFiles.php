<?php
// If you remove this. You might die.
define('FRAPI_CACHE_ADAPTER', 'dummy');

// Use the constant CUSTOM_MODEL to access the custom model directory
// IE: require CUSTOM_MODEL . DIRECTORY_SEPARATOR . 'ModelName.php';
// Or add an autolaoder if you are brave.
require CUSTOM_MODEL . DIRECTORY_SEPARATOR . 'Auth.php';
// Other data
