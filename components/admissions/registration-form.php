<div class="container">
    <div class="registration-form-heading">
        <h1>Registration Form</h1>
        <p>Fill the form below to register yourself in the course of your choice and get a call back from our team.</p>
    </div>

    <?php
    require('includes/db.php');
    if (isset($_POST['register'])) {
        $registration_name = mysqli_real_escape_string($connection, $_POST['registration_name']);
        $registration_contact = mysqli_real_escape_string($connection, $_POST['registration_contact']);
        $registration_email = mysqli_real_escape_string($connection, $_POST['registration_email']);
        $registration_course = mysqli_real_escape_string($connection, $_POST['registration_course']);
        $registration_10th_percentage = mysqli_real_escape_string($connection, $_POST['registration_10th_percentage']);
        $registration_12th_percentage = mysqli_real_escape_string($connection, $_POST['registration_12th_percentage']);

        $search_query = "SELECT * FROM `registration_form` WHERE `registration_contact` = '$registration_contact'";
        $search_result = mysqli_query($connection, $search_query);
        $search_count = mysqli_num_rows($search_result);

        if ($search_count === 0) {
            $query = "INSERT INTO `registration_form`(
            `registration_name`,
            `registration_contact`,
            `registration_email`,
            `registration_course`,
            `registration_10th_percentage`,
            `registration_12th_percentage`
            )
            VALUES(
            '$registration_name',
            '$registration_contact',
            '$registration_email',
            '$registration_course',
            '$registration_10th_percentage',
            '$registration_12th_percentage'
            )";
            $result = mysqli_query($connection, $query);
            if ($result) { ?>
    <div class="alert alert-success mt-3 mb-3" role="alert">
        Thank you! Your form has been submitted. Someone from our team will contact your shortly.
    </div>
    <?php }
        } else if ($search_count > 0) {
            ?>
    <div class="alert alert-warning mt-3 mb-3" role="alert">
        Looks like you have already filled the registration form before. Please wait, we will connect with you shortly!.
    </div>

    <?php }
    } ?>

    <form action="" method="POST" class="registration-form">
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Your Name</label>
            <input name="registration_name" type="text" class="form-control" id="exampleFormControlInput1"
                placeholder="Your Full Name" required>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Contact Number</label>
            <input name="registration_contact" type="number" class="form-control" id="exampleFormControlInput1"
                placeholder="+91 XXXXXXXXXX" required>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Email Address</label>
            <input name="registration_email" type="email" class="form-control" id="exampleFormControlInput1"
                placeholder="abc@xyz.com" required>
        </div>

        <div class="mb-4">
            <label for="exampleFormControlInput1" class="form-label">Select Course</label>
            <select name="registration_course" class="form-select" aria-label="Default select example">
                <option selected>Open this select menu</option>
                <option value="1">Bachelors of Pharmacy</option>
                <option value="2">Diploma in Pharmacy</option>
            </select>
        </div>

        <div class="registration-form-input-row">
            <div class="mb-3 col-md-5">
                <label for="exampleFormControlInput1" class="form-label">Percentage scored in Class Xth</label>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">%</span>
                    <input name="registration_10th_percentage" type="text" class="form-control" placeholder="percentage"
                        aria-label="Username" aria-describedby="basic-addon1">
                </div>
            </div>

            <div class="mb-3 col-md-5">
                <label for="exampleFormControlInput1" class="form-label">Percentage scored in Class XIIth</label>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">%</span>
                    <input name="registration_12th_percentage" type="text" class="form-control" placeholder="percentage"
                        aria-label="Username" aria-describedby="basic-addon1">
                </div>
            </div>
        </div>

        <button type="submit" name="register" class="btn btn-primary w-100">Submit</button>
    </form>
</div>