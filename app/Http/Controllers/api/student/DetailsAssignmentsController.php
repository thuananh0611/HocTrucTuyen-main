<?php

namespace App\Http\Controllers\api\student;

use App\Http\Controllers\Controller;
use App\Models\detailsAssignments;
use App\Helpers\Helper;
use Illuminate\Http\Request;
use PHPUnit\Framework\Constraint\Count;

class DetailsAssignmentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return detailsAssignments::all();
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
        $db = new detailsAssignments();
        $db->ID_Student = $request->ID_Student;
        $db->ID_Test = $request->ID_Test;

        // if (count($request->details_assignments).count > 0) {
        // foreach ($request->details_assignments as $item) {
            // $item->ID_Student = $request->ID_Student;

            $db->ID_Question = $request->details_assignments->ID_Question;
            $db->Answer_Student = $request->details_assignments->Answer_Student;
        // }
        // };
        // for ($i = 0; $i < count($request->details_assignments); $i++) {
        //     detailsAssignments::create([
        //         'ID_Question' => $request->ID_Question[$i],
        //         'Answer_Student' => $request->Answer_Student[$i],
        //     ]);
        // }

        $db->ID_Question = $request->ID_Question;
        $db->Answer_Student = $request->Answer_Student;
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
        return detailsAssignments::findOrFail($id);
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
