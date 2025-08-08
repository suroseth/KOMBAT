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

if(!isset($_POST['search'])) {
	header("Location:index.php");
}

$search_query1=mysqli_query($con,"SELECT * FROM all_table WHERE PMID LIKE  '%".$_POST['search']."%'");
$search_query2=mysqli_query($con,"SELECT * FROM all_table WHERE THEME LIKE  '%".$_POST['search']."%'");
$search_query3=mysqli_query($con,"SELECT * FROM all_table WHERE EVIDENCE LIKE  '%".$_POST['search']."%'");

if(mysqli_num_rows($search_query1)!=0)
{
	$search_rs=mysqli_fetch_assoc($search_query1);
}
elseif(mysqli_num_rows($search_query2)!=0)
{
	$search_rs=mysqli_fetch_assoc($search_query2);
}
elseif(mysqli_num_rows($search_query3)!=0)
{
	$search_rs=mysqli_fetch_assoc($search_query3);
}
else 
{
	echo "NO RESULTS FOUND";
}

$color="1";
echo "<table border='0', width='1200', align='center'>
<tr>
<th bgcolor = '#A64AC9' align=center><font color = '#fff'>THEME</font></th>
<th bgcolor = '#A64AC9' align=center><font color = '#fff'>PMID</font></th>
<th bgcolor = '#A64AC9' align=center><font color = '#fff'>EVIDENCE</font></th>

</tr>";
do { 
		if ($color==1){
  echo "<tr bgcolor = '#efefef'>";
  
  echo "<td align=left><font color = 'BLACK' size = '1px'><b>" . $search_rs['THEME'] . "</b></font></td>";
  
  $lit2 = $search_rs['PMID'];
  
  echo "<td width = '80' align=left><a href='http://www.ncbi.nlm.nih.gov/pubmed/?term=$lit2' target='_blank'><font color = 'blue'><b>" . $search_rs['PMID'] . "</b></font></a></td>";

  echo "<td align=left><font color = 'BLACK' size = '1px'><b>" . $search_rs['EVIDENCE'] . "</b></font></td>";
	}

}
while($search_rs=mysqli_fetch_assoc($search_query1) OR $search_rs=mysqli_fetch_assoc($search_query2) OR $search_rs=mysqli_fetch_assoc($search_query3));


	// Close the database connection
	mysqli_close($con);
	
?> 
	
	</body>
</html>






