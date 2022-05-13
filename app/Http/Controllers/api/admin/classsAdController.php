<?php

namespace App\Http\Controllers\api\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Helpers\Helper;
use App\Models\classs;

class classsAdController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return classs::all();
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
        $db = new classs();
        $db->ID_Class = Helper::IDGenerator(new classs, 'ID_Class', 3, 'CM');
        $db->ID_Teacher = $request->ID_Teacher;
        $db->Name_Class = $request->Name_Class;
        $db->Grade = $request->Grade;
        $db->Total_Student = $request->Total_Student;
        $db->School_Year = $request->School_Year;
        $db->created_at = now();
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
        return classs::findOrFail($id);
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
        $db = classs::findOrFail($id);
        $db->ID_Teacher = $request->ID_Teacher;
        $db->Name_Class = $request->Name_Class;
        $db->Grade = $request->Grade;
        $db->Total_Student = $request->Total_Student;
        $db->School_Year = $request->School_Year;
        $db->updated_at = now();
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
        classs::findOrFail($id)->delete();
        return "Deleted";
    }
}
