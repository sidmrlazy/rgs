<div class="modal fade hide" id="admissionModal" tabindex="-1" aria-labelledby="admissionModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <a href="admissions.php" class="btn btn-primary">Apply Now</a>
            </div>
        </div>
    </div>
</div>

<script>
$(window).on("load", function() {
    $("#admissionModal").modal("show");
});
</script>