<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;
use DB;
use App\post;
class PostController extends Controller
{
    // public function post_details()
    // {
    // 	return view('frontEnd.pages.post_Details');
    // }

    //store post
    public function store_post(Request $request)
    {
    	//validation
    	 $this->validate(request(),[
        
        'title' => 'required',
        'sub_title' => 'required',
        'photo' => 'required',
        'post_body' => 'required',
        'category' => 'required',

         ]);

         //image upload
         if ($request->hasFile('photo')) {
         	$photo_name = $request->photo->getClientOriginalName();
         	$photo_size = $request->photo->getClientSize();
            $photo_name = date("y_i_s_").$photo_name;
                     
         	$request->photo->storeAs('public/post',$photo_name);

        //query
    	DB::table('posts')->insert([
       'title' => $request->title,
       'sub_title' => $request->sub_title,
       'photo' => $photo_name,
       'post_body' => $request->post_body,
       'category' => $request->category,
      
        "created_at" =>  \Carbon\Carbon::now(), # \Datetime()
        "updated_at" => \Carbon\Carbon::now(),  # \Datetime()
       
        ]);




         	//return $request->photo->storeAs('public','shu.png');
         	//Storage::putFile('public',$request->file('photo'));
         	//return Storage::deleteDirectory('public/photo');

         } else {
         	return 'no file selected';
         }
         

    	//redirect
    	return redirect('/admin/create-post')->with('message',"post insert successfull.");
    }


    //manage post
    public function post_manage()
    {
        $posts = DB::table('posts')->get();
        return view('admin.pages.manage_post',compact('posts'));
    }




    //delete post
    public function post_delete($id)
    {
        //delete old photo
        $postByid = DB::table('posts')->where('id', '=', $id)->first();
        
         $old_photo = $postByid->photo;

         Storage::delete("public/post/$old_photo");

       //query
        $delete = DB::table('posts')->where('id', '=', $id)->delete();

         
       

        //redirect
        return redirect('/admin/manage-post')->with('message',"Post delete successfull.");
    }




    //post edit
    public function post_edit($id)
    {
        $postByid = DB::table('posts')->where('id', '=', $id)->first();
        $categories = DB::table('categories')->get();


                return view('admin.pages.edit_post',compact('postByid','categories'));
    }


    //post update
    public function post_update(Request $request)
    {

        //validation
         $this->validate(request(),[
        
        'title' => 'required',
        'sub_title' => 'required',
        'photo' => 'required',
        'post_body' => 'required',
        'category' => 'required',

         ]);

        
        //image 
         $photo_name = $request->photo->getClientOriginalName();
         $photo_size = $request->photo->getClientSize();
         $photo_name = date("y_i_s_").$photo_name;

         $request->photo->storeAs('public/post',$photo_name);

         //delete old photo
         $old_photo = $request->old_photo;
         Storage::delete("public/post/$old_photo");


        //query
         DB::table('posts')
            ->where('id', $request->postId)
            ->update([
           'title' => $request->title,
           'sub_title' => $request->sub_title,
           'photo' => $photo_name,
           'post_body' => $request->post_body,
           'category' => $request->category,
           "created_at" =>  \Carbon\Carbon::now(), # \Datetime()
           "updated_at" => \Carbon\Carbon::now(),  # \Datetime()

        ]);

         //redirect
        return redirect('/admin/manage-post')->with('message',"post update successfull.");
    }



    //post details
    public function post_details($title)
    {
        //query
        $postDetails = DB::table('posts')->where('title', '=', $title)->first();
        $categories = DB::table('posts')->latest()->take(5)->get();
        
    return view('frontEnd.pages.post_Details',compact('postDetails','categories'));
    }


    public function image_upload()
    {
    	//$url = Storage::url('shu.png');
    	//$url = "public".$url;
    	//return "<img src='".$url."'/>";
    	//return $url;

    	//return Storage::get('public/shu.png');

        // if (Storage::delete('public/post/food.jpg')) {
        //     return "deleted";
        // }

         $posts = DB::table('posts')->get();
        return view('admin.pages.test',compact('posts'));
      
        return view('admin.pages.test');
    }
}
