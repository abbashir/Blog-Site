       <div class="blo-top">
					<div class="tech-btm">
					<h4 class="text-center">Recent Post</h4>
					<hr>
					@foreach($categories as $category)

					  <li><a href="{{url('/post/'.$category->title)}}" class="bbb">
					  	{{$category->title}}
					  </a></li><hr>  

					@endforeach

					</div>
        </div>

				<div class="blo-top">
					<div class="tech-btm">
					<h4 class="text-center">Popular Post</h4>
					<hr>
					@foreach($populars as $popular)

					  <li><a href="{{url('/post/'.$popular->title)}}" class="bbb">
					  	{{$popular->title}}</a></li><hr>  

					@endforeach

					</div>
				</div>


				



				<div class="blo-top">
					<div class="tech-btm">
					<h4>Sign up to our newsletter</h4>
					<p>Sign up here to get the latest post</p>
						<div class="name">
							<form>
								<input type="text" placeholder="Email" required="">
							</form>
						</div>	
						<div class="button">
							<form>
								<input type="submit" value="Subscribe">
							</form>
						</div>
							<div class="clearfix"> </div>
					</div>
				</div>

				
			