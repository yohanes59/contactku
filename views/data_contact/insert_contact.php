<link rel="stylesheet" type="text/css" href="assets/css/style-new.css">
</head>
<body>

	<div class="container">
		<header class="hero">
			<a href="?page=">
				<i class="fas fa-chevron-circle-left back-btn"></i>
			</a>
			<div class="hero-info">
				<h1 class="name">New Contact</h1>
			</div>
		</header>

		<form method="POST" enctype="multipart/form-data">
			<section class="contact-info">
				<div class="info-line">
					<i class="fas fa-user icon-gradient"></i>
					<input type="text" name="fullname" class="type" placeholder="Full Name" required>
				</div>
				<div class="info-line">
					<i class="fas fa-handshake icon-gradient"></i>
					<input type="text" name="relation" class="type" placeholder="Relasi" required>
				</div>
				<div class="info-line">
					<i class="fas fa-phone icon-gradient"></i>
					<input type="text" name="phone" class="type" placeholder="Phone Number" value="+62" required>
				</div>
				<div class="info-line">
					<i class="fas fa-map-marker-alt icon-gradient location"></i>
					<input type="text" name="address" class="type" placeholder="Address" required>
				</div>
			</section>
			<section class="button-container">
				<div class="update-contact">
					<i  class="fas fa-check-circle icon-gradient"></i>
					<button type="submit" class="btn" name="tambah">Save Contact</button>
				</div>
			</section>
		</form>

		<?php
		if(@$_POST['tambah']) {
			$main = new contactController();
			$main->insert();
		}
		?>
	</div>