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
				<p><font color = "#ffffff" size = "5px"> &nbsp &nbsp &nbsp Knowledgebase Of Microbes' Battling Agents for Therapeutics</font></p>
			</div>

				<form method="post" action="searchresults.php" name="search_form">
	<p align="right"> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
	
    <input type="text" name="search" id = "summary" size=15 maxlength=15 placeholder = "Enter Keyword here.." required/>
		<input type="Submit" name="Submit" value="GO"/></form><!--<form method="post" action="searchresults_info.php" name="search_form">
	<p align="right"> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
	
    <input type="text" name="search" id = "summary" size=50 maxlength=50 placeholder = "Enter species name.."/>
		<input type="Submit" name="Submit" value="Search species"/> </form>--><br/> 
		</p> <br/> 
		</p>
		
		<!--<p align = "right"> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
		</p>-->

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
	
	
		<div id="content">
			<div class="title"> 

				<h2><font size = "12px" color = '#5c081f'>KOMBAT</font></h2>
				
				<span class="byline"><font font size = "5px" color = '#5c0854'><i>A comprehensive collection of novel therapeutic strategies for tackling antimicrobial resistance</i></font>
				<font color = 'green' font size = "5px"><b><i>(Bacteria, Virus, Fungus, Parasites)</i></b></font></span> </div>
				<div class="title"> 

				<!--<h2><font size = "12px" color = '#5c081f'>KOMBAT</font></h2>-->
				
				<span class="byline"><font font size = "4px" color = '#109c86'><p>Antimicrobial resistance or drug resistance is a global public health concern that is increasing day by day.
				Researchers around the world are working on strategies to overcome this problem. 
				This often end up in discovering novel lead molecule, drug target or any new therapeutic strategies.
				However, these data are unevenly distributed, and therefore difficult to access all the required information at a time. </p>
				<p>The goal of this project is to extract these data and classify into categories to make it user friendly and readily accessible.
				<br>The information provided in the database includes small molecules, 
			antimicrobial peptides, phytochemicals, photodynamic therapy, drug targets, bacteriophages, nanocomposites etc showing potent therapeutic activity against various microorganisms.</p>
				</font>
				<p><font size = "5.5px" color = 'red'><marquee width="100%" direction="left" height="100px" scrollamount="20">
			<i>Please note this database has been made as part of a research programme and may not be considered for clinical management or intervention.</i></marquee></font></p></font>
				</span> </div>
			</div>
<br/>
<div id="divMenu">
<div id="sidebar">
			<div class="box2">
				<img src="images/MICROBIAL_CLASS1.png"/>
				<ul class="style2">			
       
             </br></b> </div>
		<div id="sidebar1">

		 <div class="box1">
				
				<ul class="style2">
				        <li><a href="antibacteria.php"><font color = '#b02319' size = "5pt"><u><b>Bacteria >></a>
                <ul>
                   </ul></b></u></font></li>
		<br/> 
           </b></u></font></li>
			<br/>
			<li><a href="antiviral.php"><font color = '#b02319' size = "5pt"><u><b>Virus >></a>
           </b></u></font></li>
			<br/>
			 </b></u></font></li>
			<br/>
			<li><a href="antifungal.php"><font color = '#b02319' size = "5pt"><u><b>Fungi >></a>
        
           </b></u></font></li>
			<br/>
			<li><a href="antiparasite.php"><font color = '#b02319' size = "5pt"><u><b>Parasite >></a></b>
		<br/> <br/> <br/>   

		     
		
</div>
			</div>
		</div>
	</div>
	<!--<div id = "disclaimer">
		<p>Disclaimer: These are  only strategies that needs to go long way before it becomes actual medicine.
		</p></div>-->
</div>



<div id="footer-wrapper">
	<div id="footer" class="container">
		<div id="box12">
			<div class="title">
				<h4>Related Database</h4>
			</div>
			<ul class="style1">
				<li><a href="related_database.php" ><font color = "#DAA520">Click here</font></a></li>
				
			</ul>
		</div>
		
		<div id="box12">
			<div class="title">
				<h4><font align = "center">Related Links</font></h4>
			</div>

			<ul class="style1">
				<li><a href="related_link.php" ><font color = "#DAA520">Click here</font></a></li>
				<!--<li><a href="http://www.genome.jp/kegg/"><font color = "#DAA520">KEGG Pathways</a></li>-->
			</ul>
		</div>
		<div id="box12">
			<div class="title">
				<h4><font align = "center">Database Information</font></h4>
			</div>

			<ul class="style1">
				<!--<li><a href="statistic.html"><font color = "#DAA520">Database Statistics</font></a></li>-->
				<li><a href="download_data.php"><font color = "#DAA520">Download Data</a></li>
			</ul>
		</div>

		
	</div>
</div>
</div>

<div id="copyright" class="container">
	<p> Website copyright &copy; Institute of Genomics and  Integrative Biology. All Rights Reserved. <br>
				| Internet  Explorer 5.0 - Later Version.  Report Bugs or technical problems to <a href="mailto:ramuigib@gmail.com" target="_parent" onClick="window.event.cancelBubble=true;">ramuigib@gmail.com</p>

</div>
</body>
</html>
