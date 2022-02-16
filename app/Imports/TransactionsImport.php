<?php

namespace App\Imports;

use App\Models\Transaction;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithCustomCsvSettings;

class TransactionsImport implements ToCollection, WithHeadingRow, WithCustomCsvSettings
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function collection(Collection  $rows)
    {
        foreach ($rows as $row) 
        {
            Transaction::create([
                //"id","code","amount","user_id","created_at","updated_at"
                'id' => $row['id'],
                'code' => $row['code'],
                'amount' => $row['amount'],
                'user_id' => $row['user_id'],
            ]);
        }
    }

     public function getCsvSettings(): array
    {
        return [
            'delimiter' => ","
        ];
    }
}
