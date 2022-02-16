<?php
namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

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
        return Transaction::all();
    }
    
}