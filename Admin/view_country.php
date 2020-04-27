<?php

	include 'connection.php';
	
	$queryData = mysql_query("SELECT * FROM country") or die(mysql_error());
	
	include 'delete_country.php';

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Vehicle Hire | Biren Patel</title>
<link rel="stylesheet" type="text/css" href="style.css" />
<script type="text/javascript" src="clockp.js"></script>
<script type="text/javascript" src="clockh.js"></script> 
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

<script type="text/javascript" src="jconfirmaction.jquery.js"></script>
<script type="text/javascript">
	
	$(document).ready(function() {
		$('.ask').jConfirmAction();
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
    
                    <div class="menu">
                    <ul>
                    <li><a class="current" href="profile.php">Home</a>
                      <form id="form2" name="form2" method="post" action="">
                      </form>
                    </li>
                    </ul>
                    </div>
                    
    <div class="center_content">  
    
    <?php
		include('sidebar.php');
	?>  
  
    <div class="left_content">

    <h1>View Country</h1> 
                    
    <?php if (mysql_num_rows($queryData) > 0): ?>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="GET" class="niceform">                    
                    
	<table id="rounded-corner" summary="2007 Major IT Companies' Profit">
    	<thead>
    		<tr>
                <th scope="col" class="rounded-company" align="center"></th>
                <th scope="col" class="rounded" align="center">Country Id</th>
                <th scope="col" class="rounded" align="center">Country</th>
                <th scope="col" class="rounded" align="center">Edit</th>
                <th scope="col" class="rounded-q4" align="center">Delete</th>
            </tr>
	    </thead>

        <tbody>
        <?php while ($row = mysql_fetch_assoc($queryData)){ ?>
            <tr>
                <td align="center"><input type="checkbox" name="multiple[]" value="<?php echo $row['ID']; ?>"></td>
                <td align="center"><?php echo $row['ID'] ?></td>
                <td align="center"><?php echo $row['Country Name'] ?></td>
                
                <td align="center"><a href=""><img src="images/user_edit.png" alt="" title="" border="0" /></a></td>
                <td align="center">
                	<a href="">
                        <input type="image" name="delete" value="submit" src="images/trash.png" alt="submit Button" 
                        onMouseOver="this.src='images/trash.png'">
                    </a>
                </td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
    </form>
	<?php else: ?>
	<h2>No Data to Display</h2>
    <?php endif; ?>        

    </div>    <!-- end of right content-->
                          
    </div>   <!--end of center content -->               

    <div class="clear"></div>
    </div> <!--end of main content-->
    
    <?php
		include('footer.php');
	?>  

</div>
    <script type="text/javascript">
		var toggle = document.getElementById('toggle');
		
		toggle.onclick = function (){
			
			var multiple = document.getElementsByName('multiple[]');
			
			for (i = 0; i < multiple.length; i ++) {
				
				multiple[i].checked = this.checked;	
			}
		}
	</script>
</body>
</html>