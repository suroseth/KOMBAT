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
	
    <!--<input type="text" name="search" id = "summary" size=15 maxlength=15 placeholder = "Enter PMID here.."/>
		<input type="Submit" name="Submit" value="Search PMID"/>--> </form><br/> 
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
				<font color = '#5c081f' size = "6px"><b>ANTIBIOTIC ERA //</b></font>
				<span class="byline"><font color = '#109c86' size = "5px"><p>The dicovery of Penicillin was a international historic chemical landmark. It was first introduced in the 1940s. To know more about the discovery and development of Penicillin <a href = "https://www.acs.org/content/acs/en/education/whatischemistry/landmarks/flemingpenicillin.html" target="_blank">click here </a>.......</p>
				<p><b>"The Science of Antibiotic Discovery" : </b> Timeline of antibiotic dicovery and deployment<a href = "https://pubmed.ncbi.nlm.nih.gov/32197064/" target="_blank">[ PMID: 32197064] </a></p></font></span> </div>
			<div class="title">
				<font color = '#5c081f' size = "6px"><b>ANTIBIOTIC RESISTANCE: POST ANTIBIOTIC ERA //</b></font>
				<span class="byline"><font color = '#109c86' size = "5px"><p>Antibiotic Resistance is a paradigm of human evolution.<b> World Health Organization <a href = "https://www.who.int/health-topics/antimicrobial-resistance" target = "_blank"> (WHO)</a></b>  and <b> Centers for Disease Control and Prevention <a href = "https://www.cdc.gov/drugresistance/index.html" target = "_blank">(CDC)</a> </b> has taken global action plans for prevention and control of AMR. </br></br>The <b>Indian Council for Medical Research (ICMR) </b> has launched India's Antimicrobial Resistance Surveillance and Research Initiative in the namne of <a href = "https://iamrsn.icmr.org.in/index.php/amrsn/amrsn-network" target = "_blank"> <b>AMRSN</a> Network </b> in 2013.
			This  network focuses six pathogenic groups namely: (i) Enterobacteriaceae causing sepsis, (ii) Gram negative non-fermenters, (iii) Enteric fever pathogens, (iv) Diarrheagenic bacterial organisms, (v) Gram positives: staphylococci and enterococci and
			(vi) Fungal pathogens (excluded in WHO priority pathogens)-yeasts (Candida and Cryptococcus spp.) and mycelial fungi (Aspergillus spp. and Zygomycetes spp.)</p>
				</font></span> </div>
			<div class="title">
				<font color = '#5c081f' size = "6px"><b>LATEST NEWS //</b></font>
				<span class="byline"><font color = '#5c081f' size = "5px"><p>##</font> <font color = '#109c86' size = "5px">Antibiotic Resistance Found Deep in Forests of Scandinavia <a href = "https://www.smithsonianmag.com/smart-news/antibiotic-resistance-found-deep-forests-scandinavia-180978582/" target = "_blank"> click.... </a></font> </p>
				<font color = '#5c081f' size = "5px"><p>##</font> <font color = '#109c86' size = "5px">Vaccines for preventing antibiotic resistance - to control drug-resistant outbreaks of typhoid and cholera in Zimbabwe <a href = "https://www.who.int/news/item/11-09-2021-stories-from-the-field-how-vaccines-can-help-to-prevent-antibiotic-resistance---zimbabwe-s-response-to-drug-resistant-outbreaks-of-typhoid-and-cholera" target = "_blank"> click....</a></font></p>
				<font color = '#5c081f' size = "5px"><p>##</font><font color = '#109c86' size = "5px"> Antimicrobial resistance is rising in India, says ICMR report <a href = "https://timesofindia.indiatimes.com/city/mumbai/antimicrobial-resistance-is-rising-in-india-says-icmr-report/articleshow/85913195.cms" target = "_blank"> click </a></font></p>
				<font color = '#5c081f' size = "5px"><p>##</font><font color = '#109c86' size = "5px"> Using evolutionary principles could prevent antibiotic resistance -- from a recent study <a href = "https://elifesciences.org/for-the-press/44f68798/using-evolutionary-principles-could-prevent-antibiotic-resistance" target = "_blank"> click....</a>
			</p>
				</br></font></span> </div>
			
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

</div>

</body>
</html>