<?php
require 'session.php';
include('koneksi.php');
include('includes/header.php');
?>
<link rel="stylesheet" type="text/css" href="assets/css/style-delete.css">
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
						<a href="edit.php?id=<?= $contact['id']; ?>">
							<i class="fas fa-chevron-circle-left back-btn"></i>
						</a>
						<div class="hero-info">
							<h1 class="name"><?= $contact['name']; ?></h1>
						</div>
					</header>

					<section class="delete-container">
						<p>Are you sure you want to delete this contact?</p>
						<div class="delete-contact">
							<i class="fas fa-trash delete-icon"></i>
							<form action="functions.php" method="POST">
								<button type="submit" name="delete_contact" value="<?= $contact['id']; ?>" class="delete-button">Delete Contact</button>
							</form>
						</div>
					</section>
					<?php
				}
			}
		}
		?>
	</div>
	<?php include('includes/footer.php'); ?>