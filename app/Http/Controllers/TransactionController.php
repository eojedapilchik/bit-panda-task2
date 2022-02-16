<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use App\Factory\TransactionRepoFactory;

class TransactionController extends Controller
{

    public function index(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'source' => [
            'required',
            Rule::in(['csv', 'db']),
            ],
        ]);
 
        if ($validator->fails()) {
            return response()->json("Bad Request", 400);
        }
        $validated = $validator->validated();
        $source = $validated['source'];
        $reader = TransactionRepoFactory::create($source);
        return $reader->listTransactions();
        // /return Transaction::all();
    }
    
}