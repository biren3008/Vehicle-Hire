<?php

	include 'connection.php';
	
	$queryData = mysql_query("SELECT * FROM car") or die(mysql_error());

?>

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

		<?php
			include('header1.php');
		?>
    
  <div class="main_content">
    
    <?php
				include('menu1.php');
	?> 

		<div>&nbsp;</div>

		<div class="center_content">
			<table width="897">
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="GET" class="niceform">
              <tr>
                <th><img src="images/table/a.jpg" alt="portrait"></th>
                <th><img src="images/table/b.jpg" alt="portrait"></th>
                <th><img src="images/table/c.jpg" alt="portrait"></th>
                <th><img src="images/table/d.jpg" alt="portrait"></th>
                <th width="124"></th>
              </tr>  
              <?php while ($row = mysql_fetch_assoc($queryData)){ ?>

              <tr>
                <td width="158" align="center">
                <img src="images/car/<?php echo $row['Car Image']; ?>" alt="portrait"></td>
                <td width="301" align="center"><h4><?php echo $row['Car Type'] ?></h4></td>
                <td width="160" align="center"><h4><?php echo $row['Seating Capacity'] ?></h4></td>
                <th width="130" align="center"><h4>Rs <?php echo $row['Price Per Day'] ?> / Day</h4></th>
                <td align="center">
					<form action="selfdrive1.php" method="get" class="niceform">
                        <input type="submit" name="Submit" id="submit" value="Book Now" />
                    </form>
                </td>
              </tr>
              
              <?php } ?>

            </form>
            </table>

            <div>  
                <img src="images/bdr.jpg" alt="portrait">
            </div>

		</div>

	    <div class="clear"></div>
    
  </div> <!--end of main content-->
	
    
   <?php
		include('footer.php');
	?>

</div>		
</body>
</html>