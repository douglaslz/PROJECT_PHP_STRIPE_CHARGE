<?php

//Elimina etiquetas, opcionalmente elimina o codifica caracteres especiales.
if(!empty($_GET['tid'] && !empty($_GET['product']))){
	$GET = filter_var_array($_GET, FILTER_SANITIZE_STRING);
	$tid = $GET['tid'];
	$product = $GET['product'];
}else{
	header('Location: index.php');
}
?>

<!DOCTYPE html>

<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,
		initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<title>Thank you</title>

	</head>
	<body>  
		
		<div class="container mt-4">
			<h2>Thank you for your purchasing <?php echo $product; ?></h2>
			<hr>
			<p>Your transaction Id is <?php echo $tid; ?></p>
			<p>Check you email for more information</p>
			<p><a href="index.php" class="btn btn-light mt-2">Go Back</a></p>

		

		</div>
	
	</body>

</html>