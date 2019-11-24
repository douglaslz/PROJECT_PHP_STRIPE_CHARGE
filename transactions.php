<?php
require_once('config/db.php');
require_once('lib/pdo_db.php');
require_once('models/Transaction.php');

//Instatiate Transactions
$transactions = new Transaction();

//Get Transactions
$transactions = $transactions->getTransactions();



?>

<!DOCTYPE html>

<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,
		initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<title>View Customers</title>

	</head>
	<body>  
		
		<div class="container mt-4">
			<div class="btn-group" role="group">
			<a href="customers.php" class="btn btn-primary">Customers</a>
			<a href="transactions.php" class="btn btn-secondary">Transactions</a>
			</div>
			<h2>Transactions</h2>
			<table class="table table-stripe">
				<tread>
					<tr>
						<th>Transaction Id</th>
						<th>Customer</th>
						<th>Product</th>
						<th>Amount</th>
						<th>Date</th>
					</tr>
				</tread>
				<tbody>
					<?php foreach($transactions as $c): ?>		
					<tr>
						<td><?php echo $c->id; ?></td>
						<td><?php echo $c->customer_id; ?></td>
						<td><?php echo $c->product; ?></td>
						<td> <?php echo strtoupper($c->currency); ?> <?php echo sprintf ('%.2f',$c->amount/ 100); ?></td>
						<td><?php echo $c->created_at; ?></td>
					</tr>

					<?php endforeach; ?>			
				</tbody>
			</table>
			<br>
			<p><a href="index.php">Pay Page</a></p>

		</div>
	
	</body>

</html>