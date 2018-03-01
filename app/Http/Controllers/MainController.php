<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use App\Department;

use App\News;

class MainController extends Controller
{
    // public function index(){
    //     return view('Layout/mainLayout');
    // }

    public function mainPage(){
        $title = 'Home';
        return view('pages/mainPage')->with([
                                            'title' => $title
                                            ]);
    }

    public function departments(){
        $title = 'Departments';
        $departments = Department::select()->get();
        $departmens_columns = DB::table("INFORMATION_SCHEMA.COLUMNS")->select('COLUMN_NAME')->where('TABLE_NAME','departments')->get();
        return view('pages/department/departments')->with([
                                                'title' => $title,
                                                'departments' => $departments,
                                                'departments_columns' => $departmens_columns
                                               ]);

    }

    public function allNews(){
        $title = 'News';
        $allNews = News::select('name', 'description', 'nameurl', 'category', 'time', 'image')->take(5)->get();

        return view('pages/news/AllNews')->with([
                                                'allNews' => $allNews,
                                                'title' => $title
                                                ]);
    }

    public function fullNews($news_name){
        $title = 'News';
        $fullNews = News::select('name', 'text', 'nameurl', 'image')->where('nameurl', $news_name)->first();

        return view('pages/news/fullNews')->with([
                                                'fullNews' => $fullNews,
                                                'title' => $title
                                                ]);
    }

}
