<?php

namespace App\Factory;

use App\Repository\EloquentTransactionRepository;
use App\Repository\TransactionRepository;

abstract class TransactionRepoFactory
{
    public static function create($type): TransactionRepository
    {
        switch ($type)
        {
            case 'csv':
                return new EloquentTransactionRepository();
                break;
            case 'db':
                return new EloquentTransactionRepository();
                break;
        }
    }
}