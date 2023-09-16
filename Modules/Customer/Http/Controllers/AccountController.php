<?php

namespace Modules\Customer\Http\Controllers;

use http\Env\Response;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Modules\Customer\Entities\Account;
use Yajra\DataTables\Facades\DataTables;

class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $accounts = Account::where('user_id', Auth::id())->get();

        return DataTables::of($accounts)->addIndexColumn()
            ->addColumn('action',function ($account) {
                $route = route('customer.account.show', $account);
                $btn = '<div class="dropdown d-inline-block">
                                <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="ri-more-fill align-middle"></i>
                                </button>
                                    <ul class="dropdown-menu dropdown-menu-end">
                                        <li><a href="'. $route.'" class="dropdown-item"><i class="ri-eye-fill align-bottom me-2 text-muted"></i> View</a></li>
                                    </ul>
                                </div>';
                return $btn;
            })->toJson();
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('customer::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        if (request()->ajax())
        {
            $account = Account::where(['user_id' => Auth::id(), 'id' => $id])->first();

            return response()->json([
                'success' => true,
                'message' => 'get account balance',
                'data' => $account['balance']
            ]);
        }
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
