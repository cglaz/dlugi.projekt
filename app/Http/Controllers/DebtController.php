<?php

namespace App\Http\Controllers;

use App\Models\Debt;
use Illuminate\Http\Request;

class DebtController extends Controller
{

    public function list()
    {
        $debts = Debt::orderByDesc('price')->get();


        return view('debts.list', ['debts' => $debts]);
    }

    public function create()
    {
        return view('debts.create');
    }

    public function store(Request $request)
    {

        $inputs = $request->validate([
            'name' => 'required|unique:debts|max:100',
            'city' => 'required|max:50',
            'price' => 'required|integer',
        ]);

        $debt = Debt::create($inputs);

        return redirect()->route('debts.list');
    }

    public function delete(Debt $debtId)
    {
        $debt = Debt::where('id', $debtId->id)->delete();
        return back();

    }
}
