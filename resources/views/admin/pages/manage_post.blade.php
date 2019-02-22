@extends('admin.master')

@section('title')
Category
@endsection

@section('body-content')

<?php $m = Session::get('message') ?>
@if (@isset ($m))
<div class="alert alert-success no-border mb-2" role="alert">
    <strong>Well done!</strong> {{$m}}
  </div>
@endif


   <div class="row">
	    <div class="col-lg-10 col-lg-offset-1">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            List of Post
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Post title</th>
                                            <th>Post Category</th>

                                            <th>Action</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                <?php $i = 1; ?>
                               @foreach($posts as $post)         
                                       
                                        <tr>
                                            <td>{{$i++}}</td>
                                            <td>{{$post->title}}</td>
                                            <td>{{$post->category}}</td>


                        <td>
                             <a href="{{url('/post/delete/'.$post->id)}}" class="btn btn-warning btn-circle" onclick="return confirm('Are you sure delete this post ?')">

                            <i class="fa fa-trash-o"></i>
                          </a>                  	
                       </td>

                       <td>
                           <a href="{{url('/post/edit/'.$post->id)}}" class="btn btn-primary btn-circle">
                           <i class="fa fa-edit"></i>
                          </a>
                        </td>
                                        </tr>
                                @endforeach        

                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
@endsection

    
