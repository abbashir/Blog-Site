<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class DashboardController extends Controller
{
    public function dashboard_func()
    {
    	  return view('admin.pages.dashboard');

    }

    public function create_post()
    {
        $categories = DB::table('categories')->get();
    	  return view('admin.pages.create_post',compact('categories'));

    }

    public function test()
    {
        $posts = DB::table('posts')->get();
    	return view('admin.pages.test',compact('posts'));
    }

}
