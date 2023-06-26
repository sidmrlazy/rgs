<?php include('includes/header-admin.php') ?>
<?php include('navbar/navbar-admin.php') ?>
<div class="container mt-5">
    <div class="admin-dashboard">
        <h5 class="form-header">Add Event</h5>
        <p class="form-header-details">Events added from this section will be visible on the main websites 'Events'
            Section
        </p>

        <?php
        include('includes/db.php');
        if (isset($_POST['submit'])) {
            $event_album_img = $_FILES["event_album_img"]["name"];
            $tempname_event_album_img = $_FILES["event_album_img"]["tmp_name"];
            $folder = "assets/album_thumb/" . $event_album_img;
            $event_name = mysqli_real_escape_string($connection, $_POST['event_name']);
            $event_det = $_POST['event_det'];
            $event_date = $_POST['event_date'];

            if (move_uploaded_file($tempname_event_album_img, $folder)) {
                $query = "INSERT INTO `event`(
                `event_album_img`,
                `event_name`,
                `event_det`,
                `event_date`
            )
            VALUES(
                '$event_album_img',
                '$event_name',
                '$event_det',
                '$event_date'
            )";
                $res = mysqli_query($connection, $query);
                if ($res) { ?>
        <div class="alert alert-success mt-3 mb-3 w-100" role="alert">
            Event Album Added!
        </div>
        <?php
                }
            }
        }
        ?>

        <form action="" method="POST" class="w-100 mt-3 event-form-container" enctype="multipart/form-data">
            <div class="form-floating mb-3">
                <input type="file" name="event_album_img" class="form-control" id="eventName" placeholder="Event Name">
                <label for="eventName">Album Image</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" name="event_name" class="form-control" id="eventName" placeholder="Event Name">
                <label for="eventName">Event Name</label>
            </div>
            <div class="form-floating mb-3">
                <textarea class="form-control" name="event_det" placeholder="Event Details" id="eventDetails"
                    style="height: 100px"></textarea>
                <label for="eventDetails">Mention event details</label>
            </div>
            <div class="form-floating mb-3">
                <input type="date" class="form-control" name="event_date" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Event Date</label>
            </div>

            <div>
                <button type="submit" name="submit" class="btn btn-primary w-100">Add Event</button>
            </div>
        </form>
    </div>
</div>
<?php include('includes/footer.php') ?>