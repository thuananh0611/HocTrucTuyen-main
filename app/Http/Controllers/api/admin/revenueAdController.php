<?php

namespace App\Http\Controllers\api\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Helpers\Helper;
use App\Models\revenue;

class revenueAdController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return revenue::all();
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
        $db = new revenue();
        $db->ID_Revenue = Helper::IDGenerator(new revenue, 'ID_Revenue', 3, 'KT');
        $db->ID_Student = $request->ID_Student;
        $db->Date_Revenue = date('Y-m-d', strtotime($request->Date_Revenue) + 100000);
        $db->Total_Money = $request->Total_Money;
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
        return revenue::findOrFail($id);
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
        $db = revenue::findOrFail($id);
        $db->ID_Student = $request->ID_Student;
        $db->Date_Revenue = date('Y-m-d', strtotime($request->Date_Revenue) + 100000);
        $db->Total_Money = $request->Total_Money;
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
        revenue::findOrFail($id)->delete();
        return "Deleted";
    }
}
