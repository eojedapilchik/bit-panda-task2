<?php

namespace App\Repository;

use App\Repository\ITransactionReader;
use App\Models\Transaction;

class CSVTransactionReader implements ITransactionReader
{

    /**
     * CSV Transactions
     *
     * @return void
     */
    public function getTransactions()
    {
        return "CSV";
    }
}