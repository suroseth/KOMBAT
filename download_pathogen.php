<?php
require("config.php");
header('Content-Type: text/csv; charset=utf-8');
header('Content-Disposition: attachment; filename=data.csv');
	
	$output = fopen('php://output', 'w');
	fputcsv($output, array('Bacteria', 'Virus', 'Fungi', 'Parasite' ));
	$rows = mysqli_query($con, "SELECT * FROM pathogen");
while ($row = mysqli_fetch_assoc($rows)) fputcsv($output, $row);	
mysqli_close($con);
	?>