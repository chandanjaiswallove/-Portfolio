<!-- Dashboard  section Header  -->
<?php
$this->load->view('dashboard/admin/layouts/dashHeader');
?>




<!-- Page Sidebar Ends-->
<div class="page-body">
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-6">
                    <h4>Portfolio </h4>
                </div>
                <div class="col-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo base_url('admin_playground') ?>">
                                <svg class="stroke-icon">
                                    <use href="modules/assets2/svg/icon-sprite.svg#stroke-home"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Dashboard</li>
                        <li class="breadcrumb-item active">Portfolio</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>





    <!-- Container-fluid starts-->
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="edit-profile">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">

                        <div class="card-body">

                            <!-- Button -->
                            <button class="btn btn-primary" type="button" data-bs-toggle="modal"
                                data-bs-target="#exampleModalCenter1">
                                Add New Testimonials
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModalCenter1" tabindex="-1" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-xl">
                                    <div class="modal-content">

                                        <!-- Modal Header -->
                                        <div class="modal-header">
                                            <h4 class="modal-title">Add New Testimonial</h4>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                        </div>

                                        <!-- Modal Body -->
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
                                                    <div class="col-md-6 mb-3">
                                                        <label class="form-label">Profile Photo</label>
                                                        <input type="file" class="form-control" name="profile_photo"
                                                            accept="image/*" onchange="previewImage(this)" required>

                                                        <!-- Image Preview -->
                                                        <div class="mt-2">
                                                            <img id="imagePreview" src="https://via.placeholder.com/100"
                                                                style="width:100px;height:100px;border-radius:50%;object-fit:cover;">
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
                                    <tr>
                                        <td>1</td>
                                        <td>12 Jan 2022</td>
                                        <td>John Doe</td>
                                        <td>
                                            <img src="modules/assets/images/user1.jpg" alt="Profile"
                                                style="width:40px;height:40px;border-radius:50%;object-fit:cover;">
                                        </td>
                                        <td>Google Inc.</td>
                                        <td>
                                            Excellent service and very professional work delivery.
                                        </td>
                                        <td>Corporate Website</td>
                                        <td class="text-end">
                                            <a class="btn btn-primary btn-sm me-2" href="javascript:void(0)"
                                                data-bs-toggle="modal" data-bs-target="#exampleModalCenter2">
                                                <i class="fa fa-pencil"></i> Edit
                                            </a>

                                            <a class="btn btn-danger btn-sm" href="javascript:void(0)">
                                                <i class="fa fa-trash"></i> Delete
                                            </a>
                                        </td>
                                    </tr>

                                </tbody>
                            </table>




                            <!-- ✅ MODAL YAHAN RAKHO (table ke baad) -->
                            <div class="modal fade" id="exampleModalCenter2" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalCenter2" aria-hidden="true">>
                                <div class="modal-dialog modal-dialog-centered modal-xl">
                                    <div class="modal-content">

                                        <!-- MODAL HEADER -->
                                        <div class="modal-header">
                                            <h4 class="modal-title">Edit Testimonials</h4>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                        </div>

                                        <!-- MODAL BODY -->
                                        <div class="modal-body">
                                            <div class="modal-toggle-wrapper">

                                                <!-- EDIT TESTIMONIAL FORM -->
                                                <form method="post" action="" enctype="multipart/form-data">

                                                    <!-- Profile Name -->
                                                    <div class="mb-3">
                                                        <label class="form-label">Profile Name</label>
                                                        <input type="text" class="form-control" name="profile_name"
                                                            value="John Doe" required>
                                                    </div>

                                                    <!-- Company Name -->
                                                    <div class="mb-3">
                                                        <label class="form-label">Company Name</label>
                                                        <input type="text" class="form-control" name="company_name"
                                                            value="Google Inc." required>
                                                    </div>

                                                    <!-- Client Project Name -->
                                                    <div class="mb-3">
                                                        <label class="form-label">Client Project Name</label>
                                                        <input type="text" class="form-control"
                                                            name="client_project_name" value="Corporate Website"
                                                            required>
                                                    </div>

                                                    <!-- Client Review -->
                                                    <div class="mb-3">
                                                        <label class="form-label">Client Review</label>
                                                        <textarea class="form-control" rows="4" name="client_review"
                                                            style="resize:none;"
                                                            required>Excellent service and very professional work delivery.</textarea>
                                                    </div>

                                                    <!-- Profile Photo -->
                                                    <div class="mb-3">
                                                        <label class="form-label">Profile Photo</label>
                                                        <input type="file" class="form-control" name="profile_photo"
                                                            accept="image/*" onchange="previewEditImage(this)">

                                                        <!-- Old / Preview Image -->
                                                        <div class="mt-2">
                                                            <img id="editImagePreview"
                                                                src="modules/assets/images/user1.jpg"
                                                                style="width:100px;height:100px;border-radius:50%;object-fit:cover;">
                                                        </div>
                                                    </div>

                                                    <!-- Hidden ID (important for update) -->
                                                    <input type="hidden" name="testimonial_id" value="1">

                                                    <!-- Buttons -->
                                                    <div class="text-end">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal">
                                                            Cancel
                                                        </button>
                                                        <button type="submit" class="btn btn-primary ms-2">
                                                            Update Testimonials
                                                        </button>
                                                    </div>

                                                </form>
                                                <!-- FORM END -->

                                            </div>
                                        </div>

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
    <!-- Container-fluid starts-->




    <!-- Container-fluid starts-->
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

                                                <div class="mb-3 col-md-6">
                                                    <label class="form-label">Company Logo</label>
                                                    <input type="file" class="form-control" accept="image/*"
                                                        onchange="previewImage(this)" required>

                                                    <div class="mt-2">
                                                        <img id="imagePreviewTwo" src="https://via.placeholder.com/100"
                                                            style="width:100px;height:100px;border-radius:50%;object-fit:cover;">
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
                                    <tr>
                                        <td>1</td>
                                        <td>12 Jan 2024</td>
                                        <td>
                                            <img src="modules/assets/images/user1.jpg"
                                                style="width:40px;height:40px;border-radius:50%;object-fit:cover;">
                                        </td>
                                        <td class="text-end">
                                            <a class="btn btn-primary btn-sm me-2" data-bs-toggle="modal"
                                                data-bs-target="#editCompanyLogoModal">
                                                <i class="fa fa-pencil"></i> Edit
                                            </a>

                                            <a class="btn btn-danger btn-sm">
                                                <i class="fa fa-trash"></i> Delete
                                            </a>
                                        </td>
                                    </tr>
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

                                            <div class="mb-3 col-md-6">
                                                <label class="form-label">Company Logo</label>
                                                <input type="file" class="form-control" accept="image/*"
                                                    onchange="previewEditImage(this)">

                                                <div class="mt-2">
                                                    <img id="editImagePreviewTwo" src="modules/assets/images/user1.jpg"
                                                        style="width:100px;height:100px;border-radius:50%;object-fit:cover;">
                                                </div>
                                            </div>

                                            <input type="hidden" name="logo_id" value="1">

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














</div>



<!-- Container-fluid Ends-->
<!-- Container-fluid Ends-->



<script>
    function previewImage(input) {
        if (input.files && input.files[0]) {
            const reader = new FileReader();
            reader.onload = function (e) {
                document.getElementById('imagePreview').src = e.target.result;
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
</script>

<script>
    function previewEditImage(input) {
        if (input.files && input.files[0]) {
            const reader = new FileReader();
            reader.onload = function (e) {
                document.getElementById('editImagePreview').src = e.target.result;
            };
            reader.readAsDataURL(input.files[0]);
        }
    }
</script>



<!-- Container-fluid Ends-->
<script>
    function previewImage(input) {
        if (input.files && input.files[0]) {
            const reader = new FileReader();
            reader.onload = e => document.getElementById('imagePreviewTwo').src = e.target.result;
            reader.readAsDataURL(input.files[0]);
        }
    }

    function previewEditImage(input) {
        if (input.files && input.files[0]) {
            const reader = new FileReader();
            reader.onload = e => document.getElementById('editImagePreviewTwo').src = e.target.result;
            reader.readAsDataURL(input.files[0]);
        }
    }
</script>

<!-- Container-fluid Ends-->









<!-- Footer section Dashboard  -->
<?php
$this->load->view('dashboard/admin/layouts/dashFooter');
?>