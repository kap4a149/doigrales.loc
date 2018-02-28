<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use App\Department;

class MainController extends Controller
{
    // public function index(){
    //     return view('Layout/mainLayout');
    // }

    public function mainPage(){
        return view('pages/mainPage');
    }

    public function departments(){
        $departments = Department::select()->get();
        $departmens_columns = DB::table("INFORMATION_SCHEMA.COLUMNS")->select('COLUMN_NAME')->where('TABLE_NAME','departments')->get();
        return view('pages/departments')->with([
                                                'departments' => $departments,
                                                'departments_columns' => $departmens_columns
                                               ]);

    }
}
