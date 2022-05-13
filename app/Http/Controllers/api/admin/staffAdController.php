<?php

namespace App\Http\Controllers\api\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Helpers\Helper;
use App\Models\staff;

class staffAdController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return staff::all();
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
        $db = new staff();
        $db->ID_Staff = Helper::IDGenerator(new staff, 'ID_Staff', 3, 'NV');
        $db->ID_Permission = 'Q06';
        $db->Name_Staff = $request->Name_Staff;
        $db->Birth_Staff = date('Y-m-d', strtotime($request->Birth_Admin) + 100000);
        $db->Gender_Staff = $request->Gender_Admin;
        $db->Address_Staff = $request->Address_Admin;
        $db->Mail_Staff = $request->Mail_Admin;
        $db->Phone_Staff = $request->Phone_Admin;
        $db->Img_Staff = "11";
        $db->Position_Staff = $request->Phone_Admin;
        $db->Status_Staff = $request->Phone_Admin;
        $db->Time_Start = $request->Phone_Admin;
        $db->Time_End = $request->Phone_Admin;
        $db->Pass_Staff = $request->Pass_Admin;
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
        return staff::findOrFail($id);
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
        if ($request->file('image') == null) {
            $file = "";
        } else {
            $file = $request->file('image')->store('images');
        }

        $db = staff::findOrFail($id);
        $db->Name_Staff = $request->Name_Staff;
        $db->Birth_Staff = date('Y-m-d', strtotime($request->Birth_Admin) + 100000);
        $db->Gender_Staff = $request->Gender_Admin;
        $db->Address_Staff = $request->Address_Admin;
        $db->Mail_Staff = $request->Mail_Admin;
        $db->Phone_Staff = $request->Phone_Admin;
        $db->Img_Staff = "11";
        $db->Position_Staff = $request->Phone_Admin;
        $db->Status_Staff = $request->Phone_Admin;
        $db->Time_Start = $request->Phone_Admin;
        $db->Time_End = $request->Phone_Admin;
        //$db->Pass_Staff = $request->Pass_Admin;
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
        staff::findOrFail($id)->delete();
        return "Deleted";
    }
}
