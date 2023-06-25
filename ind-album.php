<?php
$title = "Albums | RGS College of Pharmacy";
include('includes/header.php');
include('includes/navbar.php'); ?>
<div class="container">
    <div class="album-details">
        <?php
        include('includes/db.php');
        if (isset($_POST['open'])) {
            $event_id = $_POST['event_id'];

            $fetch_album_details = "SELECT* FROM `event` WHERE `event_id` = '$event_id'";
            $fetch_album_details_r = mysqli_query($connection, $fetch_album_details);

            $event_name = "";
            $event_det = "";

            while ($row = mysqli_fetch_assoc($fetch_album_details_r)) {
                $event_name = $row['event_name'];
                $event_det = $row['event_det'];
            }
        ?>
            <h2><?php echo $event_name ?></h2>
            <p><?php echo $event_det ?></p>
    </div>
    <div class="album-grid">
        <?php
            $fetch_images = "SELECT * FROM `event_img` WHERE `event_album_id` = '$event_id'";
            $fetch_images_r = mysqli_query($connection, $fetch_images);
            while ($row = mysqli_fetch_assoc($fetch_images_r)) {
                $event_album_id = $row['event_album_id'];
                $event_album_img = "controller/assets/album_img/" . $row['event_album_img'];

        ?>

            <div class="album-img">
                <img src="<?php echo $event_album_img ?>" alt="">
            </div>
        <?php } ?>
    </div>

<?php } ?>
</div>
<?php include('includes/Footer.php') ?>