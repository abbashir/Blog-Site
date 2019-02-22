<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use DB;

class CategoryController extends Controller
{
    public function category_func()
    {    
    	//query
    	$categories = DB::table('categories')->get();

    	//return view
    	return view('admin.pages.category',compact('categories'));
    }

    public function storeCategory(Request $request)
    {
    	//validation
    	 $this->validate(request(),[
        
        'category_name' => 'required',

         ]);


    	//query
    	DB::table('categories')->insert([
       'category' => $request->category_name,
        "created_at" =>  \Carbon\Carbon::now(), # \Datetime()
        "updated_at" => \Carbon\Carbon::now(),  # \Datetime()
       
        ]);


    	//redirect
    	return redirect('/admin/category')->with('message',"Category insert successfull.");
    }

    //delete category
    public function category_delete($id)
    {
        //query
        DB::table('categories')->where('id', '=', $id)->delete();

        //redirect
        return redirect('/admin/category')->with('message',"Category delete successfull.");

    }

    //front end show post by category
    public function post_by_category($category)
    {
        $postByCat = DB::table('posts')->where('category', '=', $category)->latest()->paginate(3);

        $categories = DB::table('posts')->latest()->take(5)->get();


        return view('frontEnd.pages.post_by_category',compact('postByCat','categories'));
    }
}
