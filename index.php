<!DOCTYPE html>

<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,
		initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<title>Page Page</title>

	</head>
	<body>  
	
	<div class="container" >

	<h2 class="my-4 text-center">Intro to react course [$50]</h2>

		<form action="charge.php" method="post" id="payment-form">
	
		<div class="form-row">

			<input type="text" name="first_name" class="form-control mb-3 StripeElement
			StripeElement--empty" placeholder="First Name">

			<input type="text" name="last_name" class="form-control mb-3 StripeElement
			StripeElement--empty" placeholder="Lastname">

			<input type="text" name="email" class="form-control mb-3 StripeElement
			StripeElement--empty" placeholder="Email">

			<div id="card-element" class="form-control">
			
			</div>
	
			<!-- Used to display Element errors. -->
			<div id="card-errors" role="alert">
			</div>
		</div>
	
		<button>Submit Payment</button>
		</form>
	</div>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://js.stripe.com/v3/"></script>
		<script src="./js/charge.js"></script>

	</body>

</html>