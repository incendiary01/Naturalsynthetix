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
		  
		  <!--main content--> 
		  <div id="content" class="col-xs-12">
			@yield('content')
		  </div>
		  
		  <!--JavaScript--> 
		  <div id="javascript" class="invisible">
			@include('includes.javascript')
		  </div>
		  
	    </div>
	 </div>
   </body>
</html>
