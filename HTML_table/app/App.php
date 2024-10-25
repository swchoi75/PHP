<?php

declare(strict_types = 1);

// Your Code

$root = dirname(__DIR__) . DIRECTORY_SEPARATOR;
define('FILES_PATH', $root . 'transaction_files' . DIRECTORY_SEPARATOR);


function getTransactionFiles(string $dirPath): array
{

    $files = [];

    foreach (scandir($dirPath) as $file) {
        if (! is_dir($file)) {
            $files[] = FILES_PATH . $file;
        }
    }

    return $files;
}

function getTransactions(string $fileName): array
{
    $file = fopen($fileName, 'r');
    
    $transactions = [];

    while($transaction = fgetcsv($file)) {
        $transactions[] = $transaction;
    }

    return $transactions;
}
