<?php

namespace Modules\Customer\Http\Controllers;

use Carbon\Carbon;
use http\Env\Response;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
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


    public function create()
    {
        return view('customer::create');
    }


    public function store(TransactionRequest $request)
    {
        $validated = $request->validated();

        $transaction = Transaction::create([
            'type' => $validated['type'],
            'amount' => $validated['amount'],
            'account_id' => $validated['account_id'],
            'user_id' => Auth::id(),
        ]);

        if ($transaction) {
            return response()->json([
                'success' => true,
                'message' => 'transaction created',
            ], 201);
        }
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('customer::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        return view('customer::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        //
    }
}
