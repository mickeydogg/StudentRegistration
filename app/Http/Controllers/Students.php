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
            'name' => 'required|min:7',
            'email' => 'required|min:7',
            'mobile' => 'required|min:10',
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
        function delete($id)
        {

        $data = StudentDetail::find($id);
        $data->delete();
        return redirect('list');
    
        }

        function edit($id)
        {
            $data=StudentDetail::find($id);
            return view('update',['data'=>$data]);
        }

        function update(Request $req)
        {
           $data=StudentDetail::find($req->id);
           $data->name = $req->name;
           $data->email = $req->email;
           $data->mobile = $req->mobile;
           $data->status = $req->status;
           $data->class = $req->class;
           $data->gender = $req->gender;
           $data->subject = $req->subject;
           $data->save();
           return redirect('list');
        }
          
    }

