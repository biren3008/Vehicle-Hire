<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Vehicle Hire | Biren Patel</title>
<link rel="stylesheet" type="text/css" href="style.css" />
<script type="text/javascript" src="jquery.min.js"></script>
<script type="text/javascript" src="ddaccordion.js"></script>
<script type="text/javascript">
ddaccordion.init({
	headerclass: "submenuheader", //Shared CSS class name of headers group
	contentclass: "submenu", //Shared CSS class name of contents group
	revealtype: "click", //Reveal content when user clicks or onmouseover the header? Valid value: "click", "clickgo", or "mouseover"
	mouseoverdelay: 200, //if revealtype="mouseover", set delay in milliseconds before header expands onMouseover
	collapseprev: true, //Collapse previous content (so only one open at any time)? true/false 
	defaultexpanded: [], //index of content(s) open by default [index1, index2, etc] [] denotes no content
	onemustopen: false, //Specify whether at least one header should be open always (so never all headers closed)
	animatedefault: false, //Should contents open by default be animated into view?
	persiststate: true, //persist state of opened contents within browser session?
	toggleclass: ["", ""], //Two CSS classes to be applied to the header when it's collapsed and expanded, respectively ["class1", "class2"]
	togglehtml: ["suffix", "<img src='images/plus.gif' class='statusicon' />", "<img src='images/minus.gif' class='statusicon' />"], //Additional HTML added to the header when it's collapsed and expanded, respectively  ["position", "html1", "html2"] (see docs)
	animatespeed: "fast", //speed of animation: integer in milliseconds (ie: 200), or keywords "fast", "normal", or "slow"
	oninit:function(headers, expandedindices){ //custom code to run when headers have initalized
		//do nothing
	},
	onopenclose:function(header, index, state, isuseractivated){ //custom code to run whenever a header is opened or closed
		//do nothing
	}
})
</script>
<script src="jquery.jclock-1.2.0.js.txt" type="text/javascript"></script>
<script type="text/javascript" src="jconfirmaction.jquery.js"></script>
<script type="text/javascript">
	
	$(document).ready(function() {
		$('.ask').jConfirmAction();
	});
	
</script>
<script type="text/javascript">
$(function($) {
    $('.jclock').jclock();
});
</script>

<script language="javascript" type="text/javascript" src="niceforms.js"></script>
<link rel="stylesheet" type="text/css" media="all" href="niceforms-default.css" />

</head>
<body>
<div id="main_container">

<div class="header">

	<div class="logo">
    	<h2><a href="home.php"><img src="images/logo.gif" alt="" title="" border="0" /></a></h2>
    </div>
    
    <div class="right_header">
        <a href="Home.php">Hello Traveller</a> | 
        <a href="index.php">Log In</a>
    </div>
	
</div>            
  <div class="main_content">
    
    <div class="menu">
        <ul>
            <li><a class="current" href="home.php">Home</a>|</li>
            <li><a class="current" href="index.php">Package</a>|</li>
            <li><a class="current" href="index.php">Easy Cabs</a>|</li>
            <li><a class="current" href="index.php">Self Drive</a></li>        
        </ul>
    </div>
    <br />
    <br />

	  <div align="center">
          <h1>Welcome</h1>
          <h2>Please Contact us if you are facing any problem rgarding the web site.</h2>
          <h2>And give feedback for services.</h2><br />
          <h4>Email us with comments about this web site and leave feedback and suggestions for our services.</h4>
          <h4>Email ID:patelbiren058@gmail.com</h4>
          <h4>Contact Number:09662597967</h4>
      </div>

    
    	<div class="clear"></div>
        
  </div> <!--end of main content-->
	
    
   <?php
		include('footer1.php');
	?>

</div>		
</body>
</html>