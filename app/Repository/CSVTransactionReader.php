<?php

namespace App\Repository;

use App\Repository\ITransactionReader;
use App\Imports\TransactionsImport;
use Maatwebsite\Excel\Facades\Excel;

final class CSVTransactionReader implements ITransactionReader
{

    /**
     * CSV Transactions
     *
     * @return void
     */
    public function getTransactions()
    {
        $transactions = Excel::toCollection(new TransactionsImport, 'transactions.csv');
        return $transactions;
    }

}