<!-- Navigation & Header Start -->
<?php include 'includes/header.php'; ?>
<?php include 'includes/navigation/navigation.php';
?>
<!-- Navigation & Header End -->


<!-- ====================== Pop Up Form Start ====================== -->
<script>
$(document).ready(function() {
    $("#homepageModal").modal("show");
});
</script>
<div class="modal fade hide" id="homepageModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>


<!-- ====================== Pop Up Form End ====================== -->

<!-- Main Section Start -->
<?php include 'includes/HomePage/BannerSection.php';
?>
<?php include 'includes/HomePage/Featured-Section/Featured-Section.php';
?>
<?php include 'includes/HomePage/Gallery-Section/Gallery-Section.php';
?>
<?php include 'includes/HomePage/Testimonials/Testimonials.php';
?>
<!-- Main Section End -->

<!-- Footer Section Start -->
<?php include 'includes/Footer.php';
?>
<?php include 'includes/Sidebar/Sidebar.php';
?>
<!-- Footer Section End -->