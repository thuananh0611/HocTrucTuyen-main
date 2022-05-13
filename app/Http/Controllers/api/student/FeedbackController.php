<?php

namespace App\Http\Controllers\api\student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Helpers\Helper;
use App\Models\feedback;

class FeedbackController extends Controller
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
        $db->ID_Admin = $request->ID_Admin;
        $db->ID_Student = $request->ID_Student;
        $db->Title = $request->Title;
        $db->Feedback_Content = $request->Feedback_Content;
        if ($request->hasFile('file')) {
            $request->file->store('feedback', 'public');
            $db->Feedback_Image = $request->file->hashName();
        } else {
            $db->Feedback_Image = '';
        }
        $db->Reply_Status = 'Chưa hồi đáp';
        $db->Reply_Content = '';
        $db->Reply_Image = '';
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
        $db = feedback::findOrFail($id);
        $db->Title = $request->Title;
        $db->Feedback_Content = $request->Feedback_Content;
        if ($request->hasFile('file')) {
            $request->file->store('feedback', 'public');
            $db->Feedback_Image = $request->file->hashName();
        }
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
