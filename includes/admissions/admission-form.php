<div class="container">
    <div class="inner-section">
        <div class="row">

            <!-- Form Column -->
            <div class="col-lg-12 col-md-12 col-sm-12 mt-5 mb-5">
                <div class="form-column">
                    <div class="inner-column">
                        <!-- <h3>Fill up the form</h3> -->
                        <!-- Calender Form -->
                        <div class="calender-form admission-icon">

                            <?php

                            if (isset($_POST['submit'])) {

                                $student_name = $_POST['student_name'];
                                $age = $_POST['age'];
                                $address = $_POST['address'];
                                $phone = $_POST['phone'];
                                $email = $_POST['email'];
                                $course = $_POST['course'];
                                $percentage_scored_twelve = $_POST['percentage_scored_twelve'];
                                $percentage_scroed_ten = $_POST['percentage_scroed_ten'];
                                $res = mysqli_query($connect, "INSERT INTO stu_admissions (name,age,address,phone,email,course_type,percentage_scored_twelve,percentage_scroed_ten) VALUES ('$student_name','$age','$address','$phone','$email','$course','$percentage_scored_twelve','$percentage_scroed_ten')");
                                $_SESSION['message'] = "Registration Successfully";
                                // header('location:admissions.php');
                            }

                            ?>

                            <?php if (isset($_SESSION['message'])) : ?>

                            <div class="alert alert-success alert-dismissible">
                                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                <strong>Success!</strong>
                                <?php
                                    echo $_SESSION['message'];
                                    unset($_SESSION['message']);
                                    ?>
                            </div>
                            <?php endif ?>



                            <!--Contact Form-->
                            <!-- includes/admissions/admission-form_code.php -->
                            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">

                                <!--Form Group-->

                                <div class="form-group">
                                    <label><span class="icon flaticon-new-user"></span> Enter your Name</label>
                                    <input type="text" name="student_name" placeholder="Type your name" required>
                                </div>

                                <div class="form-group">
                                    <label><span class="icon "><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                width="80" height="80" viewBox="0 0 172 172" style=" fill:#000000;">
                                                <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1"
                                                    stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10"
                                                    stroke-dasharray="" stroke-dashoffset="0" font-family="none"
                                                    font-weight="none" font-size="none" text-anchor="none"
                                                    style="mix-blend-mode: normal">
                                                    <path d="M0,172v-172h172v172z" fill="none"></path>
                                                    <g fill="#1abc9c">
                                                        <path
                                                            d="M51.6,10.75c-2.35009,0 -4.3,1.94991 -4.3,4.3v6.45h-15.05c-5.91146,0 -10.75,4.83854 -10.75,10.75v107.5c0,5.91146 4.83854,10.75 10.75,10.75h107.5c5.91146,0 10.75,-4.83854 10.75,-10.75v-107.5c0,-5.91146 -4.83854,-10.75 -10.75,-10.75h-15.05v-6.45c0,-2.35009 -1.94991,-4.3 -4.3,-4.3h-4.3c-2.35009,0 -4.3,1.94991 -4.3,4.3v6.45h-51.6v-6.45c0,-2.35009 -1.94991,-4.3 -4.3,-4.3zM51.6,15.05h4.3v17.2h-4.3zM116.1,15.05h4.3v17.2h-4.3zM32.25,25.8h15.05v6.45c0,2.35009 1.94991,4.3 4.3,4.3h4.3c2.35009,0 4.3,-1.94991 4.3,-4.3v-6.45h51.6v6.45c0,2.35009 1.94991,4.3 4.3,4.3h4.3c2.35009,0 4.3,-1.94991 4.3,-4.3v-6.45h15.05c3.58724,0 6.45,2.86276 6.45,6.45v15.05h-120.4v-15.05c0,-3.58724 2.86276,-6.45 6.45,-6.45zM25.8,51.6h120.4v88.15c0,3.58724 -2.86276,6.45 -6.45,6.45h-107.5c-3.58724,0 -6.45,-2.86276 -6.45,-6.45zM86,69.875l-17.2,17.2h34.4zM68.8,95.675l17.2,17.2l17.2,-17.2zM34.4,133.3c-1.18741,0 -2.15,0.96259 -2.15,2.15c0,1.18741 0.96259,2.15 2.15,2.15c1.18741,0 2.15,-0.96259 2.15,-2.15c0,-1.18741 -0.96259,-2.15 -2.15,-2.15zM43,133.3c-1.18741,0 -2.15,0.96259 -2.15,2.15c0,1.18741 0.96259,2.15 2.15,2.15c1.18741,0 2.15,-0.96259 2.15,-2.15c0,-1.18741 -0.96259,-2.15 -2.15,-2.15zM51.6,133.3c-1.18741,0 -2.15,0.96259 -2.15,2.15c0,1.18741 0.96259,2.15 2.15,2.15c1.18741,0 2.15,-0.96259 2.15,-2.15c0,-1.18741 -0.96259,-2.15 -2.15,-2.15zM60.2,133.3c-1.18741,0 -2.15,0.96259 -2.15,2.15c0,1.18741 0.96259,2.15 2.15,2.15c1.18741,0 2.15,-0.96259 2.15,-2.15c0,-1.18741 -0.96259,-2.15 -2.15,-2.15zM68.8,133.3c-1.18741,0 -2.15,0.96259 -2.15,2.15c0,1.18741 0.96259,2.15 2.15,2.15c1.18741,0 2.15,-0.96259 2.15,-2.15c0,-1.18741 -0.96259,-2.15 -2.15,-2.15zM77.4,133.3c-1.18741,0 -2.15,0.96259 -2.15,2.15c0,1.18741 0.96259,2.15 2.15,2.15c1.18741,0 2.15,-0.96259 2.15,-2.15c0,-1.18741 -0.96259,-2.15 -2.15,-2.15zM86,133.3c-1.18741,0 -2.15,0.96259 -2.15,2.15c0,1.18741 0.96259,2.15 2.15,2.15c1.18741,0 2.15,-0.96259 2.15,-2.15c0,-1.18741 -0.96259,-2.15 -2.15,-2.15zM94.6,133.3c-1.18741,0 -2.15,0.96259 -2.15,2.15c0,1.18741 0.96259,2.15 2.15,2.15c1.18741,0 2.15,-0.96259 2.15,-2.15c0,-1.18741 -0.96259,-2.15 -2.15,-2.15zM103.2,133.3c-1.18741,0 -2.15,0.96259 -2.15,2.15c0,1.18741 0.96259,2.15 2.15,2.15c1.18741,0 2.15,-0.96259 2.15,-2.15c0,-1.18741 -0.96259,-2.15 -2.15,-2.15zM111.8,133.3c-1.18741,0 -2.15,0.96259 -2.15,2.15c0,1.18741 0.96259,2.15 2.15,2.15c1.18741,0 2.15,-0.96259 2.15,-2.15c0,-1.18741 -0.96259,-2.15 -2.15,-2.15zM120.4,133.3c-1.18741,0 -2.15,0.96259 -2.15,2.15c0,1.18741 0.96259,2.15 2.15,2.15c1.18741,0 2.15,-0.96259 2.15,-2.15c0,-1.18741 -0.96259,-2.15 -2.15,-2.15zM129,133.3c-1.18741,0 -2.15,0.96259 -2.15,2.15c0,1.18741 0.96259,2.15 2.15,2.15c1.18741,0 2.15,-0.96259 2.15,-2.15c0,-1.18741 -0.96259,-2.15 -2.15,-2.15zM137.6,133.3c-1.18741,0 -2.15,0.96259 -2.15,2.15c0,1.18741 0.96259,2.15 2.15,2.15c1.18741,0 2.15,-0.96259 2.15,-2.15c0,-1.18741 -0.96259,-2.15 -2.15,-2.15z">
                                                        </path>
                                                    </g>
                                                </g>
                                            </svg></span> DOB</label>
                                    <input type="text" name="age" placeholder="DD-MM-YYYY" required>
                                </div>

                                <div class="form-group">
                                    <label><span class="icon "><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                width="24" height="24" viewBox="0 0 172 172" style=" fill:#000000;">
                                                <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1"
                                                    stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10"
                                                    stroke-dasharray="" stroke-dashoffset="0" font-family="none"
                                                    font-weight="none" font-size="none" text-anchor="none"
                                                    style="mix-blend-mode: normal">
                                                    <path d="M0,172v-172h172v172z" fill="none"></path>
                                                    <g fill="#1abc9c">
                                                        <path
                                                            d="M86,7.16667c-23.75033,0 -43,19.24967 -43,43c0,30.71633 43,78.83333 43,78.83333c0,0 43,-48.117 43,-78.83333c0,-23.75033 -19.24967,-43 -43,-43zM86,34.81152c8.48533,0 15.35514,6.86981 15.35514,15.35514c0,8.47817 -6.87698,15.35514 -15.35514,15.35514c-8.47817,0 -15.35514,-6.86981 -15.35514,-15.35514c0,-8.48533 6.86981,-15.35514 15.35514,-15.35514zM34.4056,107.5l-20.07227,50.16667h143.33333l-20.07226,-50.16667h-17.10482c-3.47583,5.23883 -6.96544,10.09067 -10.17611,14.33333h17.59473l8.5944,21.5h-101.00521l8.5944,-21.5h17.59473c-3.21067,-4.24267 -6.70027,-9.0945 -10.17611,-14.33333z">
                                                        </path>
                                                    </g>
                                                </g>
                                            </svg></span> Address</label>
                                    <input type="text" name="address" placeholder="Street Name | Locality | Area"
                                        required>
                                </div>

                                <div class="form-group">
                                    <label><span class="icon flaticon-phone-receiver"></span> Phone Number</label>
                                    <input type="text" name="phone" placeholder="Phone" required>
                                </div>

                                <div class="form-group">
                                    <label><span class="icon icon-envelope"></span> Your Email Address</label>
                                    <input type="text" name="email" placeholder="Email" required>
                                </div>



                                <div class="form-group">
                                    <label><span class="icon icon-doctor"></span> Seeking Admission to</label>
                                    <select class="custom-select-box" name="course">
                                        <option value="">Select Course</option>
                                        <option value="b">B. Pharma</option>
                                        <option value="d">D. Pharma</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label><span class="icon"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                width="24" height="24" viewBox="0 0 172 172" style=" fill:#000000;">
                                                <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1"
                                                    stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10"
                                                    stroke-dasharray="" stroke-dashoffset="0" font-family="none"
                                                    font-weight="none" font-size="none" text-anchor="none"
                                                    style="mix-blend-mode: normal">
                                                    <path d="M0,172v-172h172v172z" fill="none"></path>
                                                    <g fill="#1abc9c">
                                                        <path
                                                            d="M132.41536,21.42301c-2.11205,0.06768 -4.08661,1.06392 -5.39599,2.72249l-93.16667,114.66667c-2.49697,3.07289 -2.03009,7.58816 1.0428,10.08512c3.07289,2.49697 7.58816,2.03009 10.08512,-1.0428l93.16667,-114.66667c1.81485,-2.16747 2.18613,-5.19923 0.94796,-7.74059c-1.23818,-2.54136 -3.85449,-4.11753 -6.67989,-4.02423zM50.16667,21.5c-13.76629,0 -25.08333,11.31705 -25.08333,25.08333v14.33333c0,13.76629 11.31705,25.08333 25.08333,25.08333c13.76629,0 25.08333,-11.31705 25.08333,-25.08333v-14.33333c0,-13.76629 -11.31705,-25.08333 -25.08333,-25.08333zM50.16667,35.83333c5.99221,0 10.75,4.75779 10.75,10.75v14.33333c0,5.99221 -4.75779,10.75 -10.75,10.75c-5.99221,0 -10.75,-4.75779 -10.75,-10.75v-14.33333c0,-5.99221 4.75779,-10.75 10.75,-10.75zM121.83333,86c-13.76629,0 -25.08333,11.31705 -25.08333,25.08333v14.33333c0,13.76629 11.31705,25.08333 25.08333,25.08333c13.76629,0 25.08333,-11.31705 25.08333,-25.08333v-14.33333c0,-13.76629 -11.31705,-25.08333 -25.08333,-25.08333zM121.83333,100.33333c5.99221,0 10.75,4.75779 10.75,10.75v14.33333c0,5.99221 -4.75779,10.75 -10.75,10.75c-5.99221,0 -10.75,-4.75779 -10.75,-10.75v-14.33333c0,-5.99221 4.75779,-10.75 10.75,-10.75z">
                                                        </path>
                                                    </g>
                                                </g>
                                            </svg></span> Percentage Scored in 12th</label>
                                    <input type="text" name="percentage_scored_twelve"
                                        placeholder="Type your percentage scored in 12th" required>
                                </div>

                                <div class="form-group">
                                    <label><span class="icon"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                width="24" height="24" viewBox="0 0 172 172" style=" fill:#000000;">
                                                <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1"
                                                    stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10"
                                                    stroke-dasharray="" stroke-dashoffset="0" font-family="none"
                                                    font-weight="none" font-size="none" text-anchor="none"
                                                    style="mix-blend-mode: normal">
                                                    <path d="M0,172v-172h172v172z" fill="none"></path>
                                                    <g fill="#1abc9c">
                                                        <path
                                                            d="M132.41536,21.42301c-2.11205,0.06768 -4.08661,1.06392 -5.39599,2.72249l-93.16667,114.66667c-2.49697,3.07289 -2.03009,7.58816 1.0428,10.08512c3.07289,2.49697 7.58816,2.03009 10.08512,-1.0428l93.16667,-114.66667c1.81485,-2.16747 2.18613,-5.19923 0.94796,-7.74059c-1.23818,-2.54136 -3.85449,-4.11753 -6.67989,-4.02423zM50.16667,21.5c-13.76629,0 -25.08333,11.31705 -25.08333,25.08333v14.33333c0,13.76629 11.31705,25.08333 25.08333,25.08333c13.76629,0 25.08333,-11.31705 25.08333,-25.08333v-14.33333c0,-13.76629 -11.31705,-25.08333 -25.08333,-25.08333zM50.16667,35.83333c5.99221,0 10.75,4.75779 10.75,10.75v14.33333c0,5.99221 -4.75779,10.75 -10.75,10.75c-5.99221,0 -10.75,-4.75779 -10.75,-10.75v-14.33333c0,-5.99221 4.75779,-10.75 10.75,-10.75zM121.83333,86c-13.76629,0 -25.08333,11.31705 -25.08333,25.08333v14.33333c0,13.76629 11.31705,25.08333 25.08333,25.08333c13.76629,0 25.08333,-11.31705 25.08333,-25.08333v-14.33333c0,-13.76629 -11.31705,-25.08333 -25.08333,-25.08333zM121.83333,100.33333c5.99221,0 10.75,4.75779 10.75,10.75v14.33333c0,5.99221 -4.75779,10.75 -10.75,10.75c-5.99221,0 -10.75,-4.75779 -10.75,-10.75v-14.33333c0,-5.99221 4.75779,-10.75 10.75,-10.75z">
                                                        </path>
                                                    </g>
                                                </g>
                                            </svg></span> Percentage Scored in 10th</label>
                                    <input type="text" name="percentage_scroed_ten"
                                        placeholder="Type your percentage scroed ten" required>
                                </div>

                                <div class="button-box">
                                    <!-- <a href="#" class="theme-btn btn-style-three">Submit <span class="arrow icon-chevron-right"></span></a> -->
                                    <button type="submit" name="submit" class="theme-btn btn-style-three">Submit <span
                                            class="arrow icon-chevron-right"></span></button>
                                </div>

                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>