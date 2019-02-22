@extends('admin.master')

@section('title')
Create Post
@endsection

@section('body-content')

   <div class="row">
	    <div class="col-lg-12">
	        <div class="panel panel-default">
	            <div class="panel-heading">
	                Create Post 

	            </div>
	            <div class="panel-body">
	                <div class="row">
	                    <div class="col-lg-12">
	<form role="form" method="POST" action="{{url('/updatePost')}}" enctype="multipart/form-data" name="updatepost">
	                         {{csrf_field()}}


      <div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">

                <label>Post Title</label>
                <input class="form-control" name="title" value="{{ old('title') }} {{count($errors) == true ? '' : $postByid->title}}">
                <span class="text-danger">{{ $errors->first('title') }} </span>


                <!-- pass id -->
			<input type="hidden" name="postId" class="form-control" value="{{$postByid->id}}">

			   <!-- pass photo name -->
			<input type="hidden" name="old_photo" class="form-control" value="{{$postByid->photo}}">
               
      </div>


      <div class="form-group {{ $errors->has('sub_title') ? 'has-error' : '' }}">

	        <label>Sub Title</label>
	       <textarea name="sub_title"  class="form-control" rows="3" required="required">{{ old('sub_title') }}{{count($errors) == true ? '' : $postByid->sub_title}}
	       </textarea>
	       <span class="text-danger">{{ $errors->first('sub_title') }} </span>

	   </div>


	                          
	                           
	  <div class="form-group {{ $errors->has('photo') ? 'has-error' : '' }}">
	                                <label>photo</label>
	                                <input type="file" name="photo" >
                <span class="text-danger">{{ $errors->first('photo') }} </span>

	   </div>


             
	    <div class="form-group {{ $errors->has('post_body') ? 'has-error' : '' }}">

	        <label>Post Body</label>
	       <textarea name="post_body" id="input" class="ckeditor" rows="3" required="required">{{ old('post_body') }} 
	       	{{count($errors) == true ? '' : $postByid->post_body}}
	       </textarea>
	       <span class="text-danger">{{ $errors->first('post_body') }} </span>

	    </div>

	      <div class="form-group {{ $errors->has('category') ? 'has-error' : '' }}">
                            <label>Category 
                        <span style="font-size: 12px; color: red; padding-left: 30px;">previous selected category : {{$postByid->category}}</span>    	
                            </label>
                            <select class="form-control" name="category" required="required">
                                <option selected>Please Again select category</option>
                                


                                @foreach($categories as $category)
                                <option value="{{$category->category}}">{{$category->category}}
                                </option>
                                @endforeach
                                
                                
                            </select>
	       <span class="text-danger">{{ $errors->first('category') }} </span>

           </div>
	                         
	                           
	                        
         

	                          
	                            <button type="submit" name="post_btn" class="btn btn-default col-lg-offset-4">Update Post</button>
	                           
	                        </form>
	                    </div>
	                    <!-- /.col-lg-6 (nested) -->
	                  
	                    <!-- /.col-lg-6 (nested) -->
	                </div>
	                <!-- /.row (nested) -->
	            </div>
	            <!-- /.panel-body -->
	        </div>
	        <!-- /.panel -->
	    </div>
                <!-- /.col-lg-12 -->
            </div>



   


@endsection

