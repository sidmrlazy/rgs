<div class="container mt-5 admin-dashboard">

    <h5 class="form-header">Add Event</h5>
    <p class="form-header-details">Events added from this section will be visible on the main websites 'Events' Section
    </p>

    <?php
    include('../includes/db.php');
    if (isset($_POST['submit'])) {
        $event_name = mysqli_real_escape_string($connection, $_POST['event_name']);
        $event_det = $_POST['event_det'];
        $event_date = $_POST['event_date'];

        // if ($_SESSION['user_type'] == 1) {
        //     echo $user_id;
        // }
    }
    ?>

    <form action="" method="POST" class="col-md-6 mt-3 event-form-container">
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