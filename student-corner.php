<?php
$title = "Student Corner | RGS College of Pharmacy";
include('includes/header.php') ?>
<?php include('includes/navbar.php') ?>
<div class="container mt-5 student-corner-container">
    <div class="table-responsive table-container">
        <table class="table table-bordered">
            <thead>
                <tr class="table-active">
                    <th scope="col">TITLE</th>
                    <th scope="col">DETAILS</th>
                    <th scope="col">DATE</th>
                    <th scope="col">ACTION</th>
                </tr>
            </thead>
            <tbody>
                <?php
                require('includes/db.php');
                $fetch_data = "SELECT * FROM `student_corner`";
                $fetch_data_r = mysqli_query($connection, $fetch_data);

                while ($row = mysqli_fetch_assoc($fetch_data_r)) {
                    $student_corner_file = $row['student_corner_file'];
                    $student_corner_title = $row['student_corner_title'];
                    $student_corner_details = $row['student_corner_details'];
                    $student_corner_added_date = $row['student_corner_added_date'];
                ?>
                <tr>
                    <th scope="row"><?php echo $student_corner_title ?></th>
                    <?php
                        if (empty($student_corner_details)) { ?>
                    <td>NA</td>
                    <?php } else { ?>
                    <td><?php echo $student_corner_details ?></td>
                    <?php } ?>
                    <td><?php echo $student_corner_added_date ?></td>
                    <td><a class="btn btn-sm btn-primary"
                            href="controller/assets/student_corner/<?php echo $student_corner_file ?>">Download</a></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>
<?php include('includes/Footer.php') ?>