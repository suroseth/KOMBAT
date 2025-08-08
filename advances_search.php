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
				<br/><a href="http://www.igib.res.in" target="_blank"> <img src = './images/igib.png' height = '80' width = '150' align = 'left'><h1> <font color = "#fffffff"> &nbsp KOMBAT </font></a></h1>
				<p><font color = "#ffffff" size = "5px"> &nbsp &nbsp &nbsp Knowledgebase Of Microbe Battling Agents for Therapeutics</font></p>
			</div>
			<p>
		<form method="post" action="searchresults_info.php" name="search_form">
		&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
		<select name = "table">
            <option value="athero_common_genes">Atherosclerosis</option>
			<option value="cardio_common_genes">Cardiovascular</option>
            <option value="retino_common_genes">Diabetic Retinopathy</option>
            <option value="nephro_common_genes">Diabetic Nephropathy</option>
            <option value="neuro_common_genes">Diabetic Neuropathy</option>
			
			
        </select>
		
	<align="right"> <input type="text" name="search" id = "summary" size=20 maxlength=100 placeholder = "Enter species name.."/>
		<input type="Submit" name="Submit" value="Search species"/> </form>
		
		</p>
<p align="right"> 
				<form method="post" action="searchresults.php" name="search_form">
	
	&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
    <input type="text" name="search" id = "summary" size=15 maxlength=15 placeholder = "Enter PMID here.."/>
		<input type="Submit" name="Submit" value="Search PMID"/></form></br></p>
		
		
		<!--<p align = "right"> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
		</p>-->

		</div>
	<br/>
	<br/><CENTER>
	<div id="menu-wrapper">
		<div id="menu" class="container">
		<ul>
				<li class="current_page_item"><a href="index.php">Home</a></li>
				<li class="current_page_item"><a href="about.php">About</a></li>
				<li class="current_page_item"><a href="advances_search.php">Advanced Search</a></li>
				<li class="current_page_item"><a href="contact.php">Contact Us</a></li>
				<li class="current_page_item"><a href="help.php">Help</a></li>
				<li class="current_page_item"><a href="kombat_community.php">KOMBAT Community</a></li>
			</ul>
			<!--<ul>
				<li class="current_page_item"><a href="index.php"> Home</a></li>
				<li class="current_page_item"><a href="about.php"> About </a></li>
				<li class="current_page_item"><a href="contact.php">Contact Us</a></li>
				<li class="current_page_item"><a href="help.php">Help</a></li>
				<li class="current_page_item"><a href="kombat_community.php">KOMBAT Community</a></li>
				<li class="current_page_item"><a href="kombat_community.php">KOMBAT Community</a></li>
			</ul>-->
		</div>
	</div>
		<!-- end #menu --> 
	</div>
</CENTER>

<div id="page" class="container">
	
		<div id="content1">
<form method="post" action="searchresults.php" name="search_form">
	<p align="left">
	
    <input type="text" name="search" id = "summary" size=15 maxlength=15 placeholder = "Enter PMID here.."/>
		<input type="Submit" name="Submit" value="Search PMID"/></form>
<align="centre">
<form method="post" action="searchresults.php" name="search_form">
	
	
    <input type="text" name="search" id = "summary" size=15 maxlength=15 placeholder = "Enter PMID here.."/>
		<input type="Submit" name="Submit" value="Search PMID"/></form></p>
		<!--<font size = "4px", color = "#008C9A", align = "centre"><b> SELECT </b></font> <br/>
		
		<form method="post" action="test4.php" name="form">
		<select name = "table">
            <option value="athero_common_genes">Atherosclerosis</option>
			<option value="cardio_common_genes">Cardiovascular</option>
            <option value="retino_common_genes">Diabetic Retinopathy</option>
            <option value="nephro_common_genes">Diabetic Nephropathy</option>
            <option value="neuro_common_genes">Diabetic Neuropathy</option>
			
			
        </select></form>
	
	<br/>
	
		<u>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp </u>	
<br/>
<br/>

		<font size = "4px", color = "#008C9A", align = "centre"><b> AND </b></font> <br/> <br/>
		
	<input type="checkbox" name="search[]" value = "Inflammation"/><font color = "#2F4F4F"><b>Inflammation</b></font>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp 
	 <input type="checkbox" name="search[]" value = "Diet"/> <font color = "#2F4F4F"><b>Diet</b></font> 
	&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp<input type="checkbox" name="search[]" value = "Stress"/> <font color = "#2F4F4F"><b>Stress</b></font> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp<input type="checkbox" name="search[]" value = "Obesity"/> <font color = "#2F4F4F"><b>Obesity</b></font>  <br/> <br/> <br/>
<input type= "submit" value= "Search" name="sub"/> -->
<br/>
<br/>
<br/>
<br/>

  </p>
</div>
<div id="copyright" class="container">
	<p> Website copyright &copy; Institute of Genomics and  Integrative Biology. All Rights Reserved. <br>
				| Internet  Explorer 5.0 - Later Version.  Report Bugs or technical problems to <a href="mailto:ramuigib@gmail.com" target="_parent" onClick="window.event.cancelBubble=true;">ramuigib@gmail.com</p>

</div>
</body>
</html>
