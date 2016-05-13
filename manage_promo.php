<?php
	include 'includes/db_connect.php';
	$query = 'SELECT * FROM promos';
	$result = mysql_query($query);
	while($row = mysql_fetch_assoc($result)){
		$promoArray[] = $row;
	}
	// $updated = $_GET['updated'];
	// if($updated == 'true'){
	// 	$message = 'Your promo has been added to the database';
	// }
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
			<div class="adminWrapper col-sm-10 col-sm-offset-1">
				<div class="success msg"><?php print $message;?></div>
				<div class="promo_row">

				<?php
				foreach($promoArray as $promo):?>

					<div class="adminEdit">
						<h3><?php print $promo["title"]; ?></h3>
						<a href="edit_promo.php?id=<?php print $promo['id'];?>"><button class="btn btn-primary">Edit</button>
						<a href="admin_process.php?task=delete&id=<?php print $promo['id'];?>"><button class="btn btn-danger">Delete</button>
					</div>
					<?php endforeach; ?>
					<!-- <div class="adminEdit">
						<h3><?php print $promo["headerImage"]; ?></h3>
						<button class="btn btn-primary">Edit</button>
						<button class="btn btn-danger">Delete</button>
					</div>
					<div class="adminEdit">
						<h3><?php print $promo["headerText"]; ?></h3>
						<button class="btn btn-primary">Edit</button>
						<button class="btn btn-danger">Delete</button>
					</div>
					<div class="adminEdit">
						<h3><?php print $promo["bodyText"]; ?></h3>
						<button class="btn btn-primary">Edit</button>
						<button class="btn btn-danger">Delete</button>
					</div>
					<div class="adminEdit">
						<h3><?php print $promo["lowerImage"]; ?></h3>
						<button class="btn btn-primary">Edit</button>
						<button class="btn btn-danger">Delete</button>
					</div>
					<div class="adminEdit">
						<h3><?php print $promo["lowerHeader"]; ?></h3>
						<button class="btn btn-primary">Edit</button>
						<button class="btn btn-danger">Delete</button>
					</div>
					<div class="adminEdit">
						<h3><?php print $promo["lowerBodyText"]; ?></h3>
						<button class="btn btn-primary">Edit</button>
						<button class="btn btn-danger">Delete</button>
					</div>
					<div class="adminEdit">
						<h3><?php print $promo["lowerImage2"]; ?></h3>
						<button class="btn btn-primary">Edit</button>
						<button class="btn btn-danger">Delete</button>
					</div>
					<div class="adminEdit">
						<h3><?php print $promo["lowerHeader2"]; ?></h3>
						<button class="btn btn-primary">Edit</button>
						<button class="btn btn-danger">Delete</button>
					</div>
					<div class="adminEdit">
						<h3><?php print $promo["lowerBodyText2"]; ?></h3>
						<button class="btn btn-primary">Edit</button>
						<button class="btn btn-danger">Delete</button>
					</div>
 -->				
				</div>
		</div>
	</div>
</div>
</body>
</html>