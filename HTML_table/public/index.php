<?php

declare(strict_types = 1);

$root = dirname(__DIR__) . DIRECTORY_SEPARATOR;

define('APP_PATH', $root . 'app' . DIRECTORY_SEPARATOR);
define('FILES_PATH', $root . 'transaction_files' . DIRECTORY_SEPARATOR);
define('VIEWS_PATH', $root . 'views' . DIRECTORY_SEPARATOR);

/* YOUR CODE (Instructions in README.md) */

require APP_PATH . "App.php";

$files = getTransactionFiles(FILES_PATH);

print_r($files);

$transactions = [];
foreach($files as $file) {
    $transactions = getTransactions($file);
    // $transactions = array_merge($transactions, getTransactions($file));
}

print_r($transactions);



// require VIEWS_PATH . 'transactions.php';