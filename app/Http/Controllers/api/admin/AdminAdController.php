<?php

namespace App\Http\Controllers\api\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Helpers\Helper;
use App\Models\admins;

class AdminAdController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return admins::all();
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
        // $request()->validate([
        //     'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        // ]);

        // $image = $request->file('image');
        // $originalname = $image->getClientOriginalName();
        // $path = $image->move('uploads/images/', $originalname);


        // $name = $request->file('image')->getClientOriginalName();
        // $path = $request->file('image')->store('public/images');

        // if ($request->file('image') == null) {
        //     $file = "";
        // } else {
        //     $file = $request->file('image')->store('images');
        // }

        // if ($request->hasFile('image')) {
        //     $image = $request->file('image');
        //     $storedPath = $image->move('images', $image->getClientOriginalName());
        // }
        // if ($request->hasFile('image')) {
        //     $data = $request->input('image');
        //     $photo = $request->file('image')->getClientOriginalName();
        //     $destination = base_path() . '/public/uploads';
        //     $request->file('image')->move($destination, $photo);
        // }

        $db = new admins();
        $db->ID_Admin = Helper::IDGenerator(new admins, 'ID_Admin', 3, 'AD');
        $db->ID_Permission = 'Q001';
        $db->Name_Admin = $request->Name_Admin;
        $db->Birth_Admin = date('Y-m-d', strtotime($request->Birth_Admin) + 100000);
        $db->Gender_Admin = $request->Gender_Admin;
        $db->Address_Admin = $request->Address_Admin;
        $db->Mail_Admin = $request->Mail_Admin;
        $db->Phone_Admin = $request->Phone_Admin;
        $db->Img_Admin = "11";
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
        return admins::findOrFail($id);
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

        $db = admins::findOrFail($id);
        $db->Name_Admin = $request->Name_Admin;
        $db->Birth_Admin = date('Y-m-d', strtotime($request->Birth_Admin) + 100000);
        $db->Gender_Admin = $request->Gender_Admin;
        $db->Address_Admin = $request->Address_Admin;
        $db->Mail_Admin = $request->Mail_Admin;
        $db->Phone_Admin = $request->Phone_Admin;
        $db->Img_Admin = $file;
        //$db->Pass_Admin = $request->Pass_Admin;
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
        admins::findOrFail($id)->delete();
        return "Deleted";
    }
}
