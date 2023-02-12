<?php 
require 'session.php';
include('koneksi.php');
include('includes/header.php');
?>
<link rel="stylesheet" type="text/css" href="assets/css/style-new.css">
</head>
<body>

	<div class="container">
		<header class="hero">
			<a href="home.php">
				<i class="fas fa-chevron-circle-left back-btn"></i>
			</a>
			<div class="hero-info">
				<h1 class="name">New Contact</h1>
			</div>
		</header>

		<form action="functions.php" method="POST">
			<section class="contact-info">
				<div class="info-line">
					<i class="fas fa-user icon-gradient"></i>
					<input type="text" name="fullname" class="type" placeholder="Full Name">
				</div>
				<div class="info-line">
					<i class="fas fa-handshake icon-gradient"></i>
					<select name="relation" required class="type">
						<option value="CS Liana Kitchen">CS Liana Kitchen</option>
						<option value="Langganan Grab">Langganan Grab</option>
					</select>
				</div>
				<div class="info-line">
					<i class="fas fa-phone icon-gradient"></i>
					<input type="text" name="phone" class="type" placeholder="Phone Number" value="+62">
				</div>
				<div class="info-line">
					<i class="fas fa-map-marker-alt icon-gradient location"></i>
					<input type="text" name="address" class="type" placeholder="Address">
				</div>
			</section>
			<section class="button-container">
				<div class="update-contact">
					<i  class="fas fa-check-circle icon-gradient"></i>
					<button type="submit" class="btn" name="add_contact">Save Contact</button>
				</div>
			</section>
		</form>

	</div>

	<?php include('includes/footer.php'); ?>