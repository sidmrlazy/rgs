<div class="container mt-5 contact-section-2">
    <div class="col-md-6">
        <div class="contact-section-lottie">
            <lottie-player src="https://assets10.lottiefiles.com/packages/lf20_gaplvsns.json" background="transparent"
                speed="1" loop autoplay></lottie-player>
        </div>
        <div class="contact-details-bar">
            <div class="contact-details-icon">
                <ion-icon name="location-outline"></ion-icon>
            </div>

            <div class="contact-details">
                <h3>ADDRESS</h3>
                <p>Near Itaunja Toll Plaza, Itaunja, Lucknow, India, Uttar Pradesh</p>
            </div>
        </div>

        <div class="contact-details-bar">
            <div class="contact-details-icon">
                <ion-icon name="call-outline"></ion-icon>
            </div>

            <div class="contact-details">
                <h3>CONTACT</h3>
                <p>+91 93058 89899</p>
            </div>
        </div>

        <div class="contact-details-bar">
            <div class="contact-details-icon">
                <ion-icon name="call-outline"></ion-icon>
            </div>

            <div class="contact-details">
                <h3>EMAIL</h3>
                <p>rgscp23@gmail.com</p>
            </div>
        </div>
    </div>
    <div class="col-md-6 contact-section">
        <h2>Connect with us</h2>
        <p>Fill out the form and we'll get back to you</p>
        <?php
        require('includes/db.php');
        if (isset($_POST['contact'])) {
            $contact_name = mysqli_real_escape_string($connection, $_POST['contact_name']);
            $contact_number = mysqli_real_escape_string($connection, $_POST['contact_number']);
            $contact_email = mysqli_real_escape_string($connection, $_POST['contact_email']);
            $contact_reason = mysqli_real_escape_string($connection, $_POST['contact_reason']);
            $contact_details = mysqli_real_escape_string($connection, $_POST['contact_details']);

            $query = "INSERT INTO `contact_form`(
            `contact_name`,
            `contact_number`,
            `contact_email`,
            `contact_reason`,
            `contact_details`
        )
        VALUES(
            '$contact_name',
            '$contact_number',
            '$contact_email',
            '$contact_reason',
            '$contact_details'
        )";
            $result = mysqli_query($connection, $query);

            if ($result) {
                $to = "rgscp23@gmail.com";
                $subject = "Website Visitor";

                $message = "
<html>
<head>
<title>HTML email</title>
</head>
<body>
<table>
<tr>
<th>Full Name</th>
<th>Contact number</th>
<th>Email</th>
<th>Contacting for</th>
</tr>
<tr>
<td>$contact_name</td>
<td>$contact_number</td>
<td>$contact_email</td>
    </tr>
    </table>

    <p style='margin-top: 20px; margin-bottom: 20px; font-weight: ' bold';'>For more details about this visitor please
        visit your Admin Panel</p>
    </body>

    </html>
    ";

                // Always set content-type when sending HTML email
                $headers = "MIME-Version: 1.0" . "\r\n";
                $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

                mail($to, $subject, $message, $headers);

        ?>
        <div class="alert alert-success mt-3 mb-3" role="alert">
            Thank you for contacting us. We will connect with you shortly!
        </div>
        <?php
            }
        }
        ?>

        <form action="" method="POST" class="contact-form">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Full Name</label>
                <input name="contact_name" type="text" class="form-control" id="exampleFormControlInput1"
                    placeholder="Please enter your full name" required>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Contact Number</label>
                <input name="contact_number" type="number" class="form-control" id="exampleFormControlInput1"
                    placeholder="+91 XXXXX XXXX" required>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Email address</label>
                <input name="contact_email" type="email" class="form-control" id="exampleFormControlInput1"
                    placeholder="abc@xyz.com">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Contacting about?</label>
                <select name="contact_reason" class="form-select" aria-label="Default select example">
                    <option selected>Open this select menu</option>
                    <option value="1">Career</option>
                    <option value="2">Courses</option>
                    <option value="3">Admission Process</option>
                    <option value="4">Fee Structure</option>
                    <option value="4">Other</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">How can we help?</label>
                <textarea name="contact_details" class="form-control" id="exampleFormControlTextarea1"
                    rows="5"></textarea>
            </div>

            <button type="submit" name="contact" class="btn btn-primary w-100">Submit</button>
        </form>
    </div>


    <div>

    </div>
</div>