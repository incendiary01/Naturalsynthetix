@extends('layouts.default')
@section('content')
<div id="page-wrapper">
   <div class="row">
	 <div class="col-lg-12">
	    <h1 class="page-header">Dashboard</h1>
	 </div>
	 <!-- /.col-lg-12 -->
   </div>
   <!-- /.row -->
   <div class="row">
	 <div class="col-lg-3 col-md-6">
	    <div class="panel panel-primary">
		  <div class="panel-heading">
			<div class="row">
			   <div class="col-xs-3">
				 <i class="fa fa-comments fa-5x"></i>
			   </div>
			   <div class="col-xs-9 text-right">
				 <div class="huge">26</div>
				 <div>New Comments!</div>
			   </div>
			</div>
		  </div>
		  <a href="#">
			<div class="panel-footer">
			   <span class="pull-left">View Details</span>
			   <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
			   <div class="clearfix"></div>
			</div>
		  </a>
	    </div>
	 </div>
	 <div class="col-lg-3 col-md-6">
	    <div class="panel panel-green">
		  <div class="panel-heading">
			<div class="row">
			   <div class="col-xs-3">
				 <i class="fa fa-tasks fa-5x"></i>
			   </div>
			   <div class="col-xs-9 text-right">
				 <div class="huge">12</div>
				 <div>New Tasks!</div>
			   </div>
			</div>
		  </div>
		  <a href="#">
			<div class="panel-footer">
			   <span class="pull-left">View Details</span>
			   <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
			   <div class="clearfix"></div>
			</div>
		  </a>
	    </div>
	 </div>
	 <div class="col-lg-3 col-md-6">
	    <div class="panel panel-yellow">
		  <div class="panel-heading">
			<div class="row">
			   <div class="col-xs-3">
				 <i class="fa fa-shopping-cart fa-5x"></i>
			   </div>
			   <div class="col-xs-9 text-right">
				 <div class="huge">124</div>
				 <div>New Orders!</div>
			   </div>
			</div>
		  </div>
		  <a href="#">
			<div class="panel-footer">
			   <span class="pull-left">View Details</span>
			   <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
			   <div class="clearfix"></div>
			</div>
		  </a>
	    </div>
	 </div>
	 <div class="col-lg-3 col-md-6">
	    <div class="panel panel-red">
		  <div class="panel-heading">
			<div class="row">
			   <div class="col-xs-3">
				 <i class="fa fa-support fa-5x"></i>
			   </div>
			   <div class="col-xs-9 text-right">
				 <div class="huge">13</div>
				 <div>Support Tickets!</div>
			   </div>
			</div>
		  </div>
		  <a href="#">
			<div class="panel-footer">
			   <span class="pull-left">View Details</span>
			   <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
			   <div class="clearfix"></div>
			</div>
		  </a>
	    </div>
	 </div>
   </div>
   <!-- /.row -->
   <div class="row">
	 <div class="col-lg-8">
	    <div class="panel panel-default">
		  <div class="panel-heading">
			<i class="fa fa-bar-chart-o fa-fw"></i> Area Chart Example
			<div class="pull-right">
			   <div class="btn-group">
				 <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
				    Actions
				    <span class="caret"></span>
				 </button>
				 <ul class="dropdown-menu pull-right" role="menu">
				    <li><a href="#">Action</a>
				    </li>
				    <li><a href="#">Another action</a>
				    </li>
				    <li><a href="#">Something else here</a>
				    </li>
				    <li class="divider"></li>
				    <li><a href="#">Separated link</a>
				    </li>
				 </ul>
			   </div>
			</div>
		  </div>
		  <!-- /.panel-heading -->
		  <div class="panel-body">
			<div id="morris-area-chart" style="position: relative; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);"><svg height="342" version="1.1" width="772" xmlns="http://www.w3.org/2000/svg" style="overflow: hidden; position: relative;"><desc style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Created with Raphaël 2.1.0</desc><defs style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></defs><text x="50.5" y="308" text-anchor="end" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">0</tspan></text><path fill="none" stroke="#aaaaaa" d="M63,308H747" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="50.5" y="237.25" text-anchor="end" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">7,500</tspan></text><path fill="none" stroke="#aaaaaa" d="M63,237.25H747" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="50.5" y="166.5" text-anchor="end" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">15,000</tspan></text><path fill="none" stroke="#aaaaaa" d="M63,166.5H747" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="50.5" y="95.75" text-anchor="end" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">22,500</tspan></text><path fill="none" stroke="#aaaaaa" d="M63,95.75H747" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="50.5" y="25" text-anchor="end" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">30,000</tspan></text><path fill="none" stroke="#aaaaaa" d="M63,25H747" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="620.7001670801478" y="320.5" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal" transform="matrix(1,0,0,1,0,7)"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2012</tspan></text><text x="317.3312237355071" y="320.5" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal" transform="matrix(1,0,0,1,0,7)"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2011</tspan></text><path fill="#7cb47c" stroke="none" d="M63,257.8807C82.10774138018328,252.69236666666666,120.32322414054985,241.92430907701018,139.43096552073314,237.12736666666666C158.54736469039543,232.32825074367685,196.78016302972003,226.0632520069808,215.89656219938232,219.49646666666666C234.8138322110273,212.99808534031413,272.64837223431726,186.8057303509781,291.56564224596224,184.86669999999998C310.26646752063186,182.9498553509781,347.6681180699712,202.66269737424625,366.3689433446408,204.07296666666667C385.47668472482405,205.51392237424625,423.6921674851907,195.31197573801433,442.79990886537394,196.27159999999998C461.91630803503625,197.23165907134765,500.1491063743609,228.78622565445028,519.2655055440232,211.7517C538.1827755556682,194.89461732111693,576.0173155789581,68.92819836728465,594.9345855906031,60.705166666666656C613.8431978127691,52.48589836728465,651.6604222571009,133.9253336597586,670.5690344792669,145.9825C689.6767758594501,158.16664199309193,727.8922586198167,154.748425,747,157.6704L747,308L63,308Z" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></path><path fill="none" stroke="#4da74d" d="M63,257.8807C82.10774138018328,252.69236666666666,120.32322414054985,241.92430907701018,139.43096552073314,237.12736666666666C158.54736469039543,232.32825074367685,196.78016302972003,226.0632520069808,215.89656219938232,219.49646666666666C234.8138322110273,212.99808534031413,272.64837223431726,186.8057303509781,291.56564224596224,184.86669999999998C310.26646752063186,182.9498553509781,347.6681180699712,202.66269737424625,366.3689433446408,204.07296666666667C385.47668472482405,205.51392237424625,423.6921674851907,195.31197573801433,442.79990886537394,196.27159999999998C461.91630803503625,197.23165907134765,500.1491063743609,228.78622565445028,519.2655055440232,211.7517C538.1827755556682,194.89461732111693,576.0173155789581,68.92819836728465,594.9345855906031,60.705166666666656C613.8431978127691,52.48589836728465,651.6604222571009,133.9253336597586,670.5690344792669,145.9825C689.6767758594501,158.16664199309193,727.8922586198167,154.748425,747,157.6704" stroke-width="3" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><circle cx="63" cy="257.8807" r="2" fill="#4da74d" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="139.43096552073314" cy="237.12736666666666" r="2" fill="#4da74d" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="215.89656219938232" cy="219.49646666666666" r="2" fill="#4da74d" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="291.56564224596224" cy="184.86669999999998" r="2" fill="#4da74d" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="366.3689433446408" cy="204.07296666666667" r="2" fill="#4da74d" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="442.79990886537394" cy="196.27159999999998" r="2" fill="#4da74d" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="519.2655055440232" cy="211.7517" r="2" fill="#4da74d" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="594.9345855906031" cy="60.705166666666656" r="2" fill="#4da74d" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="670.5690344792669" cy="145.9825" r="2" fill="#4da74d" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="747" cy="157.6704" r="2" fill="#4da74d" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><path fill="#a7b3bc" stroke="none" d="M63,282.8507333333333C82.10774138018328,277.1765833333333,120.32322414054985,265.12319508305023,139.43096552073314,260.15413333333333C158.54736469039543,255.18282008305022,196.78016302972003,245.80603333333332,215.89656219938232,243.0892333333333C234.8138322110273,240.4007333333333,272.64837223431726,240.71864155159187,291.56564224596224,238.53293333333335C310.26646752063186,236.37223321825854,347.6681180699712,228.73527071215938,366.3689433446408,225.7036C385.47668472482405,222.60596237882604,423.6921674851907,213.88719994526235,442.79990886537394,214.01569999999998C461.91630803503625,214.1442582785957,500.1491063743609,239.8618479930192,519.2655055440232,226.73183333333333C538.1827755556682,213.73858965968586,576.0173155789581,117.2267462806134,594.9345855906031,109.52266666666665C613.8431978127691,101.82211294728008,651.6604222571009,157.02553252106583,670.5690344792669,165.1133C689.6767758594501,173.28624085439915,727.8922586198167,172.20245,747,174.5655L747,308L63,308Z" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></path><path fill="none" stroke="#7a92a3" d="M63,282.8507333333333C82.10774138018328,277.1765833333333,120.32322414054985,265.12319508305023,139.43096552073314,260.15413333333333C158.54736469039543,255.18282008305022,196.78016302972003,245.80603333333332,215.89656219938232,243.0892333333333C234.8138322110273,240.4007333333333,272.64837223431726,240.71864155159187,291.56564224596224,238.53293333333335C310.26646752063186,236.37223321825854,347.6681180699712,228.73527071215938,366.3689433446408,225.7036C385.47668472482405,222.60596237882604,423.6921674851907,213.88719994526235,442.79990886537394,214.01569999999998C461.91630803503625,214.1442582785957,500.1491063743609,239.8618479930192,519.2655055440232,226.73183333333333C538.1827755556682,213.73858965968586,576.0173155789581,117.2267462806134,594.9345855906031,109.52266666666665C613.8431978127691,101.82211294728008,651.6604222571009,157.02553252106583,670.5690344792669,165.1133C689.6767758594501,173.28624085439915,727.8922586198167,172.20245,747,174.5655" stroke-width="3" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><circle cx="63" cy="282.8507333333333" r="2" fill="#7a92a3" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="139.43096552073314" cy="260.15413333333333" r="2" fill="#7a92a3" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="215.89656219938232" cy="243.0892333333333" r="2" fill="#7a92a3" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="291.56564224596224" cy="238.53293333333335" r="2" fill="#7a92a3" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="366.3689433446408" cy="225.7036" r="2" fill="#7a92a3" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="442.79990886537394" cy="214.01569999999998" r="2" fill="#7a92a3" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="519.2655055440232" cy="226.73183333333333" r="2" fill="#7a92a3" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="594.9345855906031" cy="109.52266666666665" r="2" fill="#7a92a3" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="670.5690344792669" cy="165.1133" r="2" fill="#7a92a3" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="747" cy="174.5655" r="2" fill="#7a92a3" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><path fill="#2577b5" stroke="none" d="M63,282.8507333333333C82.10774138018328,282.5866,120.32322414054985,284.44200846734617,139.43096552073314,281.7942C158.54736469039543,279.14519180067947,196.78016302972003,262.8357682373473,215.89656219938232,261.66346666666664C234.8138322110273,260.5033765706806,272.64837223431726,274.71556887226694,291.56564224596224,272.4646333333333C310.26646752063186,270.2394522056003,347.6681180699712,245.9788035264484,366.3689433446408,243.75900000000001C385.47668472482405,241.49089519311505,423.6921674851907,252.16698982634958,442.79990886537394,254.513C461.91630803503625,256.8600731596829,500.1491063743609,273.6770883071554,519.2655055440232,262.53133333333335C538.1827755556682,251.501679973822,576.0173155789581,172.73112096780346,594.9345855906031,165.81136666666666C613.8431978127691,158.8947793011368,651.6604222571009,199.39613870037198,670.5690344792669,207.18596666666667C689.6767758594501,215.05783036703866,727.8922586198167,223.14009166666668,747,228.45813333333334L747,308L63,308Z" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></path><path fill="none" stroke="#0b62a4" d="M63,282.8507333333333C82.10774138018328,282.5866,120.32322414054985,284.44200846734617,139.43096552073314,281.7942C158.54736469039543,279.14519180067947,196.78016302972003,262.8357682373473,215.89656219938232,261.66346666666664C234.8138322110273,260.5033765706806,272.64837223431726,274.71556887226694,291.56564224596224,272.4646333333333C310.26646752063186,270.2394522056003,347.6681180699712,245.9788035264484,366.3689433446408,243.75900000000001C385.47668472482405,241.49089519311505,423.6921674851907,252.16698982634958,442.79990886537394,254.513C461.91630803503625,256.8600731596829,500.1491063743609,273.6770883071554,519.2655055440232,262.53133333333335C538.1827755556682,251.501679973822,576.0173155789581,172.73112096780346,594.9345855906031,165.81136666666666C613.8431978127691,158.8947793011368,651.6604222571009,199.39613870037198,670.5690344792669,207.18596666666667C689.6767758594501,215.05783036703866,727.8922586198167,223.14009166666668,747,228.45813333333334" stroke-width="3" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><circle cx="63" cy="282.8507333333333" r="2" fill="#0b62a4" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="139.43096552073314" cy="281.7942" r="2" fill="#0b62a4" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="215.89656219938232" cy="261.66346666666664" r="2" fill="#0b62a4" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="291.56564224596224" cy="272.4646333333333" r="2" fill="#0b62a4" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="366.3689433446408" cy="243.75900000000001" r="2" fill="#0b62a4" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="442.79990886537394" cy="254.513" r="2" fill="#0b62a4" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="519.2655055440232" cy="262.53133333333335" r="2" fill="#0b62a4" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="594.9345855906031" cy="165.81136666666666" r="2" fill="#0b62a4" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="670.5690344792669" cy="207.18596666666667" r="2" fill="#0b62a4" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="747" cy="228.45813333333334" r="2" fill="#0b62a4" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle></svg><div class="morris-hover morris-default-style" style="display: none;"></div></div>
		  </div>
		  <!-- /.panel-body -->
	    </div>
	    <!-- /.panel -->
	    <div class="panel panel-default">
		  <div class="panel-heading">
			<i class="fa fa-bar-chart-o fa-fw"></i> Bar Chart Example
			<div class="pull-right">
			   <div class="btn-group">
				 <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
				    Actions
				    <span class="caret"></span>
				 </button>
				 <ul class="dropdown-menu pull-right" role="menu">
				    <li><a href="#">Action</a>
				    </li>
				    <li><a href="#">Another action</a>
				    </li>
				    <li><a href="#">Something else here</a>
				    </li>
				    <li class="divider"></li>
				    <li><a href="#">Separated link</a>
				    </li>
				 </ul>
			   </div>
			</div>
		  </div>
		  <!-- /.panel-heading -->
		  <div class="panel-body">
			<div class="row">
			   <div class="col-lg-4">
				 <div class="table-responsive">
				    <table class="table table-bordered table-hover table-striped">
					  <thead>
						<tr>
						   <th>#</th>
						   <th>Date</th>
						   <th>Time</th>
						   <th>Amount</th>
						</tr>
					  </thead>
					  <tbody>
						<tr>
						   <td>3326</td>
						   <td>10/21/2013</td>
						   <td>3:29 PM</td>
						   <td>$321.33</td>
						</tr>
						<tr>
						   <td>3325</td>
						   <td>10/21/2013</td>
						   <td>3:20 PM</td>
						   <td>$234.34</td>
						</tr>
						<tr>
						   <td>3324</td>
						   <td>10/21/2013</td>
						   <td>3:03 PM</td>
						   <td>$724.17</td>
						</tr>
						<tr>
						   <td>3323</td>
						   <td>10/21/2013</td>
						   <td>3:00 PM</td>
						   <td>$23.71</td>
						</tr>
						<tr>
						   <td>3322</td>
						   <td>10/21/2013</td>
						   <td>2:49 PM</td>
						   <td>$8345.23</td>
						</tr>
						<tr>
						   <td>3321</td>
						   <td>10/21/2013</td>
						   <td>2:23 PM</td>
						   <td>$245.12</td>
						</tr>
						<tr>
						   <td>3320</td>
						   <td>10/21/2013</td>
						   <td>2:15 PM</td>
						   <td>$5663.54</td>
						</tr>
						<tr>
						   <td>3319</td>
						   <td>10/21/2013</td>
						   <td>2:13 PM</td>
						   <td>$943.45</td>
						</tr>
					  </tbody>
				    </table>
				 </div>
				 <!-- /.table-responsive -->
			   </div>
			   <!-- /.col-lg-4 (nested) -->
			   <div class="col-lg-8">
				 <div id="morris-bar-chart" style="position: relative; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);"><svg height="342" version="1.1" width="772" xmlns="http://www.w3.org/2000/svg" style="overflow: hidden; position: relative;"><desc style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Created with Raphaël 2.1.0</desc><defs style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></defs><text x="33.5" y="308" text-anchor="end" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">0</tspan></text><path fill="none" stroke="#aaaaaa" d="M46,308H747" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="33.5" y="237.25" text-anchor="end" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">25</tspan></text><path fill="none" stroke="#aaaaaa" d="M46,237.25H747" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="33.5" y="166.5" text-anchor="end" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">50</tspan></text><path fill="none" stroke="#aaaaaa" d="M46,166.5H747" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="33.5" y="95.75" text-anchor="end" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">75</tspan></text><path fill="none" stroke="#aaaaaa" d="M46,95.75H747" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="33.5" y="25" text-anchor="end" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">100</tspan></text><path fill="none" stroke="#aaaaaa" d="M46,25H747" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="696.9285714285714" y="320.5" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal" transform="matrix(1,0,0,1,0,7)"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2012</tspan></text><text x="596.7857142857143" y="320.5" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal" transform="matrix(1,0,0,1,0,7)"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2011</tspan></text><text x="496.64285714285717" y="320.5" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal" transform="matrix(1,0,0,1,0,7)"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2010</tspan></text><text x="396.5" y="320.5" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal" transform="matrix(1,0,0,1,0,7)"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2009</tspan></text><text x="296.3571428571429" y="320.5" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal" transform="matrix(1,0,0,1,0,7)"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2008</tspan></text><text x="196.21428571428572" y="320.5" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal" transform="matrix(1,0,0,1,0,7)"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2007</tspan></text><text x="96.07142857142857" y="320.5" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal" transform="matrix(1,0,0,1,0,7)"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2006</tspan></text><rect x="58.51785714285714" y="25" width="36.05357142857143" height="283" r="0" rx="0" ry="0" fill="#0b62a4" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="97.57142857142857" y="53.29999999999998" width="36.05357142857143" height="254.70000000000002" r="0" rx="0" ry="0" fill="#7a92a3" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="158.66071428571428" y="95.75" width="36.05357142857143" height="212.25" r="0" rx="0" ry="0" fill="#0b62a4" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="197.71428571428572" y="124.04999999999998" width="36.05357142857143" height="183.95000000000002" r="0" rx="0" ry="0" fill="#7a92a3" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="258.80357142857144" y="166.5" width="36.05357142857143" height="141.5" r="0" rx="0" ry="0" fill="#0b62a4" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="297.8571428571429" y="194.8" width="36.05357142857143" height="113.19999999999999" r="0" rx="0" ry="0" fill="#7a92a3" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="358.94642857142856" y="95.75" width="36.05357142857143" height="212.25" r="0" rx="0" ry="0" fill="#0b62a4" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="398" y="124.04999999999998" width="36.05357142857143" height="183.95000000000002" r="0" rx="0" ry="0" fill="#7a92a3" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="459.08928571428567" y="166.5" width="36.05357142857143" height="141.5" r="0" rx="0" ry="0" fill="#0b62a4" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="498.1428571428571" y="194.8" width="36.05357142857143" height="113.19999999999999" r="0" rx="0" ry="0" fill="#7a92a3" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="559.2321428571428" y="95.75" width="36.05357142857143" height="212.25" r="0" rx="0" ry="0" fill="#0b62a4" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="598.2857142857142" y="124.04999999999998" width="36.05357142857143" height="183.95000000000002" r="0" rx="0" ry="0" fill="#7a92a3" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="659.375" y="25" width="36.05357142857143" height="283" r="0" rx="0" ry="0" fill="#0b62a4" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="698.4285714285714" y="53.29999999999998" width="36.05357142857143" height="254.70000000000002" r="0" rx="0" ry="0" fill="#7a92a3" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect></svg><div class="morris-hover morris-default-style" style="display: none;"></div></div>
			   </div>
			   <!-- /.col-lg-8 (nested) -->
			</div>
			<!-- /.row -->
		  </div>
		  <!-- /.panel-body -->
	    </div>
	    <!-- /.panel -->
	    <div class="panel panel-default">
		  <div class="panel-heading">
			<i class="fa fa-clock-o fa-fw"></i> Responsive Timeline
		  </div>
		  <!-- /.panel-heading -->
		  <div class="panel-body">
			<ul class="timeline">
			   <li>
				 <div class="timeline-badge"><i class="fa fa-check"></i>
				 </div>
				 <div class="timeline-panel">
				    <div class="timeline-heading">
					  <h4 class="timeline-title">Lorem ipsum dolor</h4>
					  <p><small class="text-muted"><i class="fa fa-clock-o"></i> 11 hours ago via Twitter</small>
					  </p>
				    </div>
				    <div class="timeline-body">
					  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero laboriosam dolor perspiciatis omnis exercitationem. Beatae, officia pariatur? Est cum veniam excepturi. Maiores praesentium, porro voluptas suscipit facere rem dicta, debitis.</p>
				    </div>
				 </div>
			   </li>
			   <li class="timeline-inverted">
				 <div class="timeline-badge warning"><i class="fa fa-credit-card"></i>
				 </div>
				 <div class="timeline-panel">
				    <div class="timeline-heading">
					  <h4 class="timeline-title">Lorem ipsum dolor</h4>
				    </div>
				    <div class="timeline-body">
					  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem dolorem quibusdam, tenetur commodi provident cumque magni voluptatem libero, quis rerum. Fugiat esse debitis optio, tempore. Animi officiis alias, officia repellendus.</p>
					  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium maiores odit qui est tempora eos, nostrum provident explicabo dignissimos debitis vel! Adipisci eius voluptates, ad aut recusandae minus eaque facere.</p>
				    </div>
				 </div>
			   </li>
			   <li>
				 <div class="timeline-badge danger"><i class="fa fa-bomb"></i>
				 </div>
				 <div class="timeline-panel">
				    <div class="timeline-heading">
					  <h4 class="timeline-title">Lorem ipsum dolor</h4>
				    </div>
				    <div class="timeline-body">
					  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus numquam facilis enim eaque, tenetur nam id qui vel velit similique nihil iure molestias aliquam, voluptatem totam quaerat, magni commodi quisquam.</p>
				    </div>
				 </div>
			   </li>
			   <li class="timeline-inverted">
				 <div class="timeline-panel">
				    <div class="timeline-heading">
					  <h4 class="timeline-title">Lorem ipsum dolor</h4>
				    </div>
				    <div class="timeline-body">
					  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates est quaerat asperiores sapiente, eligendi, nihil. Itaque quos, alias sapiente rerum quas odit! Aperiam officiis quidem delectus libero, omnis ut debitis!</p>
				    </div>
				 </div>
			   </li>
			   <li>
				 <div class="timeline-badge info"><i class="fa fa-save"></i>
				 </div>
				 <div class="timeline-panel">
				    <div class="timeline-heading">
					  <h4 class="timeline-title">Lorem ipsum dolor</h4>
				    </div>
				    <div class="timeline-body">
					  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis minus modi quam ipsum alias at est molestiae excepturi delectus nesciunt, quibusdam debitis amet, beatae consequuntur impedit nulla qui! Laborum, atque.</p>
					  <hr>
					  <div class="btn-group">
						<button type="button" class="btn btn-primary btn-sm dropdown-toggle" data-toggle="dropdown">
						   <i class="fa fa-gear"></i>  <span class="caret"></span>
						</button>
						<ul class="dropdown-menu" role="menu">
						   <li><a href="#">Action</a>
						   </li>
						   <li><a href="#">Another action</a>
						   </li>
						   <li><a href="#">Something else here</a>
						   </li>
						   <li class="divider"></li>
						   <li><a href="#">Separated link</a>
						   </li>
						</ul>
					  </div>
				    </div>
				 </div>
			   </li>
			   <li>
				 <div class="timeline-panel">
				    <div class="timeline-heading">
					  <h4 class="timeline-title">Lorem ipsum dolor</h4>
				    </div>
				    <div class="timeline-body">
					  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi fuga odio quibusdam. Iure expedita, incidunt unde quis nam! Quod, quisquam. Officia quam qui adipisci quas consequuntur nostrum sequi. Consequuntur, commodi.</p>
				    </div>
				 </div>
			   </li>
			   <li class="timeline-inverted">
				 <div class="timeline-badge success"><i class="fa fa-graduation-cap"></i>
				 </div>
				 <div class="timeline-panel">
				    <div class="timeline-heading">
					  <h4 class="timeline-title">Lorem ipsum dolor</h4>
				    </div>
				    <div class="timeline-body">
					  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt obcaecati, quaerat tempore officia voluptas debitis consectetur culpa amet, accusamus dolorum fugiat, animi dicta aperiam, enim incidunt quisquam maxime neque eaque.</p>
				    </div>
				 </div>
			   </li>
			</ul>
		  </div>
		  <!-- /.panel-body -->
	    </div>
	    <!-- /.panel -->
	 </div>
	 <!-- /.col-lg-8 -->
	 <div class="col-lg-4">
	    <div class="panel panel-default">
		  <div class="panel-heading">
			<i class="fa fa-bell fa-fw"></i> Notifications Panel
		  </div>
		  <!-- /.panel-heading -->
		  <div class="panel-body">
			<div class="list-group">
			   <a href="#" class="list-group-item">
				 <i class="fa fa-comment fa-fw"></i> New Comment
				 <span class="pull-right text-muted small"><em>4 minutes ago</em>
				 </span>
			   </a>
			   <a href="#" class="list-group-item">
				 <i class="fa fa-twitter fa-fw"></i> 3 New Followers
				 <span class="pull-right text-muted small"><em>12 minutes ago</em>
				 </span>
			   </a>
			   <a href="#" class="list-group-item">
				 <i class="fa fa-envelope fa-fw"></i> Message Sent
				 <span class="pull-right text-muted small"><em>27 minutes ago</em>
				 </span>
			   </a>
			   <a href="#" class="list-group-item">
				 <i class="fa fa-tasks fa-fw"></i> New Task
				 <span class="pull-right text-muted small"><em>43 minutes ago</em>
				 </span>
			   </a>
			   <a href="#" class="list-group-item">
				 <i class="fa fa-upload fa-fw"></i> Server Rebooted
				 <span class="pull-right text-muted small"><em>11:32 AM</em>
				 </span>
			   </a>
			   <a href="#" class="list-group-item">
				 <i class="fa fa-bolt fa-fw"></i> Server Crashed!
				 <span class="pull-right text-muted small"><em>11:13 AM</em>
				 </span>
			   </a>
			   <a href="#" class="list-group-item">
				 <i class="fa fa-warning fa-fw"></i> Server Not Responding
				 <span class="pull-right text-muted small"><em>10:57 AM</em>
				 </span>
			   </a>
			   <a href="#" class="list-group-item">
				 <i class="fa fa-shopping-cart fa-fw"></i> New Order Placed
				 <span class="pull-right text-muted small"><em>9:49 AM</em>
				 </span>
			   </a>
			   <a href="#" class="list-group-item">
				 <i class="fa fa-money fa-fw"></i> Payment Received
				 <span class="pull-right text-muted small"><em>Yesterday</em>
				 </span>
			   </a>
			</div>
			<!-- /.list-group -->
			<a href="#" class="btn btn-default btn-block">View All Alerts</a>
		  </div>
		  <!-- /.panel-body -->
	    </div>
	    <!-- /.panel -->
	    <div class="panel panel-default">
		  <div class="panel-heading">
			<i class="fa fa-bar-chart-o fa-fw"></i> Donut Chart Example
		  </div>
		  <div class="panel-body">
			<div id="morris-donut-chart"><svg height="342" version="1.1" width="772" xmlns="http://www.w3.org/2000/svg" style="overflow: hidden; position: relative;"><desc style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Created with Raphaël 2.1.0</desc><defs style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></defs><path fill="none" stroke="#0b62a4" d="M386,282.5A109,109,0,0,0,488.9220648142984,209.38939361930437" stroke-width="2" opacity="0" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); opacity: 0;"></path><path fill="#0b62a4" stroke="#ffffff" d="M386,285.5A112,112,0,0,0,491.75478219450844,210.377175095065L535.6619015877641,225.6877879693554A158.5,158.5,0,0,1,386,332Z" stroke-width="3" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><path fill="none" stroke="#3980b5" d="M488.9220648142984,209.38939361930437A109,109,0,0,0,288.22069250765185,125.33147265779414" stroke-width="2" opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); opacity: 1;"></path><path fill="#3980b5" stroke="#ffffff" d="M491.75478219450844,210.377175095065A112,112,0,0,0,285.52951890694504,124.00573337314628L239.3310387614778,101.24720898669122A163.5,163.5,0,0,1,540.3830972214475,227.33409042895653Z" stroke-width="3" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><path fill="none" stroke="#679dc6" d="M288.22069250765185,125.33147265779414A109,109,0,0,0,385.96575664063926,282.49999462106564" stroke-width="2" opacity="0" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); opacity: 0;"></path><path fill="#679dc6" stroke="#ffffff" d="M285.52951890694504,124.00573337314628A112,112,0,0,0,385.9648141628587,285.4999944730216L385.9502057572598,331.9999921783386A158.5,158.5,0,0,1,243.81632809598918,103.45677446110433Z" stroke-width="3" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="386" y="163.5" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-style: normal; font-variant: normal; font-weight: 800; font-stretch: normal; font-size: 15px; line-height: normal; font-family: Arial;" font-size="15px" font-weight="800" transform="matrix(1.6914,0,0,1.6914,-266.8724,-120.6457)" stroke-width="0.5912334352701324"><tspan dy="6" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">In-Store Sales</tspan></text><text x="386" y="183.5" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 14px; line-height: normal; font-family: Arial;" font-size="14px" transform="matrix(2.2708,0,0,2.2708,-490.5417,-223.0313)" stroke-width="0.4403669724770642"><tspan dy="5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">30</tspan></text></svg></div>
			<a href="#" class="btn btn-default btn-block">View Details</a>
		  </div>
		  <!-- /.panel-body -->
	    </div>
	    <!-- /.panel -->
	    <div class="chat-panel panel panel-default">
		  <div class="panel-heading">
			<i class="fa fa-comments fa-fw"></i>
			Chat
			<div class="btn-group pull-right">
			   <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
				 <i class="fa fa-chevron-down"></i>
			   </button>
			   <ul class="dropdown-menu slidedown">
				 <li>
				    <a href="#">
					  <i class="fa fa-refresh fa-fw"></i> Refresh
				    </a>
				 </li>
				 <li>
				    <a href="#">
					  <i class="fa fa-check-circle fa-fw"></i> Available
				    </a>
				 </li>
				 <li>
				    <a href="#">
					  <i class="fa fa-times fa-fw"></i> Busy
				    </a>
				 </li>
				 <li>
				    <a href="#">
					  <i class="fa fa-clock-o fa-fw"></i> Away
				    </a>
				 </li>
				 <li class="divider"></li>
				 <li>
				    <a href="#">
					  <i class="fa fa-sign-out fa-fw"></i> Sign Out
				    </a>
				 </li>
			   </ul>
			</div>
		  </div>
		  <!-- /.panel-heading -->
		  <div class="panel-body">
			<ul class="chat">
			   <li class="left clearfix">
				 <span class="chat-img pull-left">
				    <img src="http://placehold.it/50/55C1E7/fff" alt="User Avatar" class="img-circle">
				 </span>
				 <div class="chat-body clearfix">
				    <div class="header">
					  <strong class="primary-font">Jack Sparrow</strong>
					  <small class="pull-right text-muted">
						<i class="fa fa-clock-o fa-fw"></i> 12 mins ago
					  </small>
				    </div>
				    <p>
					  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales.
				    </p>
				 </div>
			   </li>
			   <li class="right clearfix">
				 <span class="chat-img pull-right">
				    <img src="http://placehold.it/50/FA6F57/fff" alt="User Avatar" class="img-circle">
				 </span>
				 <div class="chat-body clearfix">
				    <div class="header">
					  <small class=" text-muted">
						<i class="fa fa-clock-o fa-fw"></i> 13 mins ago</small>
					  <strong class="pull-right primary-font">Bhaumik Patel</strong>
				    </div>
				    <p>
					  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales.
				    </p>
				 </div>
			   </li>
			   <li class="left clearfix">
				 <span class="chat-img pull-left">
				    <img src="http://placehold.it/50/55C1E7/fff" alt="User Avatar" class="img-circle">
				 </span>
				 <div class="chat-body clearfix">
				    <div class="header">
					  <strong class="primary-font">Jack Sparrow</strong>
					  <small class="pull-right text-muted">
						<i class="fa fa-clock-o fa-fw"></i> 14 mins ago</small>
				    </div>
				    <p>
					  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales.
				    </p>
				 </div>
			   </li>
			   <li class="right clearfix">
				 <span class="chat-img pull-right">
				    <img src="http://placehold.it/50/FA6F57/fff" alt="User Avatar" class="img-circle">
				 </span>
				 <div class="chat-body clearfix">
				    <div class="header">
					  <small class=" text-muted">
						<i class="fa fa-clock-o fa-fw"></i> 15 mins ago</small>
					  <strong class="pull-right primary-font">Bhaumik Patel</strong>
				    </div>
				    <p>
					  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales.
				    </p>
				 </div>
			   </li>
			</ul>
		  </div>
		  <!-- /.panel-body -->
		  <div class="panel-footer">
			<div class="input-group">
			   <input id="btn-input" type="text" class="form-control input-sm" placeholder="Type your message here...">
			   <span class="input-group-btn">
				 <button class="btn btn-warning btn-sm" id="btn-chat">
				    Send
				 </button>
			   </span>
			</div>
		  </div>
		  <!-- /.panel-footer -->
	    </div>
	    <!-- /.panel .chat-panel -->
	 </div>
	 <!-- /.col-lg-4 -->
   </div>
   <!-- /.row -->
</div>
@stop
