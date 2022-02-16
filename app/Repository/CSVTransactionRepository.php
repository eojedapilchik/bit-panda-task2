<?php

namespace App\Repository;

use App\Repository\TransactionRepository;
use App\Repository\CSVTransactionReader;

class CSVTransactionRepository extends TransactionRepository
{

    public function __construct()
    {
        parent::__construct(new CSVTransactionReader());
    }

}