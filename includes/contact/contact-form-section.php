<!-- Contact Page Section -->
<?php
$postData = $statusMsg = '';
$sitekey = '6LeYQ_8ZAAAAANSCDSagOOUv8C6yImXQtTKb_Hhv';
$secretkey = '6LeYQ_8ZAAAAAGr8XV66WJeYA7gVOLxx9rwqAYyy';
?>
<section class="contact-page-section" style="background-image:url(images/background/25.jpg)">
    <div class="pattern-layer" style="background-image:url(images/background/pattern-13.png)"></div>
    <div class="container">
        <div class="row">

            <!-- Info Column -->
            <!-- <div class="info-column col-lg-7 col-md-12 col-sm-12">
                <div class="inner-column">

                    <div class="section-title">
                        <h2>Get in Touch</h2>
                        <p class="text">Behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                    </div>
                    <div class="row">

                        <div class="column col-lg-6 col-md-6 col-sm-12">
                            <div class="contact-address">
                                <div class="inner">
                                    <div class="icon-box">
                                        <span class="icon flaticon-map-pin-marked"></span>
                                    </div>
                                    <h4>Address</h4>
                                    <p class="text">29 Union Square West <br> New York, NY 10003, USA</p>
                                </div>
                            </div>
                        </div>

                        <div class="column col-lg-6 col-md-6 col-sm-12">
                            <div class="contact-address">
                                <div class="inner">
                                    <div class="icon-box">
                                        <span class="icon flaticon-phone-call"></span>
                                    </div>
                                    <h4>Address</h4>
                                    <p class="text">+1 (857) 325-4879 <br> +1 (685) 218-7845</p>
                                </div>
                            </div>
                        </div>

                        <div class="column col-lg-6 col-md-6 col-sm-12">
                            <div class="contact-address">
                                <div class="inner">
                                    <div class="icon-box">
                                        <span class="icon flaticon-clock"></span>
                                    </div>
                                    <h4>Opening Hours</h4>
                                    <p class="text">Moday to Friday: 8am to 7pm Saturday: 10am to 5pm Sunday: 10am to 2pm</p>
                                </div>
                            </div>
                        </div>

                        <div class="column col-lg-6 col-md-6 col-sm-12">
                            <div class="contact-address">
                                <div class="inner">
                                    <div class="icon-box">
                                        <span class="icon flaticon-letter"></span>
                                    </div>
                                    <h4>Mail</h4>
                                    <p class="text">info@website.com <br> appointment@website.com</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->

            <!-- Form Column -->
            <?php
            if (isset($_POST['submit'])) {

                if (isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])) {
                    // Google reCAPTCHA API secret key 


                    // Verify the reCAPTCHA response 
                    $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret=' . '6LeYQ_8ZAAAAAGr8XV66WJeYA7gVOLxx9rwqAYyy' . '&response=' . $_POST['g-recaptcha-response']);

                    // Decode json data 
                    $responseData = json_decode($verifyResponse);

                    // If reCAPTCHA response is valid 
                    if ($responseData->success) {

                        $username = $_POST['username'];
                        $email = $_POST['email'];
                        $phone = $_POST['phone'];
                        $message = $_POST['message'];
                        $todaydate = time();

                        $res = mysqli_query($connect, "INSERT INTO contact (username,email,phone,message,todaydate) VALUES ('$username','$email','$phone','$message','$todaydate')");

                        if ($res) {
                            $_SESSION['message'] = "Thank you for showing interest";
                        } else {
                            // $_SESSION['message'] = "SMS Not Send";
                        }

                        // header('location:admissions.php');
                    } else {
                        $statusMsg = 'Robot verification failed, please try again.';
                    }
                } else {
                    $statusMsg = 'Please check on the reCAPTCHA box.';
                }
            }

            ?>


            <?php if (isset($_SESSION['message'])) : ?>
            <div class="col-sm-12">

                <div class="alert alert-success alert-dismissible">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <strong>Success!</strong>
                    <?php
                        echo $_SESSION['message'];
                        unset($_SESSION['message']);
                        ?>
                </div>
            </div>
            <?php endif ?>
            <?php if (!empty($statusMsg)) { ?>
            <p class="status-msg" style="color:red;"><?php echo $statusMsg; ?></p>
            <?php } ?>



            <div class="form-column col-lg-12 col-md-12 col-sm-12">
                <div class="inner-column">
                    <div class="title-box">
                        <div class="title">To know more</div>
                        <h3>Contact us</h3>
                    </div>

                    <!-- Contact Form -->
                    <div class="contact-form">
                        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" id="">

                            <div class="form-group">
                                <span class="icon flaticon-user-2"></span>
                                <input type="text" name="username" placeholder="Enter your name " required>
                            </div>

                            <div class="form-group">
                                <span class="icon flaticon-send"></span>
                                <input type="email" name="email" placeholder="Your mail " required>
                            </div>

                            <div class="form-group">
                                <span class="icon flaticon-phone"></span>
                                <input type="text" name="phone" placeholder="Phone Number " required>
                            </div>

                            <div class="form-group comment-group">
                                <span class="icon icon-comments"></span>
                                <textarea name="message" placeholder="Write your message " required
                                    maxlength="100"></textarea>
                            </div>
                            <div class="g-recaptcha" data-sitekey="6LeYQ_8ZAAAAANSCDSagOOUv8C6yImXQtTKb_Hhv"></div>

                            <div class="form-group">
                                <button class="theme-btn submit-btn" type="submit" name="submit">Submit Now</button>
                            </div>

                        </form>

                    </div>

                </div>
            </div>

        </div>
    </div>
</section>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<!-- End Contact Page Section -->