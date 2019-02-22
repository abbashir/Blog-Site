@extends('frontEnd.master')

@section('title')
    Div Solutions
@endsection



@section('body-content')


    @foreach($posts as $post)
           
       <?php
        $category = strtolower($post->category);

       ?>    

          
     
     <!-- post start -->
			 <div class="post-body"> <!-- before its was tc-ch -->
				
					<div class="tch-img">
						<a href="{{url('/post/'.$post->title)}}">
					<img src="{{asset('public/storage/post/'.$post->photo)}}" class="img-responsive" alt=""/></a>
					</div>
             <div class="tc-ch-Inner">
					<h3><a href="{{url('/post/'.$post->title)}}">
						{!! $post->title !!}</a></h3>   

						<p>{{$post->sub_title}}</p>
					
						<div class="blog-poast-info">
							<ul>
								<li><i class="glyphicon glyphicon-th-list"> </i><a class="admin" href="">{{$post->category}}</a></li>
								<li><i class="glyphicon glyphicon-calendar"> </i>{{ Carbon\Carbon::parse($post->created_at)->format('d-m-Y') }}</li>
								<li><i class="glyphicon glyphicon-comment"> </i><a class="p-blog" href="">3 Comments </a></li>
							</ul>
						</div>
			    </div>		
			</div>
			<div class="clearfix"></div>
			<!-- post end -->
   @endforeach
			{{ $posts->links() }}
   

		
@endsection

