<?php
	include 'includes/db_connect.php';

	$dbColumns = '';
	$values = '';
	foreach($_POST as $key=>$value){
		$dbColumns .= $key.",";
		$values .= "'".$value."',";
	}
	$trimmedValues = rtrim($values, ",");
	$trimmeddbColumns = rtrim($dbColumns, ",");

$query = 'INSERT INTO promos 
('.$trimmeddbColumns.')
values
('.$trimmedValues.')';

	$result = mysql_query($query);
	header('Location: admin.php?updated=true');
	?>

<!-- *('.$title.','.$headerImage.','.$headerText.','.$bodyText.','.$lowerImage.','.$lowerHeader.','.$lowerBodyText.','.$lowerImage2.','.$lowerHeader2.','.$lowerBodyText2.')';*/ -->
<!-- 
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

// $_POST['title']."'";
// $_POST['headerImage']."'";
// $_POST['headerText']."'";
// $_POST['bodyText']."'";
// $_POST['lowerImage']."'";
// $_POST['lowerHeader']."'";
// $_POST['lowerBodyText']."'";
// $_POST['lowerImage2']."'";
// $_POST['lowerHeader2']."'";
// $_POST['lowerBodyText2']."'";
 -->
 <!-- 
(title, headerImage, headerText, bodyText, lowerImage, lowerHeader, lowerBodyText, lowerImage2, lowerHeader2, lowerBodyText2)  -->