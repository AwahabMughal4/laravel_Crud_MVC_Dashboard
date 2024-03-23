<?php

namespace App\Http\Controllers;
use App\Models\applicant;
use Illuminate\Http\Request;


class applicantController extends Controller
{
function loadpage(){

      $myvariable = applicant::all();
    return view('layouts.contentpage',['applicants'=> $myvariable]);
}
function store(Request $request){
    $show = new Applicant;
    $show->title = $request->title;
    $show->save();
    return redirect('/');
}
}
