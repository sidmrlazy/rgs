<div class="container-fluid">
    <div class="dashboard-heading-section">
        <h2>Website <span>Visitors</span></h2>
        <p>Check out the people who have filled the contact page on the website</p>
    </div>
    <?php
    require('includes/db.php');
    $fetch = "SELECT * FROM `contact_form`";
    $fetch_result = mysqli_query($connection, $fetch);

    while ($row = mysqli_fetch_assoc($fetch_result)) {
        $contact_name = $row['contact_name'];
        $contact_number = $row['contact_number'];
        $contact_email = $row['contact_email'];
        $contact_reason = $row['contact_reason'];
        $contact_details = $row['contact_details'];

    ?>

    <div class="table-responsive dashboard-table">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">Full Name</th>
                    <th scope="col">Contact Number</th>
                    <th scope="col">Email</th>
                    <th scope="col">Reason</th>
                    <th scope="col">Details</th>
                </tr>
            </thead>
            <tbody>
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
                </tr>
            </tbody>
        </table>
    </div>
    <?php } ?>


    <div class="dashboard-heading-section">
        <h2>Registration <span>Forms</span></h2>
        <p>Check out the people who have filled the registration form on the website</p>
    </div>
    <?php
    require('includes/db.php');
    $fetch = "SELECT * FROM `registration_form`";
    $fetch_result = mysqli_query($connection, $fetch);

    while ($row = mysqli_fetch_assoc($fetch_result)) {
        $registration_name = $row['registration_name'];
        $registration_contact = $row['registration_contact'];
        $registration_email = $row['registration_email'];
        $registration_course = $row['registration_course'];
        $registration_10th_percentage = $row['registration_10th_percentage'];
        $registration_12th_percentage = $row['registration_12th_percentage'];
        $registration_date = $row['registration_date'];

    ?>

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
                </tr>
            </thead>
            <tbody>
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
                </tr>
            </tbody>
        </table>
    </div>
    <?php } ?>

</div>