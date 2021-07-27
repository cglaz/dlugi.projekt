<?php

namespace App\Http\Controllers;

use App\Models\Debt;
use Illuminate\Http\Request;

class DebtController extends Controller
{

    public function list()
    {
        $debts = Debt::orderBy('created_at')->get();


        return view('debts.list', ['debts' => $debts]);
    }

    public function create()
    {

    }

    public function delete()
    {

    }
}
