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

<!-- Trigger the modal with a button -->
      <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Add Category</button>
      <br> <br>

      <div class="container">
 
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Add Category</h4>
        </div>
        
        <div class="modal-body"> 
          {!! Form::open(['url' => '/storeCategory']) !!} <!-- use collective laravel pac-->
     <div class="form-group {{ $errors->has('category_name') ? 'has-error' : '' }}">

                 {{Form::label('text', 'Category Name:')}}
                
                 {{Form::text('category_name',$value=null,['class'=>'form-control','placeholder'=>'Enter Category Name','autofocus'])}}
         <span class="text-danger">{{ $errors->first('category_name') }}</span>

     </div>
      
        </div>

        
         <div class="modal-footer">
          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary" name="brand">Submit</button>
        </div>

      {!! Form::close() !!}
    
      </div>
      
    </div>
  </div>
  
</div>

<!-- modal end -->

   <div class="row">
	    <div class="col-lg-8 col-lg-offset-2">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            List of category
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>category Name</th>
                                            <th>Action</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                <?php $i = 1; ?>
                               @foreach($categories as $category)         
                                       
                                        <tr>
                                            <td>{{$i++}}</td>
                                            <td>{{$category->category}}</td>

                        <td>

                          <a href="{{url('/category/delete/'.$category->id)}}" class="btn btn-warning btn-circle" onclick="return confirm('Are you sure delete this category ?')">

                            <i class="fa fa-trash-o"></i>
                          </a>
                                             	
                       </td>

                       <td>
                         <a href="" class="btn btn-primary btn-circle">
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

    
