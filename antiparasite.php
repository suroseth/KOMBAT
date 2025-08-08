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

				<form method="post" action="searchresults.php" name="search_form">
	<p align="right"> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
	
    <input type="text" name="search" id = "summary" size=15 maxlength=15 placeholder = "Enter Keyword here.."/>
		<input type="Submit" name="Submit" value="GO"/> </form><br/> 
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
				<li class="current_page_item"><a href="kombat_community.php">&nbsp &nbsp KOMBAT Community &nbsp &nbsp</a></li>
			</ul>
		</div>
	</div>
		<!-- end #menu --> 
	</div>
</CENTER>

	<div id="page" class="container">
	
		<div id="content1">
	<!--<font color = 'blue'>The largest fraction of PubMed articles focus on antibacterial resistance.</font></a>-->
	<p><h1><font color = '#ab2b22'><u> Novel therapeutic strategies for tackling 'ANTIPARASITIC' resistance  </u></font></h1></p>
	
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
<div class = "wrapper">
<tr><h2> >>Search Categories >></h2></tr><br><br>
<div class="wordcloud" >
			&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <a href = "parasite_AMP.php"><img src = './images/pep1.png', width="25%" height="20%" align = 'center'></a>
			&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
			<a href = "parasite_NaturalProduct.php"><img src = './images/P5.png', width="33%" height="20%" align = 'center'></a>
			</div>
<!--<div class="wordcloud" >
			&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <a href = "parasite_NP.php" ><img src = './images/p3.png', width="20%" height="20%" align = 'center'></a>
			&nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
			<a href = "parasite_NaturalProduct.php"><img src = './images/p5.png', width="33%" height="20%" align = 'center'></a>
			</div>-->
<div class="wordcloud" >
			&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  <a href = "parasite_light.php"><img src = './images/P2.png', width="23%" height="20%" align = 'center'></a>
			&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
			<a href = "parasite_NovelAgent.php"><img src = './images/P6.png', width="19%" height="19%" align = 'center'></a>
			</div>

	<!--<p><button type = "button"><a href= "parasite_AMP.php"><h3>ANTIMICROBIAL PEPTIDE</h3></a></button></p>
	<p><button type = "button"><a href= "parasite_light.php"><h3>PHOTODYNAMIC THERAPY</h3></a></button></p>
	<p><button type = "button"><a href= "parasite_NP.php"><h3>NANOPARTICLES</h3></a></button></p>
	<!--<p><button type = "button"><a href= "bacteria_phage.php"><h3>PHAGE THERAPY</h3></a></button></p>
	<p><button type = "button"><a href= "parasite_NaturalProduct.php"><h3>PHYTOCHEMICALS & NATURAL PRODUCTS</h3></a></button></p>
	<p><button type = "button"><a href= "parasite_NovelAgent.php"><h3>CHEMICAL COMPOUNDS</h3></a></button></p>
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