<?php
if(!isset($_GET['id'])){
	die('No id: Please provide a valid id number!  Go back to the <a href="index.php">Home page</a>');
}

$listings=[
	[
		'name'=>'Toyota Camry 2017',
		'address'=>'8400 I-10 Service Road, New Orleans, LA 70127, United States of America',
		'picture'=>'img/camry.jpg',
		'price'=>12999,
		'description'=>'Like new Toyota Camry 2017.  One owner, price negotiable.  Please contact Alex at 859-111-1111 for more information.'
	],
	[
		'name'=>'Honda Civic 2007',
		'address'=>'address 2',
		'picture'=>'img/civic.jpg',
		'price'=>4999,
		'description'=>'Like new Honda Civic 2007.  One owner, price negotiable.  Please contact Rick at 859-111-1111 for more information.'
	],
	[
		'name'=>'Ford Mustang 2019',
		'address'=>'address 3',
		'picture'=>'img/mustang.jpg',
		'price'=>29999,
		'description'=>'Brand new Ford Mustang 2019.  Please contact a representative at Ford motors Florence 859-111-1111 for more information.'
	],
		[
		'name'=>'Item 4',
		'address'=>'address 3',
		'picture'=>'img/mustang.jpg',
		'price'=>29999,
		'description'=>'Brand new Ford Mustang 2019.  Please contact a representative at Ford motors Florence 859-111-1111 for more information.'
	],
		[
		'name'=>'Item 5',
		'address'=>'address 3',
		'picture'=>'img/mustang.jpg',
		'price'=>29999,
		'description'=>'Brand new Ford Mustang 2019.  Please contact a representative at Ford motors Florence 859-111-1111 for more information.'
	],
		[
		'name'=>'Item 6',
		'address'=>'address 3',
		'picture'=>'img/mustang.jpg',
		'price'=>29999,
		'description'=>'Brand new Ford Mustang 2019.  Please contact a representative at Ford motors Florence 859-111-1111 for more information.'
	],
		[
		'name'=>'Item 7',
		'address'=>'address 3',
		'picture'=>'img/mustang.jpg',
		'price'=>29999,
		'description'=>'Brand new Ford Mustang 2019.  Please contact a representative at Ford motors Florence 859-111-1111 for more information.'
	]
];

if(!is_numeric($_GET['id']) || $_GET['id']<0 || $_GET['id']>=count($listings)){
	die('Invalid: go back to the <a href="index.php">Home page</a>');
	
}


?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title><?= $listings[$_GET['id']]['name'] ?></title>
  </head>
  <body>
  <!-- Image and text -->
<nav class="navbar navbar-light bg-danger text-white">
  <a class="navbar-brand text-white" href="#">
    <img src="img/cmLogo.png" width="30" height="30" class="d-inline-block align-top" alt="">
    CM's List
  </a>
  <a href="index.php">Home page</a>
</nav>
	<div class="container">
		<h1><?= $listings[$_GET['id']]['name'] ?></h1>
		<img src="<?= $listings[$_GET['id']]['picture'] ?>" style="max-width:500px" />
		<p><span class="badge badge-dark">Address:</span> <?= $listings[$_GET['id']]['address'] ?></p>
		<p><span class="badge badge-dark">Price:</span> <?= $listings[$_GET['id']]['price'] ?></p>
		<p><span class="badge badge-dark">Description:</span> <span><?= $listings[$_GET['id']]['description'] ?></span></p>
	</div>
	<div class="container">
	</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>

