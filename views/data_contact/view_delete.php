<link rel="stylesheet" type="text/css" href="assets/css/style-delete.css">
</head>
<body>

<div class="container">
	<header class="hero">
		<a href="?page=profile&act=update&id=<?= $contact['id']; ?>">
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
			<form action="?page=profile&act=destroy&id=<?= $contact['id']; ?>" method="POST">
				<button type="submit" name="delete_contact" class="delete-button">Delete Contact</button>
			</form>
		</div>
	</section>
</div>