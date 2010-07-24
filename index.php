<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
   <title>GeoGlob</title>
   <link rel="stylesheet" href="http://yui.yahooapis.com/2.7.0/build/reset-fonts-grids/reset-fonts-grids.css" type="text/css">
   <link rel="stylesheet" href="http://yui.yahooapis.com/2.7.0/build/base/base.css" type="text/css">
   <style type="text/css">
   html,body{font-family: helvetica,arial,sans-serif,georgia;}
   h1{ font-size:400%; margin:0; padding-bottom:10px; color:#393;}
   .glob {margin: 1em 0;padding: 1em;overflow: hidden}
   .glob img {float: left;}
   .glob ul {padding: 10px;margin: 0 0 0 150px;}
   .glob li {list-style: none;padding: 0 0 5px 0;}
   .glob li span {font-weight: bold;margin-right: 4px}
   #ft{font-size:80%;color:#888;text-align:left;margin:2em 0;font-size: 12px}
   #ft p a{color:#93C37D;}
   </style> 
</head>
<body>
<div id="doc" class="yui-t7">
   <div id="hd" role="banner"><h1>GeoGlob</h1></div>
   <div id="bd" role="main">
	<div class="yui-g">
         <div id="glob"></div>
	</div>
	</div>
   <div id="ft" role="contentinfo"><p>@<a href="http://twitter.com/thinkphp">thinkphp</a> | <a href="http://thinkphp.ro/apps/geo/geoglob/geo.globimage.xml">Open Data Table </a></p></div>
</div>
<script type="text/javascript" src="globbadge.js"></script>
<script type="text/javascript">
(function(){
     var g = document.getElementById('glob');
     var form = '<form><label for="location">Enter Location: </label><input type="text" id="location" name="location"><input type="submit" value="search"></form>';
     var badge = "<div id='badge'>Loading...</div>";
         g.innerHTML = form + badge;
     var form = g.getElementsByTagName('form')[0],
         out = g.getElementsByTagName('div')[0];
     form.onsubmit = function() {
         var loc = document.getElementById('location');
        globbadge.init({element: 'badge',location: loc.value,showlist: true});  
      return false;
     }      
})();
     globbadge.init({element: 'badge',location: 'antananarivo',showlist: true});  
</script>
</body>
</html>
