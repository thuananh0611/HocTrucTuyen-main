<?php

namespace App\Http\Controllers\api\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Helpers\Helper;
use App\Models\revenue_ct;

class revenue_ctAdController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return revenue_ct::all();
    }

    public function indexexpense(Request $request)
    {
        return revenue_ct::where('ID_Revenue_CT', $request->id)->get();
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
        $db = new revenue_ct();
        $db->ID_Revenue_CT = Helper::IDGenerator(new revenue_ct, 'ID_Revenue_CT', 3, 'KTCT');
        $db->ID_Revenue = $request->ID_Revenue;
        $db->TypeOfRevenue = $request->TypeOfRevenue;
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
        return revenue_ct::findOrFail($id);
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
        $db = revenue_ct::findOrFail($id);
        $db->TypeOfRevenue = $request->TypeOfRevenue;
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
        revenue_ct::findOrFail($id)->delete();
        return "Deleted";
    }
}
