<?php

namespace App\Repository;

use App\Repository\ITransactionReader;

abstract class TransactionRepository
{
    protected ITransactionReader $transaction_reader;

    public function __construct(ITransactionReader $transaction_reader)
    {
        $this->transaction_reader = $transaction_reader;
    }

    public function listTransactions()
    {
        return $this->transaction_reader->getTransactions();
    }
}