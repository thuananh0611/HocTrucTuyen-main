<?php

namespace App\Http\Controllers\api\teacher;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Helpers\Helper;
use App\Models\teachers;

class MainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return teachers::all();
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
        //
        $db = new teachers();
        $db->ID_Teacher = Helper::IDGenerator(new teachers, 'ID_Teacher', 4, 'GV');
        $db->ID_Permission = $request->ID_Permission;
        $db->ID_Professional = $request->ID_Professional;
        $db->Name_Teacher = $request->Name_Teacher;
        $db->Birth_Teacher = date('Y-m-d', strtotime($request->Birth_Teacher) + 100000);
        $db->Gender_Teacher = $request->Gender_Teacher;
        $db->Address_Teacher = $request->Address_Teacher;
        $db->Mail_Teacher = $request->Mail_Teacher;
        $db->Phone_Teacher = $request->Phone_Teacher;
        $db->Img_Teacher = "11";
        $db->file_path = "11";
        $db->Pass_Admin = $request->Pass_Admin;
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
