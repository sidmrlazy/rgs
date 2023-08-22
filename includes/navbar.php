<div class="top-nav">
    <a href="index.php" class="top-nav-brand">
        <img src="assets/logo/rgs-logo.webp" alt="Top-Notch Pharmacy Education: RGS College of Pharmacy, Lucknow">
    </a>

    <div class="top-nav-row">
        <div class="top-nav-item">
            <p class="top-nav-link">
                <ion-icon class="top-nav-icon" name="call-outline"></ion-icon> +91 9305889899
            </p>
        </div>

        <div class="top-nav-item">
            <p class="top-nav-link">
                <ion-icon class="top-nav-icon" name="mail-outline"></ion-icon> rgscp23@gmail.com
            </p>
        </div>

        <div class="top-nav-item">
            <p class="top-nav-link">
                <strong>Affiliated by PCI</strong>
            </p>
        </div>

        <div class="top-nav-item">
            <a href="https://www.facebook.com/RGSCollegeOfPharmacy" class="top-nav-link-media" target="_blank">
                <ion-icon name="logo-facebook"></ion-icon>
            </a>
        </div>

        <div class="top-nav-item">
            <a href="https://www.instagram.com/rgscp/" class="top-nav-link-media" target="_blank">
                <ion-icon name="logo-instagram"></ion-icon>
            </a>
        </div>
    </div>

</div>


<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php">
            <img src="assets/logo/rgs-logo.webp" alt="RGS College of Pharmacy: Shaping Tomorrow's Pharmacists">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <?php if ($title === "Top College of Pharmacy in Lucknow | RGS College of Pharmacy") {  ?>
                    <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    <?php } else { ?>
                    <a class="nav-link" aria-current="page" href="index.php">Home</a>
                    <?php } ?>
                </li>
                <li class="nav-item">
                    <?php if ($title === "Who We Are | RGS College of Pharmacy") { ?>
                    <a class="nav-link active" href="who-we-are.php">Who we are</a>
                    <?php } else { ?>
                    <a class="nav-link" href="who-we-are.php">Who we are</a>
                    <?php } ?>
                </li>

                <li class="nav-item">
                    <?php if ($title === "Admissions | RGS College of Pharmacy") { ?>
                    <a class="nav-link active" href="admissions.php">Admissions</a>
                    <?php } else { ?>
                    <a class="nav-link" href="admissions.php">Admissions</a>
                    <?php } ?>
                </li>
                <li class="nav-item">
                    <?php if ($title === "Events | RGS College of Pharmacy") { ?>
                    <a class="nav-link active" href="events.php">Events</a>
                    <?php } else { ?>
                    <a class="nav-link" href="events.php">Events</a>
                    <?php } ?>
                </li>
                <!-- <li class="nav-item">
                    <?php if ($title === "Facilities | RGS College of Pharmacy") { ?>
                        <a class="nav-link active" href="facilities">Facilities</a>
                    <?php } else { ?>
                        <a class="nav-link" href="facilities">Facilities</a>
                    <?php } ?>
                </li> -->
                <!-- <li class="nav-item">
                    <?php if ($title === "Courses | RGS College of Pharmacy") { ?>
                    <a class="nav-link active" href="courses">Courses</a>
                    <?php } else { ?>
                    <a class="nav-link" href="courses">Courses</a>
                    <?php } ?>
                </li> -->
                <?php
                require('includes/db.php');
                $fetch_data = "SELECT * FROM `student_corner`";
                $fetch_data_r = mysqli_query($connection, $fetch_data);
                $fetch_data_count = mysqli_num_rows($fetch_data_r);

                if ($fetch_data_count > 0) {
                ?>
                <li class="nav-item">
                    <?php if ($title === "Student Corner | RGS College of Pharmacy") { ?>
                    <a class="nav-link active" href="student-corner.php">Student Corner</a>
                    <?php } else { ?>
                    <a class="nav-link" href="student-corner.php">Student Corner</a>
                    <?php } ?>
                </li>
                <?php } ?>
                <!-- <li class="nav-item">
                    <?php if ($title === "Resources | RGS College of Pharmacy") { ?>
                    <a class="nav-link active" href="resources">Resources</a>
                    <?php } else { ?>
                    <a class="nav-link" href="resources">Resources</a>
                    <?php } ?>
                </li> -->

                <li class="nav-item dropdown">
                    <?php if ($title === "Academics | RGS College of Pharmacy" || $title === "Calendar | RGS College of Pharmacy") { ?>
                    <a class="nav-link active dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Academics
                    </a>
                    <?php } else { ?>
                    <a class="nav-link  dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Academics
                    </a>
                    <?php } ?>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="courses.php">Courses</a></li>
                        <li><a class="dropdown-item" href="departments.php">Departments</a></li>
                        <!-- <li><a class="dropdown-item" href="calendar">Calendar</a></li>
                        <hr>
                        <li><a class="dropdown-item" href="#">Downloads</a></li> -->
                    </ul>
                </li>
                <!-- <li class="nav-item">
                    <?php if ($title === "Career | RGS College of Pharmacy") { ?>
                    <a class="nav-link active" href="career">Career</a>
                    <?php } else { ?>
                    <a class="nav-link" href="career">Career</a>
                    <?php } ?>
                </li> -->
                <li class="nav-item">
                    <?php if ($title === "Contact Us | RGS College of Pharmacy") { ?>
                    <a class="nav-link active" href="contact.php">Contact</a>
                    <?php } else { ?>
                    <a class="nav-link" href="contact.php">Contact</a>
                    <?php } ?>
                </li>
            </ul>
            <!-- <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form> -->
        </div>
    </div>
</nav>