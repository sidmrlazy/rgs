<?php
$title = "Events | RGS College of Pharmacy";
include('includes/header.php');
include('includes/navbar.php'); ?>
<div class="container events-section">
    <div class="events-section-7-grid">
        <?php
        require('includes/db.php');
        $fetch_album = "SELECT * FROM `event` ORDER BY `event_date` DESC";
        $fetch_album_r = mysqli_query($connection, $fetch_album);
        while ($row = mysqli_fetch_assoc($fetch_album_r)) {
            $event_id = $row['event_id'];
            $event_album_img = "controller/assets/album_thumb/" . $row['event_album_img'];
            $event_name = $row['event_name'];
            $event_det = $row['event_det'];
            $event_date = $row['event_date'];

        ?>
            <!-- New -->
            <form action="ind-album.php" method="POST" class="events-section-7-card">
                <input type="text" name="event_id" value="<?php echo $event_id ?>" hidden>
                <button type="submit" name="open" class="events-section-7-btn">
                    <img src="<?php echo $event_album_img ?>" alt="">
                    <h3><?php echo $event_name ?></h3>
                    <p class="event-ellipses"><?php echo $event_det ?></p>
                    <p><strong><?php echo $event_date ?></strong></p>
                </button>
            </form>
        <?php } ?>
    </div>
</div>
<?php include('includes/Footer.php') ?>