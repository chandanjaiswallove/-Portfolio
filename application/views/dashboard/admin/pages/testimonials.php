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
                        <li class="breadcrumb-item active"><a href="<?= base_url('testimonials'); ?>">Testimonials</a>
                        </li>
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

                                            <form method="POST" action="<?php echo base_url('insertTestimonial') ?>"
                                                enctype="multipart/form-data">
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



                                                    <!-- Profile Photo (Insert Form) -->
                                                    <div class="col-md-6 mb-3 position-relative">
                                                        <label class="form-label">Profile Photo</label>

                                                        <div class="input-group mb-2">
                                                            <!-- File name display -->
                                                            <input type="text" id="insertTestimonialPhotoName"
                                                                class="form-control" placeholder="No file chosen"
                                                                readonly>

                                                            <!-- Browse button -->
                                                            <button class="btn btn-primary rounded-end" type="button"
                                                                onclick="document.getElementById('insertTestimonialPhoto').click();">
                                                                Browse
                                                            </button>

                                                            <!-- Hidden file input -->
                                                            <input type="file" class="d-none"
                                                                id="insertTestimonialPhoto" name="profile_photo"
                                                                accept="image/*"
                                                                onchange="updateFileNameAndPreview('insertTestimonialPhoto','insertTestimonialPhotoName','insertTestimonialPhotoPreview','insertTestimonialPhotoRemove')">
                                                        </div>

                                                        <!-- Preview + Remove -->
                                                        <div class="d-inline-block position-relative">
                                                            <img id="insertTestimonialPhotoPreview"
                                                                style="width:100px;height:100px;border-radius:50%;object-fit:cover;display:none;">
                                                            <button type="button" id="insertTestimonialPhotoRemove"
                                                                onclick="removeFileWithPreview('insertTestimonialPhoto','insertTestimonialPhotoName','insertTestimonialPhotoPreview','insertTestimonialPhotoRemove')"
                                                                style="position:absolute;top:-10px;right:-10px;border:none;background:none;font-size:20px;color:#fe6a49;cursor:pointer;display:none;">
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
                                                <td><?= date('d M Y', strtotime($row->updated_at)) ?></td>
                                                <td><?= $row->profile_name ?></td>
                                                <td>
                                                    <img src="<?= base_url($row->profile_photo) ?>"
                                                        style="width:40px;height:40px;border-radius:50%;object-fit:cover;">
                                                </td>
                                                <td><?= $row->company_name ?></td>
                                                <td><?= $row->client_review ?></td>
                                                <td><?= $row->client_project_name ?></td>
                                                <td class="text-end">



                                                    <button class="btn btn-primary btn-sm me-2" type="button"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#editTestimonialModal_<?= $row->id; ?>">
                                                        <i class="fa fa-pencil"></i> Edit
                                                    </button>


                                                    <!-- /// Delte button and delete modal and delete function -->
                                                    <button class="btn btn-secondary btn-sm me-2" type="button"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#tableTestimonialModal<?= $row->id; ?>">
                                                        <i class="fa fa-trash "></i> Delete
                                                    </button>

                                                    <div class="modal fade" id="tableTestimonialModal<?= $row->id; ?>"
                                                        tabindex="1" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered">
                                                            <div class="modal-content bg-dark">
                                                                <div class="modal-header border-0">
                                                                    <h5 class="modal-title text-white">Delete <?= $row->id; ?>
                                                                    </h5>
                                                                    <button class="btn-close" type="button"
                                                                        data-bs-dismiss="modal"></button>
                                                                </div>

                                                                <div class="modal-body text-center border-0">
                                                                    <p>Are you sure you want to delete this row? <br> This
                                                                        action
                                                                        cannot be undone.</p>
                                                                </div>

                                                                <div class="modal-footer border-0 justify-content-center ">
                                                                    <button class="btn btn-secondary"
                                                                        data-bs-dismiss="modal">Cancel</button>

                                                                    <a href="<?= base_url('removeTestimonial?id=' . $row->id); ?>"
                                                                        class="btn btn-primary">
                                                                        Yes, Delete
                                                                    </a>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>





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


                        <!-- EDIT MODAL testimonal 1-->
                        <div class="modal fade" id="editTestimonialModal_<?= $row->id; ?>" tabindex="-1"
                            aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-xl">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Edit Testimonial</h4>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                    </div>

                                    <div class="modal-body">

                                        <form method="POST" action="<?php echo base_url('updateTestimonial'); ?>"
                                            enctype="multipart/form-data">
                                            <div class="row">
                                                <input type="hidden" name="testimonial_id" value="<?= $row->id; ?>">


                                                <!-- Profile Name -->
                                                <div class="col-md-6 mb-3">
                                                    <label class="form-label">Profile Name</label>
                                                    <input type="text" class="form-control" name="profile_name"
                                                        id="editProfileName" value="<?php echo $row->profile_name; ?>"
                                                        required>
                                                </div>

                                                <!-- Company Name -->
                                                <div class="col-md-6 mb-3">
                                                    <label class="form-label">Company Name</label>
                                                    <input type="text" class="form-control" name="company_name"
                                                        id="editCompanyName" value="<?php echo $row->company_name; ?>"
                                                        required>
                                                </div>

                                                <!-- Project Name -->
                                                <div class="col-md-6 mb-3">
                                                    <label class="form-label">Client Project Name</label>
                                                    <input type="text" class="form-control" name="client_project_name"
                                                        id="editProjectName"
                                                        value="<?php echo $row->client_project_name; ?>" required>
                                                </div>

                                                <!-- Profile Photo -->
                                                <div class="col-md-6 mb-3">
                                                    <label class="form-label">Profile Photo</label>

                                                    <!-- Fake input + Browse button -->
                                                    <div class="input-group mb-2">

                                                        <!-- Sirf file ka naam dikhane ke liye -->
                                                        <input type="text" id="editProfilePhotoName"
                                                            class="form-control" placeholder="No file chosen" readonly>

                                                        <!-- Browse button -->
                                                        <button class="btn btn-primary rounded-end" type="button"
                                                            onclick="document.getElementById('editProfilePhotoFile').click();">
                                                            Browse
                                                        </button>

                                                        <!-- Actual file input (hidden) -->
                                                        <input type="file" class="d-none" id="editProfilePhotoFile"
                                                            name="profile_photo" accept="image/*" onchange="
            updateFileNameAndPreview(
                'editProfilePhotoFile',
                'editProfilePhotoName',
                'editProfilePhotoPreview',
                'editProfilePhotoRemove'
            )
        ">
                                                    </div>

                                                    <!-- Image Preview + Remove Button -->
                                                    <div class="d-inline-block position-relative mt-2">

                                                        <!-- Profile photo preview -->
                                                        <img id="editProfilePhotoPreview"
                                                            src="<?php echo base_url('') . $row->profile_photo; ?>"
                                                            style="width:100px;height:100px;border-radius:50%;object-fit:cover;display:block;">

                                                        <!-- Remove (×) button -->
                                                        <button type="button" id="editProfilePhotoRemove" onclick="
            removeFileWithPreview(
                'editProfilePhotoFile',
                'editProfilePhotoName',
                'editProfilePhotoPreview',
                'editProfilePhotoRemove'
            )
        " style="display:none;
                position:absolute;
                top:-10px;
                right:-10px;
                border:none;
                background:none;
                font-size:20px;
                color:#fe6a49;
                cursor:pointer;">
                                                            &times;
                                                        </button>
                                                    </div>
                                                </div>

                                                <!-- Review -->
                                                <div class="col-md-12 mb-3">
                                                    <label class="form-label">Client Review</label>
                                                    <textarea class="form-control" rows="4" name="client_review"
                                                        id="editClientReview" style="resize:none;"
                                                        required><?php echo $row->client_review; ?></textarea>
                                                </div>

                                            </div>

                                            <!-- Buttons -->
                                            <div class="text-end">

                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                                    Cancel
                                                </button>

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

                                            <form method="POST" action="<?php echo base_url('insertCompanyLogo'); ?>"
                                                enctype="multipart/form-data">
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
                                                        data-bs-toggle="modal" data-bs-target="#editCompanyLogoModal"
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

                                        <form method="POST" action="<?php echo base_url('updateCompanyLogo'); ?>"
                                            enctype="multipart/form-data">

                                            <!-- Company Logo Section -->
                                            <div class="mb-3 col-md-12 position-relative">
                                                <label class="form-label">Company Logo</label>

                                                <!-- Fake input + Browse button -->
                                                <div class="input-group mb-2">

                                                    <!-- Sirf file ka naam dikhane ke liye -->
                                                    <input type="text" id="editCompanyLogoName" class="form-control"
                                                        placeholder="No file chosen" readonly>

                                                    <!-- Browse button jo hidden file input ko click karta hai -->
                                                    <button class="btn btn-primary rounded-end" type="button"
                                                        onclick="document.getElementById('editCompanyLogoFile').click();">
                                                        Browse
                                                    </button>

                                                    <!-- Actual file input (hidden) -->
                                                    <input type="file" class="d-none" id="editCompanyLogoFile"
                                                        name="company_logo" accept="image/*" onchange="
                     updateFileNameAndPreview(
                       'editCompanyLogoFile',
                       'editCompanyLogoName',
                       'editCompanyLogoPreview',
                       'editCompanyLogoRemove'
                     )
                   ">
                                                </div>

                                                <!-- Image Preview + Remove Button -->
                                                <div class="d-inline-block position-relative mt-2">

                                                    <!-- Logo preview -->
                                                    <img id="editCompanyLogoPreview"
                                                        style="width:100px;height:100px;border-radius:50%;object-fit:cover;display:none;">

                                                    <!-- Remove (×) button -->
                                                    <button type="button" id="editCompanyLogoRemove" onclick="
                      removeFileWithPreview(
                        'editCompanyLogoFile',
                        'editCompanyLogoName',
                        'editCompanyLogoPreview',
                        'editCompanyLogoRemove'
                      )
                    " style="display:none;
                           position:absolute;
                           top:-10px;
                           right:-10px;
                           border:none;
                           background:none;
                           font-size:20px;
                           color:#fe6a49;
                           cursor:pointer;">
                                                        &times;
                                                    </button>
                                                </div>
                                            </div>

                                            <!-- 🔴 Logo ka database ID (update ke liye) -->
                                            <input type="hidden" name="logo_id" id="editCompanyLogoId">

                                            <!-- 🔴 IMPORTANT FLAG
         0 = kuch remove nahi
         1 = old image delete karni hai -->
                                            <input type="hidden" name="remove_logo" id="editRemoveLogo" value="0">

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











<!-- company logo edit  -->
<script>
    /* ===============================
       New image select
    ================================ */
    function updateFileNameAndPreview(fileInputId, nameInputId, previewId, removeBtnId) {

        // 🔴 New image select = remove cancel
        document.getElementById('editRemoveLogo').value = 0;

        const fileInput = document.getElementById(fileInputId);
        const fileNameInput = document.getElementById(nameInputId);
        const preview = document.getElementById(previewId);
        const removeBtn = document.getElementById(removeBtnId);

        if (fileInput.files && fileInput.files[0]) {
            fileNameInput.value = fileInput.files[0].name;

            const reader = new FileReader();
            reader.onload = function (e) {
                preview.src = e.target.result;
                preview.style.display = 'block';
                removeBtn.style.display = 'block';
            };
            reader.readAsDataURL(fileInput.files[0]);
        }
    }


    /* ===============================
       Remove image (❌ click)
    ================================ */
    function removeFileWithPreview(fileInputId, nameInputId, previewId, removeBtnId) {

        document.getElementById(fileInputId).value = '';
        document.getElementById(nameInputId).value = '';

        const preview = document.getElementById(previewId);
        preview.src = '';
        preview.style.display = 'none';

        document.getElementById(removeBtnId).style.display = 'none';

        // 🔴 Backend ko batao: image remove karni hai
        document.getElementById('editRemoveLogo').value = 1;
    }


    /* ===============================
       Populate Edit Modal
    ================================ */
    document.addEventListener('DOMContentLoaded', function () {

        document.querySelectorAll('.editCompanyLogoBtn').forEach(function (btn) {

            btn.addEventListener('click', function () {

                // ID set
                document.getElementById('editCompanyLogoId').value = this.dataset.id;

                // File name show
                document.getElementById('editCompanyLogoName').value = this.dataset.logoName;

                // Preview image
                const preview = document.getElementById('editCompanyLogoPreview');
                preview.src = this.dataset.logo;
                preview.style.display = 'block';

                // Remove button show
                document.getElementById('editCompanyLogoRemove').style.display = 'block';

                // 🔴 Modal open hote hi reset remove flag
                document.getElementById('editRemoveLogo').value = 0;
            });

        });

    });
</script>




</div>