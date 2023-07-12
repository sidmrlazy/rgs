<?php include('includes/header-admin.php') ?>
<?php include('navbar/navbar-admin.php') ?>
<div class="container mt-5">
    <div class="admin-dashboard">
        <h5 class="form-header">Student Corner</h5>
        <p class="form-header-details">Upload content for student corner</p>

        <?php
        include('includes/db.php');
        if (isset($_POST['submit'])) {
            $student_corner_file = $_FILES["student_corner_file"]["name"];
            $tempname_student_corner_file = $_FILES["student_corner_file"]["tmp_name"];
            $folder = "assets/student_corner/" . $student_corner_file;
            $student_corner_title = mysqli_real_escape_string($connection, $_POST['student_corner_title']);
            $student_corner_details = mysqli_real_escape_string($connection, $_POST['student_corner_details']);

            if (empty($student_corner_title)) { ?>
        <div class="alert alert-danger mt-3 mb-3 w-100" role="alert">
            Title cannot be empty
        </div>

        <?php
            } else if (empty($student_corner_file)) { ?>
        <div class="alert alert-danger mt-3 mb-3 w-100" role="alert">
            You have not uploaded any file.
        </div>
        <?php } else {

                $query = "INSERT INTO `student_corner`(
                `student_corner_title`,
                `student_corner_details`,
                `student_corner_file`
            )
            VALUES(
                '$student_corner_title',
                '$student_corner_details',
                '$student_corner_file'
            )";
                $res = mysqli_query($connection, $query);
                if ($res) {
                    move_uploaded_file($tempname_student_corner_file, $folder)
                ?>
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
                <input type="text" name="student_corner_title" class="form-control" id="eventName"
                    placeholder="Event Name">
                <label for="eventName">Title</label>
            </div>
            <div class="form-floating mb-3">
                <input type="file" name="student_corner_file" class="form-control" id="eventName"
                    placeholder="Event Name">
                <label for="eventName">Upload Data</label>
            </div>
            <div class="form-floating mb-3">
                <textarea class="form-control" name="student_corner_details" placeholder="Event Details"
                    id="eventDetails" style="height: 100px"></textarea>
                <label for="eventDetails">Details</label>
            </div>
            <div>
                <button type="submit" name="submit" class="btn btn-primary w-100">Upload</button>
            </div>
        </form>
    </div>
</div>
<?php include('includes/footer.php') ?>