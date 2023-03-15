<link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>

	<div class="container">
		<!--  SEARCH FORM -->
		<header class="header">

			<form class="search-bar">
				<input type="search-name" class="contact-search" id="keyword" placeholder="Search Name">
			</form>

			<!--  ADD-CONTACT BUTTON/ICON -->
			<a href="?page=&act=tambah"><i class="fas fa-plus-circle add"></i></a>
			<a href="logout.php"><i class="fas fa-sign-out-alt"></i></a>
		</header>

		<section class="contacts-library">
			<ul class="contacts-list" id="container">

				<?php while($contact = $this->model->fetch($data)): ?>
					<a href="?page=profile&act=&id=<?= $contact['id'] ?>">
						<div class="contact-section">
							<li class="list__item">
								<p class="contact-name"><?= $contact['name']; ?></p>
								<p class="relationship"><?= $contact['relation']; ?></p>
							</li>
							<!-- <a href="https://api.whatsapp.com/send?phone=<?=$contact['phone'];?>&text=Halo,%20Saya%20mau%20mengantarkan%20paket%20makanan%20dari%20ci%20liana.">
								<li class="list__item">
									<i class="fa fa-whatsapp"></i>
								</li>
							</a> -->
						</div>
					</a>
					<hr>
				<?php endwhile; ?>
			</ul>
		</section>
	</div>