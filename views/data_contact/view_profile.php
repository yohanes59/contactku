<link rel="stylesheet" type="text/css" href="assets/css/style-profile.css">
</head>
<body>

	<div class="container">
		<header class="hero">
			<a href="?page=">
				<i  class="fas fa-chevron-circle-left back-btn"></i>
			</a>
			<div class="hero-info">
				<h1 class="name">Contact Profile</h1>
			</div>
		</header>

		<section class="contact-info">
				<div class="info-line">
					<i class="fas fa-user icon-gradient"></i>
					<p class="fullname"><?= $contact['name']; ?></p>
				</div>
				<div class="info-line">
					<i class="fas fa-phone icon-gradient"></i>
					<p class="phone-number"><?= $contact['phone']; ?></p>
				</div>
				<div class="info-line">
					<i id="location" class="fas fa-map-marker-alt icon-gradient"></i>
					<p class="address"><?= $contact['address']; ?></p>
			</div>
		</section>

		<section class="edit-contact">
			<a href="?page=profile&act=update&id=<?= $contact['id']; ?>">
				<button type="submit" name="update_contact" class="fas fa-cog icon-gradient" style="border-style: none; cursor: pointer;"></button>
			</a>
		</section>
	</div>
