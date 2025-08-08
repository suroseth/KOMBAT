<?php
require("config.php");
header('Content-Type: text/csv; charset=utf-8');
header('Content-Disposition: attachment; filename=data.csv');
	
	$output = fopen('php://output', 'w');
	fputcsv($output, array('ENTITY', 'POTENCY', 'SAFETY_INFORMATION', 'EVIDENCE', 'PMID'));
	$rows = mysqli_query($con, "SELECT * FROM bacteria_light");
while ($row = mysqli_fetch_assoc($rows)) fputcsv($output, $row);	
mysqli_close($con);
	?>