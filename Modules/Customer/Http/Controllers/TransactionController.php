<?php

namespace Modules\Customer\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Modules\Customer\Entities\Account;
use Modules\Customer\Entities\Transaction;
use Modules\Customer\Http\Requests\TransactionRequest;
use Yajra\DataTables\Facades\DataTables;


class TransactionController extends Controller
{

    public function index(Request $request)
    {
        $data = Transaction::where('user_id', Auth::id())->latest()->take(5)->get();

        $transactions = $data->map(function ($transaction){
            return [
                'id' => $transaction['id'],
                'amount' => $transaction['amount'],
                'type' => $transaction['type'],
                'user_name' => $transaction->user->name,
                'account_number' => $transaction->account['account_number'],
                'created_at' => Carbon::parse($transaction['created_at'])->format('y-m-d H:m:s')
            ];
        });

        return DataTables::of($transactions)->addIndexColumn('DT_RowIndex')
            ->toJson();
    }


    public function store(TransactionRequest $request)
    {
            $validated = $request->validated();

            $account = Account::findOrFail($validated['account_id']);
            $amount = floatval($validated['amount']);

            if ($request->input('type') === 'withdraw') {

                if ($account['balance'] < $amount) {
                    throw new HttpResponseException(response()->json([
                        'success' => false,
                        'errors' => [
                            'account balance' => [
                                'Insufficient account balance.'
                            ]
                        ]
                    ],422));
                }

                $account['balance'] -= $amount;

            } else {
                $account['balance'] += $amount;
            }


            if (!$account->save()) {
                throw new HttpResponseException(response()->json([
                    'success' => false,
                    'error' => 'An error occurred while the transaction performed'
                ]));
            }

            $transaction = Transaction::create([
                'type' => $validated['type'],
                'amount' => $validated['amount'],
                'account_id' => $validated['account_id'],
                'user_id' => Auth::id(),
            ]);

            return response()->json([
                'success' => true,
                'message' => 'transaction created',
            ], 201);
    }
}
