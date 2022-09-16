<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Course;

class HomeController extends Controller
{
    public function home(){
        $courses = Course::take(3)->get();
        return view('frontend.home',compact('courses'));
    }
}
