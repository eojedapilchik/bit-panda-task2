<?php

namespace App\Repository;

use App\Repository\ITransactionReader;
use App\Models\Transaction;

class EloquentTransactionReader implements ITransactionReader
{

    public function getTransactions()
    {
        return Transaction::all();
    }
}