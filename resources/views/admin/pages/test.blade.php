
   
     @foreach($posts as $post)
       
     {{ Carbon\Carbon::parse($post->created_at)->format('Y-m-d') }}<br>
     @endforeach
     