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
                                                        data-bs-toggle="modal" data-bs-target="#editTestimonialModal"
                                                        data-id="<?= $row->id ?>"
                                                        data-name="<?= htmlspecialchars($row->profile_name, ENT_QUOTES) ?>"
                                                        data-company="<?= htmlspecialchars($row->company_name, ENT_QUOTES) ?>"
                                                        data-project="<?= htmlspecialchars($row->client_project_name, ENT_QUOTES) ?>"
                                                        data-review="<?= htmlspecialchars($row->client_review, ENT_QUOTES) ?>"
                                                        data-photo="<?= !empty($row->profile_photo) ? base_url($row->profile_photo) : '' ?>"
                                                        data-photo-name="<?= !empty($row->profile_photo) ? basename($row->profile_photo) : '' ?>">
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

                        <!-- EDIT MODAL testimonal 1-->
                        <div class="modal fade" id="editTestimonialModal" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-xl">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Edit Testimonial</h4>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                    </div>

                                    <div class="modal-body">


                                        <form method="POST" action="<?php echo base_url('updateTestimonial') ?>"
                                            enctype="multipart/form-data">

                                            <!-- REQUIRED -->
                                            <input type="hidden" name="testimonial_id" id="editTestimonialId">
                                            <input type="hidden" name="remove_image" id="editRemoveImage" value="0">


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

                                                <!-- Profile Photo (Edit Form) -->
                                                <div class="col-md-6 mb-3 position-relative">
                                                    <label class="form-label">Profile Photo</label>

                                                    <div class="input-group mb-2">
                                                        <!-- File name display -->
                                                        <input type="text" id="editTestimonialPhotoName"
                                                            class="form-control" placeholder="No file chosen" readonly>

                                                        <!-- Browse button -->
                                                        <button class="btn btn-primary rounded-end" type="button"
                                                            onclick="document.getElementById('editTestimonialPhoto').click();">
                                                            Browse
                                                        </button>

                                                        <!-- Hidden file input -->
                                                        <input type="file" class="d-none" id="editTestimonialPhoto"
                                                            name="profile_photo" accept="image/*"
                                                            onchange="updateFileNameAndPreview('editTestimonialPhoto','editTestimonialPhotoName','editTestimonialPhotoPreview','editTestimonialPhotoRemove')">
                                                    </div>

                                                    <!-- Preview + Remove -->
                                                    <div class="d-inline-block position-relative">
                                                        <img id="editTestimonialPhotoPreview"
                                                            style="width:100px;height:100px;border-radius:50%;object-fit:cover;display:none;">
<button type="button" id="editTestimonialPhotoRemove" onclick="removeFileWithPreview(
  'editTestimonialPhoto',
  'editTestimonialPhotoName',
  'editTestimonialPhotoPreview',
  'editTestimonialPhotoRemove',
  'editRemoveImage'
)">
    &times;
</button>
<!-- 🔥 add this comment outside the onclick -->




                                                    </div>
                                                </div>

                                            </div>


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

                                            <form method="POST" action="<?php echo base_url('insertCompanyLogo'); ?>" enctype="multipart/form-data">
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








<!-- <script>
    /* ===============================
       GLOBAL IMAGE HANDLER
       Works for any form with unique IDs
    ================================ */

    function updateFileNameAndPreview(fileInputId, nameInputId, previewId, removeBtnId) {
        const fileInput = document.getElementById(fileInputId);
        const nameInput = document.getElementById(nameInputId);
        const preview = document.getElementById(previewId);
        const removeBtn = document.getElementById(removeBtnId);

        if (fileInput?.files?.[0]) {
            nameInput.value = fileInput.files[0].name;

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

    /* ===============================
       POPULATE EDIT FORM FROM DATABASE
       Example: Edit Testimonial Modal
    ================================ */
    document.addEventListener('DOMContentLoaded', function () {
        document.querySelectorAll('.editTestimonialBtn').forEach(function (btn) {
            btn.addEventListener('click', function () {
                const id = this.dataset.id;
                const name = this.dataset.name;
                const photo = this.dataset.photo;

                // Set hidden ID
                document.getElementById('editTestimonialId').value = id;

                // Populate Edit Form fields
                document.getElementById('editTestimonialPhotoName').value = photo ? photo.split('/').pop() : '';
                const preview = document.getElementById('editTestimonialPhotoPreview');
                preview.src = photo || '';
                preview.style.display = photo ? 'block' : 'none';
                document.getElementById('editTestimonialPhotoRemove').style.display = photo ? 'block' : 'none';
            });
        });
    });
</script> -->

<script>
    /* ===============================
       GLOBAL IMAGE HANDLER
       Ye functions INSERT + EDIT dono forms me kaam karte hain
    =============================== */

    /*
      Jab user file select karta hai:
      - file ka naam text box me dikhata hai
      - image ka preview show karta hai
    */
    function updateFileNameAndPreview(fileInputId, nameInputId, previewId, removeBtnId) {

        // File input element (hidden file input)
        const fileInput = document.getElementById(fileInputId);

        // Text input jisme file ka naam dikhate hain
        const nameInput = document.getElementById(nameInputId);

        // Image preview element
        const preview = document.getElementById(previewId);

        // Remove (×) button
        const removeBtn = document.getElementById(removeBtnId);

        // Agar file select hui hai
        if (fileInput?.files?.[0]) {

            // File ka naam text input me set
            nameInput.value = fileInput.files[0].name;

            // FileReader image ko read karta hai
            const reader = new FileReader();

            reader.onload = e => {
                // Image preview show
                preview.src = e.target.result;
                preview.style.display = 'block';
                removeBtn.style.display = 'block';
            };

            // Image read start
            reader.readAsDataURL(fileInput.files[0]);
        }
    }

    /*
      Jab user remove (×) pe click kare:
      - file clear ho jaye
      - preview hide ho jaye
    */
    function removeFileWithPreview(fileInputId, nameInputId, previewId, removeBtnId, removeInputId) {

        // clear file input
        document.getElementById(fileInputId).value = '';

        // clear filename
        document.getElementById(nameInputId).value = '';

        // hide preview
        const preview = document.getElementById(previewId);
        preview.src = '';
        preview.style.display = 'none';

        // hide remove button
        document.getElementById(removeBtnId).style.display = 'none';

        // 🔥 tell backend to delete image
        if (removeInputId) {
            document.getElementById(removeInputId).value = '1';
        }
    }







    /* ===============================
       EDIT MODAL DATA PREFILL LOGIC
       Ye part EDIT button click pe kaam karta hai
    =============================== */

    document.addEventListener('DOMContentLoaded', function () {

        // Sare Edit buttons select karo
        document.querySelectorAll('.editTestimonialBtn').forEach(function (btn) {

            // Jab Edit button click ho
            btn.addEventListener('click', function () {

                /* ===============================
                   STEP 1: Button se data uthao
                   (HTML ke data-* attributes se)
                ================================ */

                const id = this.dataset.id;
                const name = this.dataset.name;
                const company = this.dataset.company;
                const project = this.dataset.project;
                const review = this.dataset.review;
                const photo = this.dataset.photo;

                /* ===============================
                   STEP 2: Hidden ID set karo
                   (Update ke time kaam aayega)
                ================================ */

                document.getElementById('editTestimonialId').value = id;

                /* ===============================
                   STEP 3: Text fields fill karo
                ================================ */

                document.getElementById('editProfileName').value = name;
                document.getElementById('editCompanyName').value = company;
                document.getElementById('editProjectName').value = project;
                document.getElementById('editClientReview').value = review;

                /* ===============================
                   STEP 4: Image preview set karo
                ================================ */

                const preview = document.getElementById('editTestimonialPhotoPreview');
                const removeBtn = document.getElementById('editTestimonialPhotoRemove');
                const photoName = document.getElementById('editTestimonialPhotoName');

                if (photo) {
                    // Agar pehle se image hai
                    preview.src = photo;
                    preview.style.display = 'block';
                    removeBtn.style.display = 'block';

                    // Sirf file name show karo
                    photoName.value = photo.split('/').pop();
                } else {
                    // Agar image nahi hai
                    preview.style.display = 'none';
                    removeBtn.style.display = 'none';
                    photoName.value = '';
                }
            });
        });
    });
</script>





<script>
    /// add company logo edit 

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
    document.addEventListener('DOMContentLoaded', function () {
        document.querySelectorAll('.editCompanyLogoBtn').forEach(function (btn) {
            btn.addEventListener('click', function () {
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