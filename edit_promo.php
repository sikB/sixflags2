<?php
	include 'includes/db_connect.php';
	$id = $_GET['id'];
	$query = 'SELECT * FROM promos WHERE id =' .$id;
	$result = mysql_query($query);
	$row = mysql_fetch_assoc($result);
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="adminWrapper col-sm-6 col-sm-offset-3">
				<div class="success msg"><?php print $message;?></div>
				<form action="admin_process.php?task=update" method="post">
				<input type="hidden" name="id" value="<?php print $row['id'];?>">
			  <div class="form-group">
			    <label for="field1">Promotion Title</label>
			    <input type="text" name='title' class="form-control" id="field1" placeholder="Promotion" value="<?php print $row['title'];?>">
			  </div>
			  <div class="form-group">
			    <label for="field2">Header Image</label>
			    <input type="text" name="headerImage" class="form-control" id="field2" placeholder="Path to File" value="<?php print $row['headerImage'];?>">
			  </div>
			   <div class="form-group">
			    <label for="field3">Header Text</label>
			    <input type="text" name="headerText" class="form-control" id="field3" placeholder="Path to File" value="<?php print $row['headerText'];?>">
			  </div>
			   <div class="form-group">
			    <label for="field4">Body Text</label>
			    <input type="text" name="bodyText" class="form-control" id="field4" placeholder="Enter Body Text" value="<?php print $row['bodyText'];?>">
			  </div>
			   <div class="form-group">
			    <label for="field5">Lower Image</label>
			    <input type="text" name="lowerImage" class="form-control" id="field5" placeholder="Path to Lower Image" value="<?php print $row['loweImage'];?>">
			  </div>
			   <div class="form-group">
			    <label for="field6">Lower Header</label>
			    <input type="text" name="lowerHeader" class="form-control" id="field6" placeholder="Path to Lower Header" value="<?php print $row['lowerHeader'];?>">
			  </div>
			   <div class="form-group">
			    <label for="field7">Lower Body Text</label>
			    <input type="text" name="lowerBodyText" class="form-control" id="field7" placeholder="Path to Lower Body Text" value="<?php print $row['lowerBodyText'];?>">
			  </div>
			   <div class="form-group">
			    <label for="field8">Lower Image 2</label>
			    <input type="text" name="lowerImage2" class="form-control" id="field8" placeholder="Path to Lower Image 2" value="<?php print $row['lowerImage2'];?>">
			  </div>
			   <div class="form-group">
			    <label for="field9">Lower Header 2</label>
			    <input type="text" name="lowerHeader2" class="form-control" id="field10" placeholder="Path to Lower Header 2" value="<?php print $row['lowerHeader2'];?>">
			  </div>
			   <div class="form-group">
			    <label for="field10">Lower Body Text 2</label>
			    <input type="text" name="lowerBodyText2" class="form-control" id="field9" placeholder="Path to Lower Body Text 2" value="<?php print $row['lowerBodyText2'];?>">
			  </div>
			  <button type="submit" class="btn btn-default">Update</button>
			</form>
		</div>
	</div>
</div>
</body>
</html>