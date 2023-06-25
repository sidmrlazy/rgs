<?php include('includes/header-admin.php') ?>
<?php include('navbar/navbar-admin.php') ?>
<div class="container-fluid mt-5">
    <div class="admin-dashboard-row">
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
                    <textarea class="form-control" name="event_det" placeholder="Event Details" id="eventDetails" style="height: 100px"></textarea>
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

        <div class="admin-dashboard">
            <h5 class="form-header">Add Event</h5>
            <p class="form-header-details">View all added albums
            </p>
            <div class="admin-table-container table-responsive mt-3">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">Thumbnail</th>
                            <th scope="col">Event Name</th>
                            <th scope="col">Add Images</th>
                            <th scope="col">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if (isset($_POST['upload'])) {
                            $album_id = $_POST['album_id'];
                            $event_images = $_FILES['event_images'];

                            for ($i = 0; $i < count($event_images['name']); $i++) {
                                $event_album_img = $event_images['name'][$i];
                                $temp_file = $event_images['tmp_name'][$i];
                                $target_directory = 'assets/album_img/';
                                $target_file = $target_directory . basename($event_album_img);

                                if (move_uploaded_file($temp_file, $target_file)) {
                                    $query = "INSERT INTO `event_img`(`event_album_id`, `event_album_img`)
                                              VALUES ('$album_id', '$event_album_img')";
                                    $result = mysqli_query($connection, $query);
                                }
                                if ($result) {
                                    echo '<div class="alert alert-success mt-3 mb-3" role="alert">Images uploaded!</div>';
                                }
                            }
                        }

                        if (isset($_POST['del'])) {
                            $event_id = $_POST['event_id'];
                            $del_q = "DELETE FROM `event` WHERE `event_id` = $event_id";
                            $del_r = mysqli_query($connection, $del_q);
                        }

                        $results_per_page = 5;
                        $fetch = "SELECT * FROM `event`";
                        $fetch_r = mysqli_query($connection, $fetch);
                        $number_of_result = mysqli_num_rows($fetch_r);
                        $number_of_page = ceil($number_of_result / $results_per_page);
                        if (!isset($_GET['page'])) {
                            $page = 1;
                        } else {
                            $page = $_GET['page'];
                        }
                        $page_first_result = ($page - 1) * $results_per_page;

                        $query = "SELECT * FROM `event` LIMIT " . $page_first_result . ',' . $results_per_page;
                        $result = mysqli_query($connection, $query);

                        while ($row = mysqli_fetch_assoc($result)) {
                            $event_id = $row['event_id'];
                            $event_album_img = "assets/album_thumb/" . $row['event_album_img'];
                            $event_name = $row['event_name'];

                        ?>
                            <tr>
                                <th scope="row" class="cell-holder-mid">
                                    <div class="table-thumb">
                                        <img src="<?php echo $event_album_img ?>" alt="">
                                    </div>
                                </th>
                                <td><?php echo $event_name ?></td>
                                <td>
                                    <form action="admin-add-img.php" method="post">
                                        <input type="text" name="event_id" value="<?php echo $event_id ?>" hidden>
                                        <button type="submit" name="add" class="btn btn-sm btn-primary">Add Image</button>
                                    </form>
                                </td>
                                <td>
                                    <form action="" method="post">
                                        <input type="text" name="event_id" value="<?php echo $event_id ?>" hidden>
                                        <button type="submit" name="del" class="btn btn-sm btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
                <nav aria-label="Page navigation example">
                    <ul class="pagination">

                        <?php
                        for ($page = 1; $page <= $number_of_page; $page++) {
                            echo '<li class="page-item"><a class="page-link" href="admin-add-event.php?page=' . $page . '">' . $page . ' </a></li>';
                        }
                        ?>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>
<?php include('includes/footer.php') ?>