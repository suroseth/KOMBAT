<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<!--<META HTTP-EQUIV=\"Content-Type\" CONTENT=\"text/html; charset=iso-8859-1\">-->
<!--<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />-->
<!--<meta name="keywords" content="" />-->
<!--<meta name="description" content="" />-->
<!--<link href="http://fonts.googleapis.com/css?family=Karla:400,700" rel="stylesheet" />-->
<link href="default.css" rel="stylesheet" type="text/css" media="all" />
<link href="fonts.css" rel="stylesheet" type="text/css" media="all" />
<!--[if IE 6]>
<link href="default_ie6.css" rel="stylesheet" type="text/css" />
<![endif]-->
</head>
<style>
	div
{
text-align:justify;
text-justify:inter-word;
}
 h12 
{
    color : #000000;
    text-align : right;
    font-family: "SIMPSON";
}
form {
    width: 1200px;
    margin: 0 auto;
}

</style>
<script language="javascript">
     function getCheckboxesValues(){
    return [].slice.apply(document.querySelectorAll("input[type=checkbox]"))
           .filter(function(c){ return c.checked; })
           .map(function(c){ return c.value; });
}

document.getElementById("btntest").addEventListener("click", function(){
    console.log(getCheckboxesValues());
});
</script>
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<script>
 $(function() {
    $( "#summary" ).autocomplete({
      source: 'summary_table.php'
    });
  });</script>
<body>
<div id = "fullwidth">
<div id="wrapper">
	<div id="header-wrapper">
		<div id="header" class="container">
			<div id="logo">
				<br/><a href="http://www.igib.res.in" target="_blank"> <img src = './images/igib.gif' height = '80' width = '150' align = 'left'><h1> <font color = "#fffffff"> &nbsp KOMBAT </font></a></h1>
				<p><font color = "#ffffff" size = "5px"> &nbsp &nbsp &nbsp Knowledgebase of Microbe Battling Agents for Therapeutics</font></p>
			</div>

				<form method="post" action="searchresults.php" name="search_form">
	<p align="right"> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
	
    <input type="text" name="search" id = "summary" size=15 maxlength=15 placeholder = "Enter PMID here.."/>
		<input type="Submit" name="Submit" value="Search PMID"/> </form><br/> 
		</p>
		<p align = "right"> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
		</p>

		<!-- <font color = "#fff">Enter verification code:</font>
<input name="verif_box" type="text" id="verif_box" style="padding:2px; border:1px solid #CCCCCC; width:180px; height:14px;font-family:Verdana, Arial, Helvetica, sans-serif; font-size:11px;"/>
<img src="verificationimage.php?<?php echo rand(0,9999);?>" alt="verification image, type it in the box" width="50" height="24" align="absbottom" /> -->
		
  


	</div>
	<br/>
	<br/><CENTER>
	<div id="menu-wrapper">
		<div id="menu" class="container">
			<ul>
				<li class="current_page_item"><a href="index.php">&nbsp &nbsp Home &nbsp &nbsp</a></li>
				<li class="current_page_item"><a href="about.php">&nbsp &nbsp About &nbsp &nbsp</a></li>
				<li class="current_page_item"><a href="contact.php">&nbsp &nbsp Contact Us &nbsp &nbsp</a></li>
				<li class="current_page_item"><a href="help.php">&nbsp &nbsp Help &nbsp &nbsp</a></li>
			</ul>
		</div>
	</div>
		<!-- end #menu --> 
	</div>
</CENTER>
<div id="page" class="container">
	<div id="content1">
	<p><a href="antiviral.php"><font color = 'blue'>previous</font></a></p>
	<p><h1><font color = '#c01ed9'><u> Antiviral phages  </u></font></h1></p>

	<?php
	require("config.php");
	$rs = mysqli_query($con, "SELECT * FROM virus_phage");
	$color="1";
	echo "<table border='1', width='1200', align='center'>
	<tr>
	<th bgcolor = '#8a0c0c' align=center><font color = '#fff'>ENTITY</font></th>
	<th bgcolor = '#8a0c0c' align=center><font color = '#fff'>POTENCY</font></th>
	<th bgcolor = '#8a0c0c' align=center><font color = '#fff'>SAFETY_INFORMATION</font></th>
	<th bgcolor = '#8a0c0c' align=center><font color = '#fff'>EVIDENCE</font></th>
	<th bgcolor = '#8a0c0c' align=center><font color = '#fff'>PMID</font></th>

	</tr>";

	// Loop the recordset $rs
		while($row = mysqli_fetch_array($rs))
		{
		$lit2 = $row['PMID'];
		if ($color==1){
	echo "<tr bgcolor = '#efefef'>";
  
  //echo "<td align=left><font color = 'BLACK' size = '1px'><b>" . $row['THEME'] . "</b></font></td>";
			echo "<td align=center><font color = 'purple' ><b>" . $row['ENTITY'] . "</b></font></td>";
			echo "<td  align=center><font color = 'purple' >" . $row['POTENCY'] . "</b></font></td>";
			echo "<td  align=center><font color = 'purple' >" . $row['SAFETY_INFORMATION'] . "</b></font></td>";
			echo "<td  align=center><font color = 'purple' >" . $row['EVIDENCE'] . "</b></font></td>";
			echo "<td  align=center><a href='http://www.ncbi.nlm.nih.gov/pubmed/?term=$lit2' target='_blank'><font color = 'blue'><b>" . $row['PMID'] . "</b></font></a></td>";
	}

}

	// Close the database connection
	mysqli_close($con);
	?> 
	</div>
</div>
	</body>
</html>