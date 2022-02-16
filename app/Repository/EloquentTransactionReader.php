<?php

namespace App\Repository;

use App\Repository\ITransactionReader;
use App\Models\Transaction;

class EloquentTransactionReader implements ITransactionReader
{

    /**
     * Eloquent Transactions
     *
     * @return void
     */
    public function getTransactions()
    {
        return Transaction::all()->toArray();;
    }
}