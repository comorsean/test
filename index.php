<?php
// Assets version
$assets_version = '?v'.time();

// Page
$page = isset($_GET['page']) ? $_GET['page'] : 'homepage';


// File
$file = __DIR__."/{$page}.php";

// Vars
include_once __DIR__ . "/_vars.php";

// Check
include_once is_file($file) ?  __DIR__."/layout.php" : __DIR__."/404.php";
