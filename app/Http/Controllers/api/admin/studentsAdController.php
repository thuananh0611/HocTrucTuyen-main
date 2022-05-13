<?php

namespace App\Http\Controllers\api\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Helpers\Helper;
use App\Models\students;

class studentsAdController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return students::all();
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
        $db = new students();
        $db->ID_Student = Helper::IDGenerator(new students, 'ID_Student', 3, 'AD'); //ad0001
        $db->ID_Permission = 'Q005';
        $db->ID_Class = $request->ID_Class;
        $db->Name_Student = $request->Name_Student;
        $db->Birth_Student = date('Y-m-d', strtotime($request->Birth_Student) + 100000);
        $db->Gender_Student = $request->Gender_Student;
        $db->Nationality_Student = $request->Nationality_Student;
        $db->Ethnic_Student = $request->Ethnic_Student;
        $db->Religion_Student = $request->Religion_Student;
        $db->Address_Student = $request->Address_Student;
        $db->Insurance_Code = $request->Insurance_Code;
        $db->AccountNumber_Student = $request->AccountNumber_Student;
        $db->School_Year = $request->School_Year;
        $db->Phone_Student = $request->Phone_Student;
        $db->Mail_Student = $request->Mail_Student;
        $db->Img_Student = "11";
        $db->Pass_Student = $request->Pass_Student;
        $db->Status_Student = $request->Status_Student;
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
        return students::findOrFail($id);
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

        $db = students::findOrFail($id);
        $db->ID_Class = $request->ID_Class;
        $db->Name_Student = $request->Name_Student;
        $db->AccountNumber_Student = $request->AccountNumber_Student;
        $db->Birth_Student = date('Y-m-d', strtotime($request->Birth_Student) + 100000);
        $db->Gender_Student = $request->Gender_Student;
        $db->Nationality_Student = $request->Nationality_Student;
        $db->Ethnic_Student = $request->Ethnic_Student;
        $db->Religion_Student = $request->Religion_Student;
        $db->Address_Student = $request->Address_Student;
        $db->Insurance_Code = $request->Insurance_Code;
        $db->School_Year = $request->School_Year;
        $db->Phone_Student = $request->Phone_Student;
        $db->Mail_Student = $request->Mail_Student;
        $db->Img_Student = $file;
        $db->Status_Student = $request->Status_Student;
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
        students::findOrFail($id)->delete();
        return "Deleted";
    }
}
