<?php
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
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>CM's List</title>
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
		<h1>All the Listings</h1>
		<?php
		$remaining = count($listings);
		$numRows = ceil(count($listings)/3);
		echo '<ul class="list-group list-group-flush"';
		echo '<div class="container">';
		$one = 0;
		$two = 1;
		$three = 2;
		for($i=0;$i<$numRows;$i++){
			echo '<div class="row">';
			if ($remaining >= 3) {
				echo '<div class="col-4 border border-dark bg-secondary text-white">
					  <img src="'.$listings[$one]['picture'].'" class="mr-3" alt="..." style="max-width:96px;max-height:96px">
					  <div class="media-body">
						<h5 class="mt-0">'.$listings[$one]['name'].'</h5>
						<p>Price: '.$listings[$one]['price'].'</p>
						<p><a href="detail.php?id='.$one.'">Click to see details</a></p>
					  </div>
					</div>';
				echo '<div class="col-4 border border-dark bg-secondary text-white">
					  <img src="'.$listings[$two]['picture'].'" class="mr-3" alt="..." style="max-width:96px;max-height:96px">
					  <div class="media-body">
						<h5 class="mt-0">'.$listings[$two]['name'].'</h5>
						<p>Price: '.$listings[$two]['price'].'</p>
						<p><a href="detail.php?id='.$two.'">Click to see details</a></p>
					  </div>
					</div>';
				echo '<div class="col-4 border border-dark bg-secondary text-white">
					  <img src="'.$listings[$three]['picture'].'" class="mr-3" alt="..." style="max-width:96px;max-height:96px">
					  <div class="media-body">
						<h5 class="mt-0">'.$listings[$three]['name'].'</h5>
						<p>Price: '.$listings[$three]['price'].'</p>
						<p><a href="detail.php?id='.$three.'">Click to see details</a></p>
					  </div>
					</div>';
				$one = $one + 3;
				$two = $one + 1;
				$three = $one + 2;
				$remaining = $remaining - 3;
			} else if($remaining == 2) {
					echo '<div class="col-4 border border-dark bg-secondary text-white">
					  <img src="'.$listings[$one]['picture'].'" class="mr-3" alt="..." style="max-width:96px;max-height:96px">
					  <div class="media-body">
						<h5 class="mt-0">'.$listings[$one]['name'].'</h5>
						<p>Price: '.$listings[$one]['price'].'</p>
						<p><a href="detail.php?id='.$one.'">Click to see details</a></p>
					  </div>
					</div>';
					echo '<div class="col-4 border border-dark bg-secondary text-white">
					  <img src="'.$listings[$two]['picture'].'" class="mr-3" alt="..." style="max-width:96px;max-height:96px">
					  <div class="media-body">
						<h5 class="mt-0">'.$listings[$two]['name'].'</h5>
						<p>Price: '.$listings[$two]['price'].'</p>
						<p><a href="detail.php?id='.$two.'">Click to see details</a></p>
					  </div>
					</div>';
					$remaining = $remaining - 2;
			}
			else if ($remaining == 1) {
					echo '<div class="col-4 border border-dark bg-secondary text-white">
					  <img src="'.$listings[$one]['picture'].'" class="mr-3" alt="..." style="max-width:96px;max-height:96px">
					  <div class="media-body">
						<h5 class="mt-0">'.$listings[$one]['name'].'</h5>
						<p>Price: '.$listings[$one]['price'].'</p>
						<p><a href="detail.php?id='.$one.'">Click to see details</a></p>
					  </div>
					</div>';
					$remaining = $remaining - 1;
			}
			echo '</div>';
		}
		echo '</div>';
		echo '</ul>';

		?>
	</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>