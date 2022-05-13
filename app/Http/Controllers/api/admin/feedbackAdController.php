<?php

namespace App\Http\Controllers\api\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Helpers\Helper;
use App\Models\feedback;

class feedbackAdController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return feedback::all();
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
        $db = new feedback();
        $db->ID_Feedback = Helper::IDGenerator(new feedback, 'ID_Feedback', 3, 'AD');
        $db->ID_Admin = $request->ID_Admin;
        $db->ID_Student = $request->ID_Student;
        $db->Title = $request->Title;
        $db->Content = $request->Content;
        $db->Img = "11";
        // $db->file_path = "11";
        $db->Status_Reply = $request->Status_Reply;
        $db->Reply_Content = $request->Reply_Content;
        $db->Reply_Image = $request->Reply_Image;
        // $db->Reply_file_path = $request->Reply_file_path;
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
        return feedback::findOrFail($id);
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

        $db = feedback::findOrFail($id);
        $db->Title = $request->Title;
        $db->Content = $request->Content;
        $db->Img = $file;
        $db->Status_Reply = $request->Status_Reply;
        $db->Reply_Content = $request->Reply_Content;
        $db->Reply_Image = $request->Reply_Image;
        // $db->Reply_file_path = $request->Reply_file_path;
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
        feedback::findOrFail($id)->delete();
        return "Deleted";
    }
}
