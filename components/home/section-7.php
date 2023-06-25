<div class="container home-section-7">
    <h3>EVENTS</h3>
    <div class="home-section-7-grid">
        <?php
        require('includes/db.php');
        $fetch_album = "SELECT * FROM `event` LIMIT 10";
        $fetch_album_r = mysqli_query($connection, $fetch_album);
        while ($row = mysqli_fetch_assoc($fetch_album_r)) {
            $event_id = $row['event_id'];
            $event_album_img = "controller/assets/album_thumb/" . $row['event_album_img'];
            $event_name = $row['event_name'];
            $event_det = $row['event_det'];
            $event_date = $row['event_date'];

        ?>
            <form action="ind-album.php" method="POST" class="home-section-7-card">
                <input type="text" name="event_id" value="<?php echo $event_id ?>" hidden>
                <button type="submit" name="open" class="home-section-7-btn">
                    <img src="<?php echo $event_album_img ?>" alt="">
                    <h3><?php echo $event_name ?></h3>
                    <p><?php echo $event_det ?></p>
                    <p><strong><?php echo $event_date ?></strong></p>
                </button>
            </form>
        <?php } ?>
    </div>
    <div class="view-more-album-btn">
        <a href="events.php">View More Albums</a>
    </div>
</div>