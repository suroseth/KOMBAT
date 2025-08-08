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
	
    <input type="text" name="search" id = "summary" size=15 maxlength=15 placeholder = "Enter Keyword here.."/>
		<input type="Submit" name="Submit" value="GO"/> </form><br/> 
		</p>
		<p align = "right"> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
		</p>

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
<br>
<div id="page" class="container">
		<div id="content1">
			<div class="title">
				<font color = '#5c081f' size = "10px"><b>KOMBAT</b></font>
				<span class="byline"><font color = 'red' size = "6px"><p>An encyclopedic collection of novel therapeutic strategies targeting antimicrobial resistance</p></font></span> </div>
			<div class="title">
				<!--<font color = '#5c081f' size = "6px"><b>ANTIBIOTIC RESISTANCE: POST ANTIBIOTIC ERA //</b></font>-->
				<span class="byline"><font color = '#109c86' size = "5px"><p>Antimicrobial resistance (AMR) is one of the top 10 threats affecting global health (WHO).
				AMR subsides the effective prevention and treatment of infections caused by microbial pathogens including bacteria, parasites, viruses and fungi (WHO). 
				AMR causes approximately 700,000 death every year and is projected to rise to 10 million by 2050 if necessary actions are not taken.
				This health catastrophe is predicted to cause $100.2 trillion GDP loss by 2050 <a href = "https://wellcomecollection.org/works/rdpck35v" target = "_blank">(Jim O'Neill, 2014).</a>
				</br>The answer to this crisis is to develop novel effective therapies. Traditional drug discovery is a costly and time consuming process. 
				Undoubtedly, the antimicrobial discovery pipeline needs rejuvenation with modern technologies. 
				</p>
				</font></span> </div>
			<div class="title">
				<!--<font color = '#5c081f' size = "6px"><b>LATEST NEWS //</b></font>-->
				<span class="byline"><font color = '#109c86' size = "5px"><p>Our goal in KOMBAT was to develop an integrated resource of newly identified chemotherapeutic strategies against 
				microbial pathogens from scientific literature.
				We have done text mining using subjective (sentiment based) and objective approach. 
				Overwhelmingly, KOMBAT is a collection of therapeutic strategies (chemical compounds, antimicrobial peptides, bacteriophages, phytochemicals, nanocomposites, probiotics ) 
				and novel drug targets against microbial pathogens including bacteria, virus, parasites and fungi.
				</p>
				</font></span> </div>
			<div class="wordcloud">
			<img src = './images/about3.png', width="100%" height="30%" align = 'center'>
			</div>
			<div class="title">
				<!--<font color = '#5c081f' size = "6px"><b>LATEST NEWS //</b></font>-->
				<span class="byline"><font color = '#109c86' size = "5px"><p>
				The wordcloud is a representive diagram showing the realtive importance of the terms used in text mining. 
				Identified therapeutic strategies can further be classified into categories and sub-categories.
				</p>
			</div>
			<br/>
		</div>
	</div>

	</div>
</div>
<br/>
<br/>
<div id="copyright" class="container">
	<p> Website copyright &copy; Institute of Genomics and  Integrative Biology. All Rights Reserved. <br>
				| Internet  Explorer 5.0 - Later Version. I Report Bugs or technical problems to <a href="mailto:ramuigib@gmail.com" target="_parent" onClick="window.event.cancelBubble=true;">ramuigib@gmail.com.</p>



</body>
</html>