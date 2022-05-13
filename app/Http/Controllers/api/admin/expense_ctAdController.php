<?php

namespace App\Http\Controllers\api\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Helpers\Helper;
use App\Models\expense_ct;

class expense_ctAdController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return expense_ct::all();
    }
    public function indexexpense(Request $request)
    {
        return expense_ct::where('ID_Expense', $request->id)->get();
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $db = new expense_ct();
        $db->ID_Expense_CT = Helper::IDGenerator(new expense_ct, 'ID_Expense_CT', 3, 'KCCT');
        $db->ID_Expense = $request->ID_Expense;
        $db->TypeOfExpense = $request->TypeOfExpense;
        $db->Into_Money = $request->Into_Money;
        $db->save();
        return $db;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return expense_ct::findOrFail($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $db = expense_ct::findOrFail($id);
        $db->TypeOfExpense = $request->TypeOfExpense;
        $db->Into_Money = $request->Into_Money;
        $db->save();
        return $db;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        expense_ct::findOrFail($id)->delete();
        return "Deleted";
    }
}
