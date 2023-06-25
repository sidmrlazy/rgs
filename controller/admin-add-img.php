<?php include('includes/header-admin.php') ?>
<?php include('navbar/navbar-admin.php') ?>
<div class="container-fluid mt-5">
    <div class="admin-dashboard">
        <h5 class="form-header">Upload Multiple Images</h5>
        <p class="form-header-details">Select and upload multiple images</p>
        <?php
        require('includes/db.php');
        if (isset($_POST['add'])) {
            $event_id = $_POST['event_id'];
        ?>
            <form action="admin-add-event.php" method="post" enctype="multipart/form-data" class="uplod-form mt-3">
                <div class="admin-dashboard-row">
                    <input type="text" name="album_id" value="<?php echo $event_id; ?>" hidden>

                    <div class="input-group m-1">
                        <input type="file" multiple name="event_images[]" class="form-control" id="inputGroupFile01">
                    </div>

                    <button class="btn btn-success m-1" name="upload">Upload</button>
                </div>
            </form>
        <?php } ?>

    </div>
</div>
<?php include('includes/footer.php') ?>