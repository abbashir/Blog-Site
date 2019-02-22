<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\post;
class HomeController extends Controller
{
    public function Home_Page()
    {
    	$posts = DB::table('posts')->latest()->paginate(3);
    	$categories = DB::table('posts')->latest()->take(5)->get();
    	return view('frontEnd.pages.home',compact('posts','categories'));
    }
    
}
