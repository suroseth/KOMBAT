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

				<form method="post" action="summary_table.php" name="search_form">
	<p align="right"> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
	
    <input type="text" name="search" id = "summary" size=15 maxlength=15 placeholder = "Gene Symbol"/>
		<input type="Submit" name="Submit" value="Gene Search"/> </form><br/> 
		</form></p>
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
				<li class="current_page_item"><a href="new_help.html">&nbsp &nbsp Help &nbsp &nbsp</a></li>
			</ul>
		</div>
	</div>
		<!-- end #menu --> 
	</div>
</CENTER>

	<div id="page" class="container">
	
		<div id="content1">
	<font color = 'blue'>The largest fraction of PubMed articles focus on antibacterial resistance.</font></a>
	<p><h3><font color = '#008C9A'><u> Novel therapeutic strategies for tackling 'ANTIBACTERIAL' resistance  </u></font></h3></p>
	
		<!--<div id="content">
			<div class="title"> 

				<h2><font size = "12px">KOMBAT</font></h2>
				
				<span class="byline"><font font size = "5px" color = 'red'><i><b>A comprehensive collection of novel therapeutic strategies for tackling antimicrobial resistance</b></i></font><font color = 'green'><i><b> (Bacteria, Virus, Fungus, Parasites)</b></i></font></span> </div>
			<div><p><font size = "4.5px" color = 'blue'> Antimicrobial resistance or drug resistance is a global public health concern that is increasing day by day. Researchers around the world are working on strategies to overcome this problem. This often end up in discovering novel lead molecule, drug target or any new therapeutic strategies. However, these data are unevenly distributed, and therefore difficult to access all the required information at a time. The goal of this project is to extract these data and classify into categories to make it user friendly and readily accessible.</font></p>
			<p><font size = "4.5px" color = 'blue'>The information provided in the database includes small molecules, antimicrobial peptides, phytochemicals, photodynamic therapy, drug targets, bacteriophages, nanocomposites etc showing potent therapeutic activity against various microorganisms.
			<p><font size = "4px" color = 'red'><i>Disclaimer: These are  only strategies that needs to go long way before it becomes mainstream threatment option</i></font></p></font></div>
			<!--<font size = "4.5px" color = 'blue'>Disclaimer: These are  only strategies that needs to go long way before it becomes actual medicine.</font></p></div> -->
		</div>
<center>
<!--<table >
<tr>
<th align="center" bgcolor="grey"><U><B>KEYWORDS</B></U>
</th></tr>
</table>-->
<br>

<table>
<div id="menu" class="container">
<tr><h2> >>Search Categories >></h2></tr><br><br>

	<li><p><button type = "button"><a href= "bacteria_AMP.php"><img src = './images/peptide.png' ><p><h3>ANTIMICROBIAL PEPTIDE</img></p></h3></a></button></p></li>
	<li><td><tr><p><button type = "button"><a href= "bacteria_light.php"><h3>LIGHT THERAPY</h3></a></button></p></tr></td></li>
	<p><button type = "button"><a href= "bacteria_NP.php"><h3>NANOPARTICLES</h3></a></button></p>
	<p><button type = "button"><a href= "bacteria_phage.php"><h3>PHAGE THERAPY</h3></a></button></p>
	<p><button type = "button"><a href= "bacteria_NaturalProduct.php"><h3>PHYTOCHEMICALS & NATURAL PRODUCTS</h3></a></button></p>
	<p><button type = "button"><a href= "bacteria_NovelAgent.php"><h3>CHEMICAL COMPOUNDS</h3></a></button></p>
	<!--<p><button type = "button"><h3>SMALL MOLECULE INHIBITOR</h3></a></button></p>
	<ul>
			<li><a href = "bacteria_NaturalProduct.php">Natural Products</a> </li>
			<li><a href = "bacteria_NovelAgent.php">Chemically Synthesized Compounds</a> </li>
		
	</li>
	<p><tr><a href= "bacteria_light.php">LIGHT THERAPY</a></tr></p>
	<li><a href= "bacteria_NP.php">NANOPARTICLES</a></li>
	<li><a href= "bacteria_phage.php">PHAGE THERAPY</a></li>
	<li><b>SMALL MOLECULE INHIBITOR</b>
		<ul>
			<li><a href = "bacteria_NaturalProduct.php">Natural Products</a> </li>
			<li><a href = "bacteria_NovelAgent.php">Chemically Synthesized Compounds</a> </li>
		
	</li>-->
</div>
</table>
<!--<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>-->
<!--<center>
<div id>
<?php include "footer.php"; ?>
</center>-->

</body>
</html>



</body>
</html>
</html>