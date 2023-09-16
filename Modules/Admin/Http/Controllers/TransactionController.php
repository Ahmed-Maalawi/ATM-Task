<?php

namespace Modules\Admin\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Customer\Entities\Transaction;
use Yajra\DataTables\Facades\DataTables;

class TransactionController extends Controller
{

    public function index()
    {
        $transactions = Transaction::latest()->get();
        return DataTables::of($transactions)->addIndexColumn()->toJson();
    }


    public function destroy($id)
    {
        $transaction = Transaction::find($id);

        if (!$transaction) {
            return response()->json([
               'success' => false,
               'error' => 'Transaction not found'
            ], 404);
        }

        $transaction->delete();

        return response()->json([
            'success' => true,
            'message' => 'Transaction deleted successfully'
        ]);
    }
}
