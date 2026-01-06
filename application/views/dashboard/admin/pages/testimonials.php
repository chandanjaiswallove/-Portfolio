<!-- Page Sidebar Ends-->
<div class="page-body">

    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-6">
                    <h4>Testimonials</h4>
                </div>
                <div class="col-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?= base_url('admin_playground') ?>">
                                <svg class="stroke-icon">
                                    <use href="modules/assets2/svg/icon-sprite.svg#stroke-home"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Dashboard</li>
                        <li class="breadcrumb-item active"><a href="<?= base_url('testimonials'); ?>">Testimonials</a></li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="edit-profile">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">

                        <!-- CARD BODY -->
                        <div class="card-body">

                            <!-- ADD BUTTON -->
                            <button class="btn btn-primary" type="button" data-bs-toggle="modal"
                                data-bs-target="#addTestimonialModal">
                                Add New Testimonial
                            </button>

                            <!-- ADD MODAL -->
                            <div class="modal fade" id="addTestimonialModal" tabindex="-1" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-xl">
                                    <div class="modal-content">

                                        <div class="modal-header">
                                            <h4 class="modal-title">Add New Testimonial</h4>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                        </div>

                                        <div class="modal-body">
                                            <form method="post" action="" enctype="multipart/form-data">
                                                <div class="row">

                                                    <!-- Profile Name -->
                                                    <div class="col-md-6 mb-3">
                                                        <label class="form-label">Profile Name</label>
                                                        <input type="text" class="form-control" name="profile_name"
                                                            placeholder="Enter profile name" required>
                                                    </div>

                                                    <!-- Company Name -->
                                                    <div class="col-md-6 mb-3">
                                                        <label class="form-label">Company Name</label>
                                                        <input type="text" class="form-control" name="company_name"
                                                            placeholder="Enter company name" required>
                                                    </div>

                                                    <!-- Client Project Name -->
                                                    <div class="col-md-6 mb-3">
                                                        <label class="form-label">Client Project Name</label>
                                                        <input type="text" class="form-control"
                                                            name="client_project_name" placeholder="Enter project name"
                                                            required>
                                                    </div>

                                                    <!-- Profile Photo -->
                                                    <div class="col-md-6 mb-3 position-relative">
                                                        <label class="form-label">Profile Photo</label>

                                                        <div class="input-group mb-2">
                                                            <input type="text" id="testimonialImageName"
                                                                class="form-control" placeholder="No file chosen"
                                                                readonly>

                                                            <button class="btn btn-primary rounded-end" type="button"
                                                                onclick="document.getElementById('testimonialPhoto').click();">
                                                                Browse
                                                            </button>

                                                            <input type="file" class="d-none" id="testimonialPhoto"
                                                                name="profile_photo" accept="image/*"
                                                                onchange="updateFileNameAndPreview(
                                                                    this,
                                                                    'testimonialImageName',
                                                                    'testimonialImagePreview',
                                                                    'testimonialImageRemove'
                                                                )">
                                                        </div>

                                                        <div class="d-inline-block position-relative">
                                                            <img id="testimonialImagePreview"
                                                                style="width:100px;height:100px;border-radius:50%;object-fit:cover;display:none;">

                                                            <button type="button" id="testimonialImageRemove"
                                                                onclick="removeFileWithPreview(
                                                                    'testimonialPhoto',
                                                                    'testimonialImageName',
                                                                    'testimonialImagePreview',
                                                                    'testimonialImageRemove'
                                                                )" style="position:absolute;top:-10px;right:-10px;border:none;background:none;font-size:20px;color:#fe6a49;cursor:pointer;display:none;">
                                                                &times;
                                                            </button>
                                                        </div>
                                                    </div>

                                                    <!-- Client Review -->
                                                    <div class="col-md-12 mb-3">
                                                        <label class="form-label">Client Review</label>
                                                        <textarea class="form-control" rows="4" name="client_review"
                                                            placeholder="Write client review..." style="resize:none;"
                                                            required></textarea>
                                                    </div>
                                                </div>

                                                <!-- Footer Buttons -->
                                                <div class="text-end">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">
                                                        Cancel
                                                    </button>
                                                    <button type="submit" class="btn btn-primary ms-2">
                                                        Save Testimonial
                                                    </button>
                                                </div>
                                            </form>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- TABLE -->
                        <div class="table-responsive add-project custom-scrollbar">
                            <table class="table card-table table-vcenter text-nowrap">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Date</th>
                                        <th>Profile Name</th>
                                        <th>Profile Photo</th>
                                        <th>Company Name</th>
                                        <th>Client Review</th>
                                        <th>Project Name</th>
                                        <th class="text-end">Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php if (!empty($testimonials)): ?>
                                        <?php foreach ($testimonials as $row): ?>
                                            <tr>
                                                <td><?= $row->id ?></td>
                                                <td><?= date('d M Y', strtotime($row->created_at)) ?></td>
                                                <td><?= $row->profile_name ?></td>
                                                <td>
                                                    <img src="<?= base_url($row->profile_photo) ?>"
                                                        style="width:40px;height:40px;border-radius:50%;object-fit:cover;">
                                                </td>
                                                <td><?= $row->company_name ?></td>
                                                <td><?= $row->client_review ?></td>
                                                <td><?= $row->client_project_name ?></td>
                                                <td class="text-end">
                                                    <button class="btn btn-primary btn-sm me-2 editTestimonialBtn"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#editTestimonialModal"
                                                        data-id="<?= $row->id ?>"
                                                        data-name="<?= $row->profile_name ?>"
                                                        data-company="<?= $row->company_name ?>"
                                                        data-project="<?= $row->client_project_name ?>"
                                                        data-review="<?= htmlspecialchars($row->client_review) ?>"
                                                        data-photo="<?= base_url($row->profile_photo) ?>"
                                                        data-photo-name="<?= basename($row->profile_photo) ?>">
                                                        <i class="fa fa-pencil"></i> Edit
                                                    </button>

                                                    <a href="<?= base_url('admin/delete_testimonial/' . $row->id) ?>"
                                                        class="btn btn-secondary btn-sm"
                                                        onclick="return confirm('Are you sure to delete this testimonial?');">
                                                        <i class="fa fa-trash"></i> Delete
                                                    </a>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    <?php else: ?>
                                        <tr>
                                            <td colspan="8" class="text-center text-muted">No testimonials found</td>
                                        </tr>
                                    <?php endif; ?>
                                </tbody>
                            </table>
                        </div>

                        <!-- EDIT MODAL -->
                        <div class="modal fade" id="editTestimonialModal" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-xl">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Edit Testimonial</h4>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                    </div>

                                    <div class="modal-body">
                                        <form method="post" action="" enctype="multipart/form-data">
                                            <div class="row">
                                                <!-- Profile Name -->
                                                <div class="col-md-6 mb-3">
                                                    <label class="form-label">Profile Name</label>
                                                    <input type="text" class="form-control" name="profile_name"
                                                        id="editProfileName" required>
                                                </div>

                                                <!-- Company Name -->
                                                <div class="col-md-6 mb-3">
                                                    <label class="form-label">Company Name</label>
                                                    <input type="text" class="form-control" name="company_name"
                                                        id="editCompanyName" required>
                                                </div>

                                                <!-- Client Project Name -->
                                                <div class="col-md-6 mb-3">
                                                    <label class="form-label">Client Project Name</label>
                                                    <input type="text" class="form-control" name="client_project_name"
                                                        id="editProjectName" required>
                                                </div>

                                                <!-- Client Review -->
                                                <div class="col-md-12 mb-3">
                                                    <label class="form-label">Client Review</label>
                                                    <textarea class="form-control" rows="4" name="client_review"
                                                        id="editClientReview" style="resize:none;" required></textarea>
                                                </div>

                                                <!-- Profile Photo -->
                                                <div class="col-md-6 mb-3 position-relative">
                                                    <label class="form-label">Profile Photo</label>
                                                    <div class="input-group mb-2">
                                                        <input type="text" id="editTestimonialPhotoName"
                                                            class="form-control" placeholder="No file chosen" readonly>
                                                        <button class="btn btn-primary rounded-end" type="button"
                                                            onclick="document.getElementById('editTestimonialPhoto').click();">
                                                            Browse
                                                        </button>
                                                        <input type="file" class="d-none" id="editTestimonialPhoto"
                                                            name="profile_photo" accept="image/*"
                                                            onchange="updateFileNameAndPreview(
                                                                this,
                                                                'editTestimonialPhotoName',
                                                                'editTestimonialPhotoPreview',
                                                                'editTestimonialPhotoRemove'
                                                            )">
                                                    </div>

                                                    <div class="d-inline-block position-relative">
                                                        <img id="editTestimonialPhotoPreview"
                                                            style="width:100px;height:100px;border-radius:50%;object-fit:cover;">

                                                        <button type="button" id="editTestimonialPhotoRemove"
                                                            onclick="removeFileWithPreview(
                                                                'editTestimonialPhoto',
                                                                'editTestimonialPhotoName',
                                                                'editTestimonialPhotoPreview',
                                                                'editTestimonialPhotoRemove'
                                                            )" style="position:absolute;top:-10px;right:-10px;border:none;background:none;font-size:20px;color:#fe6a49;cursor:pointer;">
                                                            &times;
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>

                                            <input type="hidden" name="testimonial_id" id="editTestimonialId">

                                            <div class="text-end">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Cancel</button>
                                                <button type="submit" class="btn btn-primary ms-2">
                                                    Update Testimonial
                                                </button>
                                            </div>
                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="edit-profile">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">

                        <!-- CARD BODY -->
                        <div class="card-body">

                            <!-- ADD BUTTON -->
                            <button class="btn btn-primary" type="button" data-bs-toggle="modal"
                                data-bs-target="#addCompanyLogoModal">
                                Add Company Logo
                            </button>

                            <!-- ADD MODAL -->
                            <div class="modal fade" id="addCompanyLogoModal" tabindex="-1" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-xl">
                                    <div class="modal-content">

                                        <div class="modal-header">
                                            <h4 class="modal-title">Add New Company Logo</h4>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                        </div>

                                        <div class="modal-body">
                                            <form method="post" enctype="multipart/form-data">

                                                <div class="mb-3 col-md-12 position-relative">
                                                    <label class="form-label">Company Logo</label>

                                                    <!-- Input group -->
                                                    <div class="input-group mb-2">
                                                        <input type="text" id="companyLogoName" class="form-control"
                                                            placeholder="No file chosen" readonly>
                                                        <button class="btn btn-primary rounded-end" type="button"
                                                            onclick="document.getElementById('companyLogoFile').click();">
                                                            Browse
                                                        </button>
                                                        <input type="file" class="d-none" id="companyLogoFile"
                                                            name="company_logo" accept="image/*"
                                                            onchange="updateFileNameAndPreview('companyLogoFile','companyLogoName','companyLogoPreview','companyLogoRemove')">
                                                    </div>

                                                    <!-- Preview + Remove button -->
                                                    <div class="d-inline-block position-relative mt-2">
                                                        <img id="companyLogoPreview"
                                                            src="https://via.placeholder.com/100"
                                                            style="width:100px;height:100px;border-radius:50%;object-fit:cover;display:none;">
                                                        <button type="button" id="companyLogoRemove"
                                                            onclick="removeFileWithPreview('companyLogoFile','companyLogoName','companyLogoPreview','companyLogoRemove')"
                                                            style="position:absolute;top:-10px;right:-10px;border:none;background:none;font-size:20px;color:#fe6a49;cursor:pointer;display:none;">
                                                            &times;
                                                        </button>
                                                    </div>
                                                </div>

                                                <div class="text-end">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">
                                                        Cancel
                                                    </button>
                                                    <button type="submit" class="btn btn-primary ms-2">
                                                        Save Logo
                                                    </button>
                                                </div>

                                            </form>
                                        </div>

                                    </div>
                                </div>
                            </div>

                        </div>

                        <!-- TABLE -->
                        <div class="table-responsive add-project custom-scrollbar">
                            <table class="table card-table table-vcenter text-nowrap">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Date</th>
                                        <th>Company Logo</th>
                                        <th class="text-end">Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php if (!empty($company_logos)): ?>
                                        <?php foreach ($company_logos as $row): ?>
                                            <tr>
                                                <td><?= $row->id ?></td>
                                                <td><?= date('d M Y', strtotime($row->date)) ?></td>
                                                <td>
                                                    <img src="<?= base_url($row->company_logo) ?>"
                                                        style="width:40px;height:40px;border-radius:50%;object-fit:cover;">
                                                </td>
                                                <td class="text-end">
                                                    <button class="btn btn-primary btn-sm me-2 editCompanyLogoBtn"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#editCompanyLogoModal"
                                                        data-id="<?= $row->id ?>"
                                                        data-logo="<?= base_url($row->company_logo) ?>"
                                                        data-logo-name="<?= basename($row->company_logo) ?>">
                                                        <i class="fa fa-pencil"></i> Edit
                                                    </button>
                                                    <a href="<?= base_url('admin/delete_company_logo/' . $row->id) ?>"
                                                        class="btn btn-secondary btn-sm"
                                                        onclick="return confirm('Are you sure to delete this logo?');">
                                                        <i class="fa fa-trash"></i> Delete
                                                    </a>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    <?php else: ?>
                                        <tr>
                                            <td colspan="4" class="text-center text-muted">No company logos found</td>
                                        </tr>
                                    <?php endif; ?>
                                </tbody>

                            </table>
                        </div>

                        <!-- EDIT MODAL -->
                        <div class="modal fade" id="editCompanyLogoModal" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-xl">
                                <div class="modal-content">

                                    <div class="modal-header">
                                        <h4 class="modal-title">Edit Company Logo</h4>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                    </div>

                                    <div class="modal-body">
                                        <form method="post" enctype="multipart/form-data">

                                            <div class="mb-3 col-md-12 position-relative">
                                                <label class="form-label">Company Logo</label>

                                                <div class="input-group mb-2">
                                                    <input type="text" id="editCompanyLogoName" class="form-control"
                                                        placeholder="No file chosen" readonly>
                                                    <button class="btn btn-primary rounded-end" type="button"
                                                        onclick="document.getElementById('editCompanyLogoFile').click();">
                                                        Browse
                                                    </button>
                                                    <input type="file" class="d-none" id="editCompanyLogoFile"
                                                        name="company_logo" accept="image/*"
                                                        onchange="updateFileNameAndPreview('editCompanyLogoFile','editCompanyLogoName','editCompanyLogoPreview','editCompanyLogoRemove')">
                                                </div>

                                                <div class="d-inline-block position-relative mt-2">
                                                    <img id="editCompanyLogoPreview"
                                                        style="width:100px;height:100px;border-radius:50%;object-fit:cover;">
                                                    <button type="button" id="editCompanyLogoRemove"
                                                        onclick="removeFileWithPreview('editCompanyLogoFile','editCompanyLogoName','editCompanyLogoPreview','editCompanyLogoRemove')"
                                                        style="position:absolute;top:-10px;right:-10px;border:none;background:none;font-size:20px;color:#fe6a49;cursor:pointer;">
                                                        &times;
                                                    </button>
                                                </div>
                                            </div>

                                            <input type="hidden" name="logo_id" id="editCompanyLogoId">

                                            <div class="text-end">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                                    Cancel
                                                </button>
                                                <button type="submit" class="btn btn-primary ms-2">
                                                    Update Logo
                                                </button>
                                            </div>

                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends -->




</div>

<script>
    function updateFileNameAndPreview(input, nameInputId, previewId, removeBtnId) {
        const fileNameInput = document.getElementById(nameInputId);
        const preview = document.getElementById(previewId);
        const removeBtn = document.getElementById(removeBtnId);

        if (input.files && input.files[0]) {
            fileNameInput.value = input.files[0].name;
            const reader = new FileReader();
            reader.onload = function(e) {
                preview.src = e.target.result;
                preview.style.display = 'block';
                removeBtn.style.display = 'block';
            };
            reader.readAsDataURL(input.files[0]);
        }
    }

    function removeFileWithPreview(fileInputId, nameInputId, previewId, removeBtnId) {
        document.getElementById(fileInputId).value = '';
        document.getElementById(nameInputId).value = '';
        const preview = document.getElementById(previewId);
        preview.src = '';
        preview.style.display = 'none';
        document.getElementById(removeBtnId).style.display = 'none';
    }

    // Edit testimonial populate modal
    document.addEventListener('DOMContentLoaded', function() {
        document.querySelectorAll('.editTestimonialBtn').forEach(function(btn) {
            btn.addEventListener('click', function() {
                document.getElementById('editTestimonialId').value = this.dataset.id;
                document.getElementById('editProfileName').value = this.dataset.name;
                document.getElementById('editCompanyName').value = this.dataset.company;
                document.getElementById('editProjectName').value = this.dataset.project;
                document.getElementById('editClientReview').value = this.dataset.review;

                document.getElementById('editTestimonialPhotoName').value = this.dataset.photoName;
                const preview = document.getElementById('editTestimonialPhotoPreview');
                preview.src = this.dataset.photo;
                preview.style.display = 'block';
                document.getElementById('editTestimonialPhotoRemove').style.display = 'block';
            });
        });
    });
</script>

<script>
    function updateFileNameAndPreview(fileInputId, nameInputId, previewId, removeBtnId) {
        const fileInput = document.getElementById(fileInputId);
        const fileNameInput = document.getElementById(nameInputId);
        const preview = document.getElementById(previewId);
        const removeBtn = document.getElementById(removeBtnId);

        if (fileInput.files && fileInput.files[0]) {
            fileNameInput.value = fileInput.files[0].name;
            const reader = new FileReader();
            reader.onload = e => {
                preview.src = e.target.result;
                preview.style.display = 'block';
                removeBtn.style.display = 'block';
            };
            reader.readAsDataURL(fileInput.files[0]);
        }
    }

    function removeFileWithPreview(fileInputId, nameInputId, previewId, removeBtnId) {
        document.getElementById(fileInputId).value = '';
        document.getElementById(nameInputId).value = '';
        const preview = document.getElementById(previewId);
        preview.src = '';
        preview.style.display = 'none';
        document.getElementById(removeBtnId).style.display = 'none';
    }

    // Populate Edit Modal
    document.addEventListener('DOMContentLoaded', function() {
        document.querySelectorAll('.editCompanyLogoBtn').forEach(function(btn) {
            btn.addEventListener('click', function() {
                document.getElementById('editCompanyLogoId').value = this.dataset.id;
                document.getElementById('editCompanyLogoPreview').src = this.dataset.logo;
                document.getElementById('editCompanyLogoName').value = this.dataset.logoName;
                document.getElementById('editCompanyLogoPreview').style.display = 'block';
                document.getElementById('editCompanyLogoRemove').style.display = 'block';
            });
        });
    });
</script>

</div>