<div class="container-fluid">
    <div class="dashboard-heading-section">
        <h2>Website <span>Visitors</span> (Contact Page)</h2>
        <p>Check out the people who have filled the contact page on the website</p>
    </div>
    <div class="table-responsive dashboard-table">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">Full Name</th>
                    <th scope="col">Contact Number</th>
                    <th scope="col">Email</th>
                    <th scope="col">Reason</th>
                    <th scope="col">Details</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                require('includes/db.php');

                if (isset($_POST['delete'])) {
                    $contact_id = $_POST['contact_id'];

                    $del = "DELETE FROM `contact_form` WHERE `contact_id` = '$contact_id'";
                    $del_r = mysqli_query($connection, $del);
                    if ($del_r) { ?>
                        <div class="alert alert-success mt-3 mb-3 w-100" role="alert">Deleted!</div>
                    <?php
                    }
                }

                $results_per_page = 5; // Update the number of results per page as needed
                $fetch = "SELECT * FROM `contact_form`";
                $fetch_result = mysqli_query($connection, $fetch);
                $number_of_result = mysqli_num_rows($fetch_result);
                $number_of_page = ceil($number_of_result / $results_per_page);

                if (!isset($_GET['page']) || $_GET['page'] < 1 || $_GET['page'] > $number_of_page) {
                    $page = 1;
                } else {
                    $page = $_GET['page'];
                }

                $page_first_result = ($page - 1) * $results_per_page;

                $query = "SELECT * FROM contact_form ORDER BY `contact_date` DESC LIMIT " . $page_first_result . ',' . $results_per_page;
                $result = mysqli_query($connection, $query);

                while ($row = mysqli_fetch_assoc($result)) {
                    $contact_id = $row['contact_id'];
                    $contact_name = $row['contact_name'];
                    $contact_number = $row['contact_number'];
                    $contact_email = $row['contact_email'];
                    $contact_reason = $row['contact_reason'];
                    $contact_details = $row['contact_details'];
                    ?>
                    <tr>
                        <td scope="row"><?php echo $contact_name ?></td>
                        <td><?php echo $contact_number ?></td>
                        <td><?php echo $contact_email ?></td>
                        <td><?php
                            if ($contact_reason == '1') {
                                echo 'Career';
                            } else if ($contact_reason == '2') {
                                echo 'Courses';
                            } else if ($contact_reason == '3') {
                                echo 'Admission Process';
                            } else if ($contact_reason == '4') {
                                echo 'Fee Structure';
                            } else if ($contact_reason == '5') {
                                echo 'Other';
                            }
                            ?></td>
                        <td><?php echo $contact_details ?></td>
                        <td>
                            <form action="" method="POST">
                                <input type="text" name="contact_id" value="<?php echo $contact_id ?>" hidden>
                                <button type="submit" name="delete" class="btn btn-sm btn-outline-danger">DELETE</button>
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
                    echo '<li class="page-item"><a class="page-link" href="dashboard-controller.php?page=' . $page . '">' . $page . ' </a></li>';
                }
                ?>
            </ul>
        </nav>
    </div>



    <div class="dashboard-heading-section">
        <h2>Registration <span>Forms</span></h2>
        <p>Check out the people who have filled the registration form on the website</p>
    </div>
    <div class="table-responsive dashboard-table">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">Full Name</th>
                    <th scope="col">Contact Number</th>
                    <th scope="col">Email</th>
                    <th scope="col">Course Applied For</th>
                    <th scope="col">% scored in 10th</th>
                    <th scope="col">% scored in 12th</th>
                    <th scope="col">Date of filling form</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                require('includes/db.php');
                if (isset($_POST['del'])) {
                    $registration_id = $_POST['registration_id'];

                    $del = "DELETE FROM `registration_form` WHERE `registration_id` = '$registration_id'";
                    $del_r = mysqli_query($connection, $del);
                    if ($del_r) { ?>
                        <div class="alert alert-success mt-3 mb-3 w-100" role="alert">Deleted!</div>
                    <?php
                    }
                }
                $results_per_page = 5;
                $fetch = "SELECT * FROM `registration_form`";
                $fetch_result = mysqli_query($connection, $fetch);
                $number_of_result = mysqli_num_rows($fetch_result);

                $number_of_page = ceil($number_of_result / $results_per_page);

                if (!isset($_GET['page'])) {
                    $page = 1;
                } else {
                    $page = $_GET['page'];
                }

                $page_first_result = ($page - 1) * $results_per_page;

                $query = "SELECT *FROM registration_form ORDER BY `registration_date` DESC LIMIT " . $page_first_result . ',' . $results_per_page;
                $result = mysqli_query($connection, $query);

                while ($row = mysqli_fetch_assoc($result)) {
                    $registration_id = $row['registration_id'];
                    $registration_name = $row['registration_name'];
                    $registration_contact = $row['registration_contact'];
                    $registration_email = $row['registration_email'];
                    $registration_course = $row['registration_course'];
                    $registration_10th_percentage = $row['registration_10th_percentage'];
                    $registration_12th_percentage = $row['registration_12th_percentage'];
                    $registration_date = $row['registration_date'];

                    ?>
                    <tr>
                        <td scope="row"><?php echo $registration_name ?></td>
                        <td><?php echo $registration_contact ?></td>
                        <td><?php echo $registration_email ?></td>
                        <td><?php
                            if ($registration_course == '1') {
                                echo 'B.Pharm';
                            } else if ($registration_course == '2') {
                                echo 'D.Pharm';
                            }
                            ?></td>
                        <td><?php echo $registration_10th_percentage ?></td>
                        <td><?php echo $registration_12th_percentage ?></td>
                        <td><?php echo date('d-m-Y', strtotime($registration_date)) ?></td>
                        <td>
                            <form action="" method="post">
                                <input type="text" name="registration_id" value="<?php echo $registration_id ?>" hidden>
                                <button class="btn btn-sm btn-outline-danger" type="submit" name="del">DELETE</button>
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
                    echo '<li class="page-item"><a class="page-link" href="dashboard-controller.php?page=' . $page . '">' . $page . ' </a></li>';
                }
                ?>
            </ul>
        </nav>
    </div>
</div>