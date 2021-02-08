<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StudentDetail;
class Students extends Controller
{
    //
    function index(Request $req)
    {
    $data=  StudentDetail::all();
    return view('list',['StudentDetails'=>$data]);
    }
    function create()
    {
        return view('add');
    }
    function store(Request $req)
    {
        $req->validate([
            'name' => 'required',
            'email' => 'required',
            'mobile' => 'required',
            'status' => 'required',
            'class' => 'required',
            'gender' => 'required',
            'subject' => 'required'
        ]);
        $StudentDetail = new StudentDetail;
        $StudentDetail->name = $req->name;
        $StudentDetail->email = $req->email;
        $StudentDetail->mobile = $req->mobile;
        $StudentDetail->status = $req->status;
        $StudentDetail->class = $req->class;
        $StudentDetail->gender = $req->gender;
        $StudentDetail->subject = $req->subject;
        $StudentDetail->save();
        $data = StudentDetail::all();
        return view('list', ['StudentDetails' => $data]);
    }
}
