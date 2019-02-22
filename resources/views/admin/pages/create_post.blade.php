@extends('admin.master')

@section('title')
Create Post
@endsection

@section('body-content')
<?php $m = Session::get('message') ?>
@if (@isset ($m))
<div class="alert alert-success no-border mb-2" role="alert">
    <strong>Well done!</strong> {{$m}}
  </div>
@endif

   <div class="row">
	    <div class="col-lg-12">
	        <div class="panel panel-default">
	            <div class="panel-heading">
	                Create Post
	            </div>
	            <div class="panel-body">
	                <div class="row">
	                    <div class="col-lg-12">
	<form role="form" method="POST" action="{{url('/storePost')}}" enctype="multipart/form-data">
	                         {{csrf_field()}}


      <div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">

                <label>Post Title</label>
                <input class="form-control" name="title" value="{{ old('title') }}">
                <span class="text-danger">{{ $errors->first('title') }} </span>
               
      </div>


      <div class="form-group {{ $errors->has('sub_title') ? 'has-error' : '' }}">

	        <label>Sub Title</label>
	       <textarea name="sub_title"  class="form-control" rows="3" required="required">{{ old('post_body') }}</textarea>
	       <span class="text-danger">{{ $errors->first('sub_title') }} </span>

	   </div>


	                          
	                           
	  <div class="form-group {{ $errors->has('photo') ? 'has-error' : '' }}">
	                                <label>photo</label> <span>(1024 x 570)</span>
	                                <input type="file" name="photo" >
                <span class="text-danger">{{ $errors->first('photo') }} </span>

	   </div>


             
	    <div class="form-group {{ $errors->has('post_body') ? 'has-error' : '' }}">

	        <label>Post Body</label>
	       <textarea name="post_body" id="input" class="ckeditor" rows="3" required="required">{{ old('post_body') }}</textarea>
	       <span class="text-danger">{{ $errors->first('post_body') }} </span>

	    </div>
	                         
	                           
	                        
          <div class="form-group {{ $errors->has('category') ? 'has-error' : '' }}">
                            <label>Category</label>
                            <select class="form-control" name="category" required="required">
                                <option selected>select category</option>
                                


                                @foreach($categories as $category)
                                <option value="{{$category->category}}">{{$category->category}}
                                </option>
                                @endforeach
                                
                                
                            </select>
	       <span class="text-danger">{{ $errors->first('category') }} </span>

           </div>


	                          
	                            <button type="submit" name="post_btn" class="btn btn-default col-lg-offset-4">Submit Post</button>
	                           
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