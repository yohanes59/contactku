<?php 
include('koneksi.php');
include('includes/header.php');

?>
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
			<a href="new.php"><i class="fas fa-plus-circle add"></i></a>
		</header>


		<!--  CONTACT LIST -->
		<section class="contacts-library">
			<ul class="contacts-list" id="container">

				<?php
				$query = "SELECT * FROM contact ORDER BY name ASC";
				$query_run = mysqli_query($con, $query);

				if (mysqli_num_rows($query_run) > 0) 
				{
					foreach ($query_run as $row) 
					{
						?>
						<a href="contact-profile.php?id=<?= $row['id']; ?>">
							<div class="contact-section">
								<li class="list__item">
									<p class="contact-name"><?= $row['name']; ?></p>
									<p class="relationship"><?= $row['relation']; ?></p>
								</li>

								<li class="list__item">
									<a href="#">
										<i class="fa fa-whatsapp"></i>
									</a>
								</li>
							</div>
							<hr>
						</a>
						<?php 
					}
				}
				?>


			</ul>
		</section>
	</div>

	<?php include('includes/footer.php'); ?>