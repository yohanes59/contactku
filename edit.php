<?php
require 'session.php';
include('koneksi.php');
include('includes/header.php');
?>
<link rel="stylesheet" type="text/css" href="assets/css/style-edit.css">
</head>
<body>

	<div class="container">
		<?php
		if (isset($_GET['id'])) 
		{
			$contact_id = $_GET['id'];
			$contacts = "SELECT * FROM contact WHERE id='$contact_id'";
			$contact_run = mysqli_query($con, $contacts);

			if (mysqli_num_rows($contact_run) > 0) 
			{
				foreach ($contact_run as $contact)
				{
					?>
					<header class="hero">
						<a href="contact-profile.php?id=<?= $contact['id']; ?>">
							<i class="fas fa-chevron-circle-left back-btn"></i>
						</a>
						<div class="hero-info">
							<h1 class="name">Edit Profile</h1>
						</div>
					</header>

					<form action="functions.php" method="POST">
						<section class="contact-info">
							<input type="hidden" name="contact_id" value="<?= $contact['id']; ?>">
							<div class="info-line">
								<i class="fas fa-user icon-gradient"></i>
								<input type="text" class="type" name="fullname" value="<?= $contact['name']; ?>">
							</div>
							<div class="info-line">
								<i class="fas fa-handshake icon-gradient"></i>
								<select name="relation" required class="type">
									<option value="CS Liana Kitchen" <?= $contact['relation'] == 'CS Liana Kitchen' ? 'selected' : '' ?>>CS Liana Kitchen</option>
									<option value="Langganan Grab" <?= $contact['relation'] == 'Langganan Grab' ? 'selected' : '' ?>>Langganan Grab</option>
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
								<i  class="fas fa-check-circle icon-gradient"></i>
								<button type="submit" class="btn" name="update_contact">Save Contact</button>
							</div>
						</section>
					</form>

					<section class="button-container">
						<a href="delete.php?id=<?= $contact['id']; ?>">
							<div class="update-contact">
								<i class="fas fa-trash icon-gradient"></i>
								<button class="btn">Delete Contact</button>
							</div>
						</a>
					</section>
					<?php 
				}
			}
		}
		?>

	</div>

	<?php include('includes/footer.php'); ?>