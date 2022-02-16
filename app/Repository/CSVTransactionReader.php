<?php

namespace App\Repository;

use App\Repository\ITransactionReader;

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