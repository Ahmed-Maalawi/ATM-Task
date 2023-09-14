<?php

namespace Modules\Customer\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Modules\Customer\Entities\Card;
use Modules\Customer\Http\Requests\CardVilidation;
use Psy\Util\Str;

class CardController extends Controller
{

    public function validationCard()
    {
        return view('customer::validation-card');
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function cardValidated(CardVilidation $request)
    {
        $validated = $request->validated();

        $cardNumber = str_replace(' ', '', $validated['card_number']);

        $card = Card::where(['number' => $cardNumber, 'user_id' => Auth::id()])->first();
//        dd($card);
        if (isset($card) && Hash::check($validated['pin_number'], $card->pin))
        {
            Auth::user()->givePermissionTo('make transaction');

            return to_route('customer.dashboard');
        }

        return redirect()->back()->withErrors(['validationError' => 'card vailidation error']);
    }


    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {

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
