<!DOCTYPE html>
<html>
   <head>
	 @include('includes.head')
   </head>
   <body>
	 <div id="wrapper">

	    <header class="row">
		  @include('includes.header')
	    </header>

	    <div id="main">

		  <!--sidebar content--> 
		  <!--@include('includes.sidebar')-->

		  <!--main content--> 
		  <div id="content" class="col-md-12">
			@yield('content')
		  </div>

		  <!--JavaScript--> 
		  <div id="javascript" class="invisible">
			@include('includes.javascript')
		  </div>

	    </div>

	    <!--<footer class="row">-->
		  <!--@include('includes.footer')-->
	    <!--</footer>-->

	 </div>
   </body>
</html>
