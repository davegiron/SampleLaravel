<?php

namespace App\Http\Controllers;

use App\Models\Students;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(){

        $data = Students::where('gender', 'Male')->orderBy('first_name', 'asc')->get();
        return view('students.index', ['data'=>$data]);
    }
}
