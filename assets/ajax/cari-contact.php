<?php
require '../../koneksi.php';
$keyword = $_GET['keyword'];
$query = "SELECT * FROM contact WHERE name LIKE '%$keyword%'";
$contact = mysqli_query($con, $query);
?>

<?php
foreach ($contact as $row) {
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
?>