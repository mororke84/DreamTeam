<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="">
		<meta name="author" content="">
		<link rel="icon" href="assets/img/favicon.png">

		<title>DreamTeam | Equine Sim | v1.0</title>

		<!-- Bootstrap core CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">

		<!-- Custom styles for this template -->
		<link href="https://fonts.googleapis.com/css?family=Muli:300,400,400i,700,800,900" rel="stylesheet">
		<script src="https://use.fontawesome.com/c1296ceea2.js"></script>
		<link href="assets/sass/custom.min.css" rel="stylesheet">
		<link href="assets/css/custom.css" rel="stylesheet">
	</head>

	<body>
		<header>
			<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-default">
				<a class="navbar-brand" href="#">
					<img src="assets/brand/dreamteam-solid.svg" width="30" height="30" class="d-inline-block align-top" alt="">
					DreamTeam
				</a>
				<button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarsExampleDefault">
					<ul class="navbar-nav mr-auto">
						<li class="nav-item active">
							<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Settings</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Profile</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Help</a>
						</li>
					</ul>
				</div>
			</nav>
		</header>

		<div class="container-fluid">
			<div class="row">
				<nav class="col-sm-3 col-md-2 d-none d-sm-block bg-light sidebar">
					<form class="search d-flex align-items-center">
						<input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
					</form>
					<div class="divider"></div>
					<ul class="nav nav-pills flex-column">
						<li class="nav-item">
							<a class="nav-link" href="#">Dashboard</a>
						</li>
						<li class="nav-item">
							<a class="nav-link collapsed" data-toggle="collapse" href="#myHorses" aria-expanded="">
								<p>
									My Horses
									<i class="fa fa-caret-up caret" aria-hidden="true"></i>
								</p>
							</a>
							<div class="collapse in" id="myHorses" aria-expanded="true" style="">
								<ul class="nav inner-nav flex-column">
									<li class="nav-item active">
										<a class="nav-link" href="#">View All</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="#">Register a Horse</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="#">Transfer a Horse</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="#">Retired Horses</a>
									</li>
								</ul>
							</div>
						</li>
						<li class="nav-item">
							<a class="nav-link collapsed" data-toggle="collapse" href="#myStables" aria-expanded="">
								<p>
									My Stables
									<i class="fa fa-caret-up caret" aria-hidden="true"></i>
								</p>
							</a>
							<div class="collapse in" id="myStables" aria-expanded="true" style="">
								<ul class="nav inner-nav flex-column">
									<li class="nav-item active">
										<a class="nav-link" href="#">View All</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="#">Add a Stable</a>
									</li>
								</ul>
							</div>
						</li>
						<li class="nav-item">
							<a class="nav-link collapsed" data-toggle="collapse" href="#bs" aria-expanded="">
								<p>
									Breeder's Trust
									<i class="fa fa-caret-up caret" aria-hidden="true"></i>
								</p>
							</a>
							<div class="collapse in" id="bs" aria-expanded="true" style="">
								<ul class="nav inner-nav flex-column">
									<li class="nav-item active">
										<a class="nav-link" href="#">Information</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="#">Approved Horses</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="#">Nominate a Horse</a>
									</li>
								</ul>
							</div>
						</li>
						<li class="nav-item">
							<a class="nav-link collapsed" data-toggle="collapse" href="#isr" aria-expanded="">
								<p>
									ISR
									<i class="fa fa-caret-up caret" aria-hidden="true"></i>
								</p>
							</a>
							<div class="collapse in" id="isr" aria-expanded="true" style="">
								<ul class="nav inner-nav flex-column">
									<li class="nav-item active">
										<a class="nav-link" href="#">Information</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="#">Mare Book</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="#">Stallion Book</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="#">Premium Foal Book</a>
									</li>
									<div class="divider"></div>
									<li class="nav-item">
										<a class="nav-link" href="#">Mare Inspections</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="#">Premium Mare Awards</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="#">Star Mare Awards</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="#">High Scoring Mares</a>
									</li>
									<div class="divider"></div>
									<li class="nav-item">
										<a class="nav-link" href="#">Foal Inspections</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="#">High Scoring Foals</a>
									</li>
									<div class="divider"></div>
									<li class="nav-item">
										<a class="nav-link" href="#">Stallion Inspections</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="#">100-Day Test</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="#">Star Stallion Awards</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="#">High Scoring Stallions</a>
									</li>
								</ul>
							</div>
						</li>
						<li class="nav-item">
							<a class="nav-link collapsed" data-toggle="collapse" href="#assoc" aria-expanded="">
								<p>
									Associations
									<i class="fa fa-caret-up caret" aria-hidden="true"></i>
								</p>
							</a>
							<div class="collapse in" id="assoc" aria-expanded="true" style="">
								<ul class="nav inner-nav flex-column">
									<li class="nav-item active">
										<a class="nav-link" href="#">View All</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="#">SAHC</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="#">SAHA</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="#">SCHA</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="#">SDF</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="#">SERA</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="#">SEF</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="#">SGHA</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="#">SHF</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="#">SJF</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="#">SMHA</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="#">SPHA</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="#">SQHA</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="#">SRHA</a>
									</li>
								</ul>
							</div>
						</li>
					</ul>
				</nav>

				<main role="main" class="col-sm-9 ml-sm-auto col-md-10 pt-3">

					<div class="content-wrapper">
						<div class="padded-content rounded-corners">
							<div class="row">
								<div class="col-sm-12">
									<h1>Dashboard</h1>

									<h2>Section title</h2>
									<div class="table-responsive">
										<table class="table table-striped">
											<thead>
												<tr>
													<th>#</th>
													<th>Header</th>
													<th>Header</th>
													<th>Header</th>
													<th>Header</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>1,001</td>
													<td>Lorem</td>
													<td>ipsum</td>
													<td>dolor</td>
													<td>sit</td>
												</tr>
												<tr>
													<td>1,002</td>
													<td>amet</td>
													<td>consectetur</td>
													<td>adipiscing</td>
													<td>elit</td>
												</tr>
												<tr>
													<td>1,003</td>
													<td>Integer</td>
													<td>nec</td>
													<td>odio</td>
													<td>Praesent</td>
												</tr>
												<tr>
													<td>1,003</td>
													<td>libero</td>
													<td>Sed</td>
													<td>cursus</td>
													<td>ante</td>
												</tr>
												<tr>
													<td>1,004</td>
													<td>dapibus</td>
													<td>diam</td>
													<td>Sed</td>
													<td>nisi</td>
												</tr>
												<tr>
													<td>1,005</td>
													<td>Nulla</td>
													<td>quis</td>
													<td>sem</td>
													<td>at</td>
												</tr>
												<tr>
													<td>1,006</td>
													<td>nibh</td>
													<td>elementum</td>
													<td>imperdiet</td>
													<td>Duis</td>
												</tr>
												<tr>
													<td>1,007</td>
													<td>sagittis</td>
													<td>ipsum</td>
													<td>Praesent</td>
													<td>mauris</td>
												</tr>
												<tr>
													<td>1,008</td>
													<td>Fusce</td>
													<td>nec</td>
													<td>tellus</td>
													<td>sed</td>
												</tr>
												<tr>
													<td>1,009</td>
													<td>augue</td>
													<td>semper</td>
													<td>porta</td>
													<td>Mauris</td>
												</tr>
												<tr>
													<td>1,010</td>
													<td>massa</td>
													<td>Vestibulum</td>
													<td>lacinia</td>
													<td>arcu</td>
												</tr>
												<tr>
													<td>1,011</td>
													<td>eget</td>
													<td>nulla</td>
													<td>Class</td>
													<td>aptent</td>
												</tr>
												<tr>
													<td>1,012</td>
													<td>taciti</td>
													<td>sociosqu</td>
													<td>ad</td>
													<td>litora</td>
												</tr>
												<tr>
													<td>1,013</td>
													<td>torquent</td>
													<td>per</td>
													<td>conubia</td>
													<td>nostra</td>
												</tr>
												<tr>
													<td>1,014</td>
													<td>per</td>
													<td>inceptos</td>
													<td>himenaeos</td>
													<td>Curabitur</td>
												</tr>
												<tr>
													<td>1,015</td>
													<td>sodales</td>
													<td>ligula</td>
													<td>in</td>
													<td>libero</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>

				</main>


				<!-- footer -->
				<div class="col-sm-9 ml-sm-auto col-md-10 footer">
					<div class="container-fluid">
						<div class="row-fluid">
							<div class="col-sm-12 text-center">
								<p>Copyright © 2017 DreamTeam. All rights reserved. Privacy policy.</p>
								<p>Made with <i class="fa fa-heart" aria-hidden="true"></i> by Tashya, Melanie, & Maya.</p>
							</div>
						</div>
					</div>
				</div>
				<!-- end footer -->

			</div>
		</div>

		<!-- Bootstrap core JavaScript
		================================================== -->
		<!-- Placed at the end of the document so the pages load faster -->
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
	</body>
</html>
