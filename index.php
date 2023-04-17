<?php
include_once("header.php");

$getDaySpentQuery = "select SUM(amount) as amount From spent where date = curdate();";
$currYear = date("Y");
$currMonth = date("m");
$startOfMonth = $currYear . "-" . $currMonth . "-01"; 
$getWeekSpentQuery = "select SUM(amount) as amount From spent where date BETWEEN curdate() - 7 AND curdate();";
$getMonthSpentQuery = "select SUM(amount) as amount From spent where date BETWEEN curdate() - INTERVAL 30 DAY AND curdate();";

$todaySpent = mysqli_fetch_row(mysqli_query($conn, $getDaySpentQuery))[0];
$todaySpent == '' ? $todaySpent = 0 : $todaySpent;
$weekSpent = mysqli_fetch_row(mysqli_query($conn, $getWeekSpentQuery))[0];
$weekSpent == '' ? $weekSpent = 0 : $weekSpent;
$monthSpent = mysqli_fetch_row(mysqli_query($conn, $getMonthSpentQuery))[0];
$monthSpent == '' ? $monthSpent = 0 : $monthSpent;
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
	<title>Document</title>
</head>
<body>
	<div class="container-fluid">
		<a href="addRecord.html"><button type="button" class="btn btn-success">Добави</button></a>
		<a href="filter.php"><button type="button" class="btn btn-primary">Филтрирай</button></a>
	</div>
	<div class="container">
		<div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
		<div class="col">
			<div class="card mb-4 rounded-3 shadow-sm">
			<div class="card-header py-3">
				<h4 class="my-0 fw-normal">Деня</h4>
			</div>
			<div class="card-body">
				<h1 class="card-title pricing-card-title"><?php echo $todaySpent ?>лв.</h1>
			</div>
			</div>
		</div>
		<div class="col">
			<div class="card mb-4 rounded-3 shadow-sm">
			<div class="card-header py-3">
				<h4 class="my-0 fw-normal">Седмицата</h4>
			</div>
			<div class="card-body">
				<h1 class="card-title pricing-card-title"><?php echo $weekSpent ?>лв.</h1>
			</div>
			</div>
		</div>
		<div class="col">
			<div class="card mb-4 rounded-3 shadow-sm">
			<div class="card-header py-3">
				<h4 class="my-0 fw-normal">Месеца</h4>
			</div>
			<div class="card-body">
				<h1 class="card-title pricing-card-title"><?php echo $monthSpent ?>лв.</h1>
			</div>
			</div>
		</div>
	</div>

</body>
</html>