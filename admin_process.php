<?php
	include 'includes/db_connect.php';

	// print_r ($_POST);

// print $_POST['title'];
// print $_POST['headerImage'];
// print $_POST['headerText'];
// print $_POST['bodyText'];
// print $_POST['lowerImage'];
// print $_POST['lowerHeader'];
// print $_POST['lowerBodyText'];
// print $_POST['lowerImage2'];
// print $_POST['lowerHeader2'];
// print $_POST['lowerBodyText2'];

$title = "'".$_POST['title']."'";
$headerImage = "'".$_POST['headerImage']."'";
$headerText = "'".$_POST['headerText']."'";
$bodyText = "'".$_POST['bodyText']."'";
$lowerImage = "'".$_POST['lowerImage']."'";
$lowerHeader = "'".$_POST['lowerHeader']."'";
$lowerBodyText = "'".$_POST['lowerBodyText']."'";
$lowerImage2 = "'".$_POST['lowerImage2']."'";
$lowerHeader2 = "'".$_POST['lowerHeader2']."'";
$lowerBodyText2 = "'".$_POST['lowerBodyText2']."'";

$query = 'INSERT INTO promos 
(title, headerImage, headerText, bodyText, lowerImage, lowerHeader, lowerBodyText, lowerImage2, lowerHeader2, lowerBodyText2) 
values
('.$title.','.$headerImage.','.$headerText.','.$bodyText.','.$lowerImage.','.$lowerHeader.','.$lowerBodyText.','.$lowerImage2.','.$lowerHeader2.','.$lowerBodyText2.')';


	$result = mysql_query($query);
	print mysql_error();
	print "<br />";
	print "Finished";
	?>

