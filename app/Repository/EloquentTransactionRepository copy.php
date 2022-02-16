<?php

namespace App\Repository;

use App\Repository\TransactionRepository;
use App\Repository\EloquentTransactionReader;

class EloquentTransactionRepository extends TransactionRepository
{

    public function __construct()
    {
        parent::__construct(new EloquentTransactionReader());
    }

}