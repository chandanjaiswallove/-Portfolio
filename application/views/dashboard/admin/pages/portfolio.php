



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
                                Add New Portfolio
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModalCenter1" tabindex="-1" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-xl">
                                    <div class="modal-content">

                                        <!-- Header -->
                                        <div class="modal-header">
                                            <h4 class="modal-title">Add New Portfolio</h4>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                        </div>

                                        <!-- Body -->
                                        <div class="modal-body">
                                            <form method="post" enctype="multipart/form-data">

                                                <div class="border rounded p-3">

                                                    <div class="row">

                                                        <!-- IMAGE TYPE -->
                                                        <div class="col-md-12 mb-3">
                                                            <label class="form-label">Project Image Type</label><br>

                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio"
                                                                    name="image_type" value="full"
                                                                    onclick="toggleImage('full')" required>
                                                                <label class="form-check-label">Full Project
                                                                    Image</label>
                                                            </div>

                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio"
                                                                    name="image_type" value="small"
                                                                    onclick="toggleImage('small')">
                                                                <label class="form-check-label">Small Project
                                                                    Image</label>
                                                            </div>
                                                        </div>

                                                        <!-- FULL IMAGE -->
                                                        <div class="col-md-6 mb-3 d-none" id="fullImageBox">
                                                            <label class="form-label">Full Project Image</label>
                                                            <input type="file" class="form-control"
                                                                name="full_project_image" accept="image/*"
                                                                onchange="previewFull(this)">

                                                            <img id="fullPreview"
                                                                src="https://via.placeholder.com/300x180" class="mt-2"
                                                                style="width:100%;max-width:300px;object-fit:cover;">
                                                        </div>

                                                        <!-- SMALL IMAGE -->
                                                        <div class="col-md-6 mb-3 d-none" id="smallImageBox">
                                                            <label class="form-label">Small Project Image</label>
                                                            <input type="file" class="form-control"
                                                                name="small_project_image" accept="image/*"
                                                                onchange="previewSmall(this)">

                                                            <img id="smallPreview"
                                                                src="https://via.placeholder.com/150x150" class="mt-2"
                                                                style="width:150px;height:150px;object-fit:cover;">
                                                        </div>

                                                        <!-- TITLE -->
                                                        <div class="col-md-6 mb-3">
                                                            <label class="form-label">Project Title</label>
                                                            <input type="text" class="form-control" name="project_title"
                                                                required>
                                                        </div>

                                                        <!-- LINK -->
                                                        <div class="col-md-6 mb-3">
                                                            <label class="form-label">Project Link</label>
                                                            <input type="url" class="form-control" name="project_link"
                                                                required>
                                                        </div>

                                                    </div>

                                                    <!-- TAGS -->
                                                    <div class="mb-3">
                                                        <label class="form-label">Project Tags</label>

                                                        <div id="tagWrapper">
                                                            <div class="d-flex mb-2">
                                                                <input type="text" name="project_tags[]"
                                                                    class="form-control me-2"
                                                                    placeholder="Ex: WordPress">
                                                                <button type="button" class="btn btn-danger btn-sm"
                                                                    onclick="removeTag(this)">×</button>
                                                            </div>
                                                        </div>

                                                        <button type="button" class="btn btn-sm btn-success"
                                                            onclick="addTag()">
                                                            + Add Tag
                                                        </button>
                                                    </div>

                                                </div>

                                                <!-- FOOTER -->
                                                <div class="text-end mt-3">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Cancel</button>
                                                    <button type="submit" class="btn btn-primary ms-2">
                                                        Save Portfolio
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
                                        <th>Project Name</th>
                                        <th>Profile Photo</th>
                                        <th>Project Title</th>
                                        <th>Project Tags</th>
                                        <th>Project Links</th>
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
                                            Php
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




                            <!-- ✅ EDIT PORTFOLIO MODAL -->
                            <div class="modal fade" id="exampleModalCenter2" tabindex="-1" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-xl">
                                    <div class="modal-content">

                                        <!-- HEADER -->
                                        <div class="modal-header">
                                            <h4 class="modal-title">Edit Portfolio</h4>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                        </div>

                                        <!-- BODY -->
                                        <div class="modal-body">
                                            <form method="post" enctype="multipart/form-data">

                                                <!-- hidden id -->
                                                <input type="hidden" name="portfolio_id" value="1">

                                                <!-- IMAGE TYPE -->
                                                <div class="mb-3">
                                                    <label class="form-label">Project Image Type</label><br>

                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="image_type"
                                                            value="full" onclick="toggleEditImage('full')" checked>
                                                        <label class="form-check-label">Full Project Image</label>
                                                    </div>

                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="image_type"
                                                            value="small" onclick="toggleEditImage('small')">
                                                        <label class="form-check-label">Small Project Image</label>
                                                    </div>
                                                </div>

                                                <div class="row">

                                                    <!-- FULL IMAGE -->
                                                    <div class="col-md-6 mb-3" id="editFullBox">
                                                        <label class="form-label">Full Project Image</label>
                                                        <input type="file" class="form-control"
                                                            name="full_project_image" accept="image/*"
                                                            onchange="previewEditFull(this)">

                                                        <img id="editFullPreview"
                                                            src="modules/assets/images/portfolio1.jpg" class="mt-2"
                                                            style="width:100%;max-width:300px;object-fit:cover;">
                                                    </div>

                                                    <!-- SMALL IMAGE -->
                                                    <div class="col-md-6 mb-3 d-none" id="editSmallBox">
                                                        <label class="form-label">Small Project Image</label>
                                                        <input type="file" class="form-control"
                                                            name="small_project_image" accept="image/*"
                                                            onchange="previewEditSmall(this)">

                                                        <img id="editSmallPreview"
                                                            src="modules/assets/images/portfolio2.jpg" class="mt-2"
                                                            style="width:150px;height:150px;object-fit:cover;">
                                                    </div>

                                                    <!-- TITLE -->
                                                    <div class="col-md-6 mb-3">
                                                        <label class="form-label">Project Title</label>
                                                        <input type="text" class="form-control" name="project_title"
                                                            value="Bureau - Architecture Studio Website" required>
                                                    </div>

                                                    <!-- LINK -->
                                                    <div class="col-md-6 mb-3">
                                                        <label class="form-label">Project Link</label>
                                                        <input type="url" class="form-control" name="project_link"
                                                            value="https://example.com" required>
                                                    </div>

                                                </div>

                                                <!-- TAGS -->
                                                <div class="mb-3">
                                                    <label class="form-label">Project Tags</label>

                                                    <div id="editTagWrapper">
                                                        <div class="d-flex mb-2">
                                                            <input type="text" name="project_tags[]"
                                                                class="form-control me-2" value="WordPress">
                                                            <button type="button" class="btn btn-danger btn-sm"
                                                                onclick="removeTag(this)">×</button>
                                                        </div>

                                                        <div class="d-flex mb-2">
                                                            <input type="text" name="project_tags[]"
                                                                class="form-control me-2" value="PHP">
                                                            <button type="button" class="btn btn-danger btn-sm"
                                                                onclick="removeTag(this)">×</button>
                                                        </div>
                                                    </div>

                                                    <button type="button" class="btn btn-sm btn-success"
                                                        onclick="addEditTag()">
                                                        + Add Tag
                                                    </button>
                                                </div>

                                                <!-- FOOTER -->
                                                <div class="text-end">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Cancel</button>
                                                    <button type="submit" class="btn btn-primary ms-2">
                                                        Update Portfolio
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

    <!-- Container-fluid starts-->
    <!-- Container-fluid starts-->


















</div>



<!-- Container-fluid Ends-->
<!-- Container-fluid Ends-->


<script>
    function toggleImage(type) {
        document.getElementById('fullImageBox').classList.add('d-none');
        document.getElementById('smallImageBox').classList.add('d-none');

        if (type === 'full') {
            document.getElementById('fullImageBox').classList.remove('d-none');
        } else {
            document.getElementById('smallImageBox').classList.remove('d-none');
        }
    }

    function previewFull(input) {
        let reader = new FileReader();
        reader.onload = e => document.getElementById('fullPreview').src = e.target.result;
        reader.readAsDataURL(input.files[0]);
    }

    function previewSmall(input) {
        let reader = new FileReader();
        reader.onload = e => document.getElementById('smallPreview').src = e.target.result;
        reader.readAsDataURL(input.files[0]);
    }

    function addTag() {
        document.getElementById('tagWrapper').insertAdjacentHTML('beforeend', `
        <div class="d-flex mb-2">
            <input type="text" name="project_tags[]" class="form-control me-2">
            <button type="button" class="btn btn-danger btn-sm" onclick="removeTag(this)">×</button>
        </div>
    `);
    }

    function removeTag(btn) {
        btn.parentElement.remove();
    }
</script>





<script>
    function toggleEditImage(type) {
        document.getElementById('editFullBox').classList.add('d-none');
        document.getElementById('editSmallBox').classList.add('d-none');

        if (type === 'full') {
            document.getElementById('editFullBox').classList.remove('d-none');
        } else {
            document.getElementById('editSmallBox').classList.remove('d-none');
        }
    }

    function previewEditFull(input) {
        const reader = new FileReader();
        reader.onload = e => document.getElementById('editFullPreview').src = e.target.result;
        reader.readAsDataURL(input.files[0]);
    }

    function previewEditSmall(input) {
        const reader = new FileReader();
        reader.onload = e => document.getElementById('editSmallPreview').src = e.target.result;
        reader.readAsDataURL(input.files[0]);
    }

    function addEditTag() {
        document.getElementById('editTagWrapper').insertAdjacentHTML('beforeend', `
        <div class="d-flex mb-2">
            <input type="text" name="project_tags[]" class="form-control me-2">
            <button type="button" class="btn btn-danger btn-sm"
                    onclick="removeTag(this)">×</button>
        </div>
    `);
    }

    function removeTag(btn) {
        btn.parentElement.remove();
    }
</script>




