<!DOCTYPE.html>
<html>
<title>
IGIB
</title>
<head>
<link rel = "stylesheet" href = "style.php">
</HEAD>
<body>
<div class = "heading"><center>
<a href = "http://www.igib.res.in" target="_blank"><img src="igib.gif" align = 'left'></a>


<?php include "form.php"; ?>

<?php include "header.php"; ?>
 
</center>
</div>
<div class = "navbar"><CENTER>
<A HREF = "index.php" class="link">HOME</A>
<A HREF = "about.php" class="link">ABOUT</A>
<A HREF = "contact.php" class="link">CONTACT</A>
<A HREF = "help.php" class="link">HELP</A>
</CENTER></div><BR><br><br><BR><br>

<?php
require("config.php");
$rs = mysqli_query($con, "SELECT * FROM drug_target");
$color="1";
echo "<table border='0', width='1200', align='center'>
<tr>
<th bgcolor = '#2E1114' align=center><font color = '#fff'>THEME</font></th>
<th bgcolor = '#2E1114' align=center><font color = '#fff'>PMID</font></th>
<th bgcolor = '#2E1114' align=center><font color = '#fff'>EVIDENCE</font></th>


</tr>";

	// Loop the recordset $rs
	while($row = mysqli_fetch_array($rs))
	
	{
		 // echo "<td align=left><font color = 'purple'><b>" . $row['THEME'] . "</b></font></td>";
		
		if ($color==1){
  echo "<tr bgcolor = '#efefef'>";
  
  echo "<td align=left><font color = 'BLACK' size = '1px'><b>" . $row['THEME'] . "</b></font></td>";
  
  $lit2 = $row['PMID'];
  echo "<td width = '80' align=left><a href='http://www.ncbi.nlm.nih.gov/pubmed/?term=$lit2' target='_blank'><font color = 'blue'><b>" . $row['PMID'] . "</b></font></a></td>";
 // echo "<td align=left><font color = 'BLACK' size = '1px'><b>" . $row['PMID'] . "</b></font></td>";
  echo "<td align=left><font color = 'BLACK' size = '1px'><b>" . $row['EVIDENCE'] . "</b></font></td>";
	}

}

	// Close the database connection
	mysqli_close($con);
	
	?> 
	
	</body>
</html>