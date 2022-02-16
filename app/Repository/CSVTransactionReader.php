<?php

namespace App\Repository;

use App\Repository\ITransactionReader;

final class CSVTransactionReader implements ITransactionReader
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