@extends('frontEnd.master')

@section('title')
    Div Solutions
@endsection



@section('body-content')

<!-- facebook comment  -->

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.1&appId=876574439182409&autoLogAppEvents=1';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>


     
     <!-- post details start -->
				
	<h3>{!! $postDetails->title !!}</h3><br>

	<p>{!! $postDetails->post_body !!}</p>
		
	<!-- post details end -->



		<!-- comments	 -->
		<!-- <div class="comment">
					<h3>Leave a Comment</h3>
					<div class=" comment-bottom">
						<form>
							<input type="text" placeholder="Name">
							<input type="text" placeholder="Email">
							<input type="text" placeholder="Subject">
							<textarea placeholder="Message" required=""></textarea>
							<input type="submit" value="Send">
						</form>
					</div>
				</div> -->


<!-- facebook comment -->
<!-- <div class="fb-comments" data-href="{{Request::url()}}" data-numposts="5"></div> -->
		
		<div class="fb-comments" data-href="{{Request::url()}}" data-width="750" data-numposts="5"></div>

@endsection


