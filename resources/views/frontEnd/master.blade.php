<!DOCTYPE HTML>
<html>
<head>
<title>@yield('title')</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Business_Blog Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<!-- {{asset('public/frontEnd/')}} -->
<link href="{{asset('public/frontEnd/css/bootstrap.css')}}" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="{{asset('public/frontEnd/css/google-font.css')}}" rel='stylesheet' type='text/css'>
<link href="{{asset('public/frontEnd/css/google-others-font.css')}}" rel='stylesheet' type='text/css'>

<link href="{{asset('public/frontEnd/css/style.css')}}" rel='stylesheet' type='text/css' />	
<script src="{{asset('public/frontEnd/js/jquery-1.11.1.min.js')}}"></script>
<script src="{{asset('public/frontEnd/js/bootstrap.min.js')}}"></script>

<!-- prisom file -->
<link href="{{asset('public/frontEnd/css/prism.css')}}" rel='stylesheet' type='text/css' />	
<script src="{{asset('public/frontEnd/js/prism.js')}}"></script>

<!-- new css -->
<link href="{{asset('public/frontEnd/css/mycss.css')}}" rel='stylesheet' type='text/css' />	


</head>
<body>
	<!--start-header-->
           @include('frontEnd.includes.header')
	<!-- end header -->



<!--navigiation start-->
           @include('frontEnd.includes.nav')

<!--navigiation-end-->


<!-- start body content -->
<div class="container" style="margin-top: 50px;">

<div class="row">
	<!-- content -->
	<div class="col-md-8">
	  @yield('body-content')
			
	</div>
<!-- /content -->


<!-- side bar start -->
	<div class="col-md-4">
		 
     @include('frontEnd.includes.sidebar')
			
	
	</div>
<!-- side bar end -->

	
</div>
	
</div>
<!-- end body content -->


	
    <!-- footer-start -->
     @include('frontEnd.includes.footer')
			
	<!-- footer-end -->

	<!-- back to top button -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript">
var scrolltotop={setting:{startline:100,scrollto:0,scrollduration:1e3,fadeduration:[500,100]},controlHTML:'<img src="https://i1155.photobucket.com/albums/p559/scrolltotop/arrow7.png" />',controlattrs:{offsetx:5,offsety:5},anchorkeyword:"#top",state:{isvisible:!1,shouldvisible:!1},scrollup:function(){this.cssfixedsupport||this.$control.css({opacity:0});var t=isNaN(this.setting.scrollto)?this.setting.scrollto:parseInt(this.setting.scrollto);t="string"==typeof t&&1==jQuery("#"+t).length?jQuery("#"+t).offset().top:0,this.$body.animate({scrollTop:t},this.setting.scrollduration)},keepfixed:function(){var t=jQuery(window),o=t.scrollLeft()+t.width()-this.$control.width()-this.controlattrs.offsetx,s=t.scrollTop()+t.height()-this.$control.height()-this.controlattrs.offsety;this.$control.css({left:o+"px",top:s+"px"})},togglecontrol:function(){var t=jQuery(window).scrollTop();this.cssfixedsupport||this.keepfixed(),this.state.shouldvisible=t>=this.setting.startline?!0:!1,this.state.shouldvisible&&!this.state.isvisible?(this.$control.stop().animate({opacity:1},this.setting.fadeduration[0]),this.state.isvisible=!0):0==this.state.shouldvisible&&this.state.isvisible&&(this.$control.stop().animate({opacity:0},this.setting.fadeduration[1]),this.state.isvisible=!1)},init:function(){jQuery(document).ready(function(t){var o=scrolltotop,s=document.all;o.cssfixedsupport=!s||s&&"CSS1Compat"==document.compatMode&&window.XMLHttpRequest,o.$body=t(window.opera?"CSS1Compat"==document.compatMode?"html":"body":"html,body"),o.$control=t('<div id="topcontrol">'+o.controlHTML+"</div>").css({position:o.cssfixedsupport?"fixed":"absolute",bottom:o.controlattrs.offsety,right:o.controlattrs.offsetx,opacity:0,cursor:"pointer"}).attr({title:"Scroll to Top"}).click(function(){return o.scrollup(),!1}).appendTo("body"),document.all&&!window.XMLHttpRequest&&""!=o.$control.text()&&o.$control.css({width:o.$control.width()}),o.togglecontrol(),t('a[href="'+o.anchorkeyword+'"]').click(function(){return o.scrollup(),!1}),t(window).bind("scroll resize",function(t){o.togglecontrol()})})}};scrolltotop.init();</script>
<noscript>Not seeing a <a href="https://www.scrolltotop.com/">Scroll to Top Button</a>? Go to our FAQ page for more info.</noscript>

</body>
</html>