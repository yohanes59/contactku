<link rel="stylesheet" type="text/css" href="assets/css/style-edit.css">
</head>
<body>

	<div class="container">
		<header class="hero">
			<a href="?page=profile&act=&id=<?= $contact['id']; ?>">
				<i class="fas fa-chevron-circle-left back-btn"></i>
			</a>
			<div class="hero-info">
				<h1 class="name">Edit Profile</h1>
			</div>
		</header>

		<form method="POST" enctype="multipart/form-data">
			<section class="contact-info">
				<!-- <input type="hidden" name="contact_id" value="<?= $contact['id']; ?>"> -->
				<div class="info-line">
					<i class="fas fa-user icon-gradient"></i>
					<input type="text" class="type" name="fullname" value="<?= $contact['name']; ?>">
				</div>
				<div class="info-line">
					<i class="fas fa-handshake icon-gradient"></i>
					<select name="relation" required class="type">
						<?php while ($item = $this->model->fetch($data2)): ?>
							<option value="<?= $item['relation'] ?>" <?= $item['relation'] == $contact['relation'] ? 'selected' : ''?>><?= $item['relation'] ?></option>
						<?php endwhile ?>
					</select>
				</div>
				<div class="info-line">
					<i class="fas fa-phone icon-gradient"></i>
					<input type="text" class="type" name="phone" value="<?= $contact['phone']; ?>">
				</div>
				<div class="info-line">
					<i class="fas fa-map-marker-alt icon-gradient location"></i>
					<input type="text" class="type" name="address" value="<?= $contact['address']; ?>">
				</div>
			</section>

			<section class="button-container">
				<div class="update-contact">
					<i class="fas fa-check-circle icon-gradient"></i>
					<button type="submit" class="btn" name="edit">Save Contact</button>
				</div>
			</section>
		</form>

		<section class="button-container">
			<a href="?page=profile&act=delete&id=<?= $contact['id']; ?>">
				<div class="update-contact">
					<i class="fas fa-trash icon-gradient"></i>
					<button class="btn">Delete Contact</button>
				</div>
			</a>
		</section>
		
		<?php
		if(isset($_POST['edit'])) {
			$main = new contactController();
			$main->edit();
		}
		?>
	</div>