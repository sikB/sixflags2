<?php
	include 'includes/db_connect.php';
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
				<form action="admin_process.php" method="post">
			  <div class="form-group">
			    <label for="field1">Promotion Title</label>
			    <input type="text" name='title' class="form-control" id="field1" placeholder="Promotion">
			  </div>
			  <div class="form-group">
			    <label for="field2">Header Image</label>
			    <input type="text" name="headerImage" class="form-control" id="field2" placeholder="Path to File">
			  </div>
			   <div class="form-group">
			    <label for="field3">Header Text</label>
			    <input type="text" name="headerText" class="form-control" id="field3" placeholder="Path to File">
			  </div>
			   <div class="form-group">
			    <label for="field4">Body Text</label>
			    <input type="text" name="bodyText" class="form-control" id="field4" placeholder="Enter Body Text">
			  </div>
			   <div class="form-group">
			    <label for="field5">Lower Image</label>
			    <input type="text" name="lowerImage" class="form-control" id="field5" placeholder="Path to Lower Image">
			  </div>
			   <div class="form-group">
			    <label for="field6">Lower Header</label>
			    <input type="text" name="lowerHeader" class="form-control" id="field6" placeholder="Path to Lower Header">
			  </div>
			   <div class="form-group">
			    <label for="field7">Lower Body Text</label>
			    <input type="text" name="lowerBodyText" class="form-control" id="field7" placeholder="Path to Lower Body Text">
			  </div>
			   <div class="form-group">
			    <label for="field8">Lower Image 2</label>
			    <input type="text" name="lowerImage2" class="form-control" id="field8" placeholder="Path to Lower Image 2">
			  </div>
			   <div class="form-group">
			    <label for="field10">Lower Header 2</label>
			    <input type="text" name="lowerHeader2" class="form-control" id="field10" placeholder="Path to Lower Header 2">
			  </div>
			   <div class="form-group">
			    <label for="field9">Lower Body Text 2</label>
			    <input type="text" name="lowerBodyText2" class="form-control" id="field9" placeholder="Path to Lower Body Text 2">
			  </div>
			  <button type="submit" class="btn btn-default">Submit</button>
			</form>
		</div>
	</div>
</div>
</body>
</html>