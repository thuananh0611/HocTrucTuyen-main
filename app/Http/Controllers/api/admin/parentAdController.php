<?php

namespace App\Http\Controllers\api\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Helpers\Helper;
use App\Models\parentStudents;

class parentAdController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return parentStudents::all();
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
        $db = new parentStudents();
        $db->ID_Parent = Helper::IDGenerator(new parentStudents, 'ID_Parent', 3, 'AD');
        $db->ID_Student = $request->ID_Student;
        $db->Name_Dad = $request->Name_Dad;
        $db->Birth_Dad = date('Y-m-d', strtotime($request->Birth_Dad) + 100000);
        $db->Nationality_Dad = $request->Nationality_Dad;
        $db->Ethnic_Dad = $request->Ethnic_Dad;
        $db->Religion_Dad = $request->Religion_Dad;
        $db->Address_Dad = $request->Address_Dad;
        $db->Job_Dad = $request->Job_Dad;
        $db->Phone_Dad = $request->Phone_Dad;
        $db->Name_Mom = $request->Name_Mom;
        $db->Birth_Mom = date('Y-m-d', strtotime($request->Birth_Mom) + 100000);
        $db->Nationality_Mom = $request->Nationality_Mom;
        $db->Ethnic_Mom = $request->Ethnic_Mom;
        $db->Religion_Mom = $request->Religion_Mom;
        $db->Address_Mom = $request->Address_Mom;
        $db->Job_Mom = $request->Job_Mom;
        $db->Phone_Mom = $request->Phone_Mom;
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
        return parentStudents::findOrFail($id);
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

        $db = parentStudents::findOrFail($id);
        $db->Name_Dad = $request->Name_Dad;
        $db->Birth_Dad = date('Y-m-d', strtotime($request->Birth_Dad) + 100000);
        $db->Nationality_Dad = $request->Nationality_Dad;
        $db->Ethnic_Dad = $request->Ethnic_Dad;
        $db->Religion_Dad = $request->Religion_Dad;
        $db->Address_Dad = $request->Address_Dad;
        $db->Job_Dad = $request->Job_Dad;
        $db->Phone_Dad = $request->Phone_Dad;
        $db->Name_Mom = $request->Name_Mom;
        $db->Birth_Mom = date('Y-m-d', strtotime($request->Birth_Mom) + 100000);
        $db->Nationality_Mom = $request->Nationality_Mom;
        $db->Ethnic_Mom = $request->Ethnic_Mom;
        $db->Religion_Mom = $request->Religion_Mom;
        $db->Address_Mom = $request->Address_Mom;
        $db->Job_Mom = $request->Job_Mom;
        $db->Phone_Mom = $request->Phone_Mom;
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
        parentStudents::findOrFail($id)->delete();
        return "Deleted";
    }
}
