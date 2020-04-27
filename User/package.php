<?php

	include 'connection.php';
	
	$queryData = mysql_query("SELECT * FROM package") or die(mysql_error());

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
			include('header.php');
		?>
    
    <div class="main_content">
    
            <?php
				include('menu.php');
			?> 
		
		<div class="left_content">
        
        
            <table width="468">
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="GET" class="niceform">
				<?php while ($row = mysql_fetch_assoc($queryData)){ ?>
                  <tr>
                    <th width="260" rowspan="4">
                    <img src="images/package/<?php echo $row['Image']; ?>" alt="portrait">
                    </th>
                    <th colspan="3">
                        <?php echo $row['Name'] ?>
                    </th>
                  </tr>
                  <tr>
                    <td colspan="3" align="center">
                        <?php echo $row['Type'] ?>
                    </td>
                  </tr>
                  <tr>
                    <td width="362" align="center">
                        <img src="images/package/<?php echo $row['Facility']; ?>" alt="portrait">
                        <img src="images/package/<?php echo $row['Facility']; ?>" alt="portrait">
                        <img src="images/package/<?php echo $row['Facility']; ?>" alt="portrait">
                        <img src="images/package/<?php echo $row['Facility']; ?>" alt="portrait">
                    </td>
                    <td width="112" align="center">On: <?php echo $row['Date'] ?></td>
                    <th width="110" align="center">In Just: Rs <?php echo $row['Price'] ?>/-</h3></th>
                  </tr>
                  <tr>
                    <td colspan="3" align="center">
                        <form action="index.php" method="get" class="niceform">
                            <fieldset> 
                                <dl class="submit">
                                  <input type="submit" name="submit" id="submit" value="Make Your Booking Now" />
                                </dl>
                            </fieldset>
                        </form>
                    </td>
                  </tr>
                <?php } ?>
        	</form>
        </table>
        
		</div>
   		<div>  
	       	<img src="images/bdr.jpg" alt="portrait">
        </div>

		</div>
    
    
	    <div class="clear"></div>
   <?php
		include('footer.php');
	?>
    
    </div> <!--end of main content-->
	
    

</div>		
</body>
</html>