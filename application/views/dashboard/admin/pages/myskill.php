



<!-- Page Sidebar Ends-->
<div class="page-body">
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-6">
                    <h4>Skills</h4>
                </div>
                <div class="col-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo base_url('admin_playground') ?>">
                                <svg class="stroke-icon">
                                    <use href="modules/assets2/svg/icon-sprite.svg#stroke-home"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Dashboard</li>
                        <li class="breadcrumb-item active"><a href="<?= base_url('skill'); ?>">Skills</a></li>
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

                        <!-- CARD BODY -->
                        <div class="card-body">

                            <!-- ADD BUTTON -->
                            <button class="btn btn-primary" type="button" data-bs-toggle="modal"
                                data-bs-target="#addCompanyLogoModal">
                                Add New Skill
                            </button>

                            <!-- ADD MODAL -->
                            <div class="modal fade" id="addCompanyLogoModal" tabindex="-1" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-xl">
                                    <div class="modal-content">

                                        <div class="modal-header">
                                            <h4 class="modal-title">Add New Skill</h4>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                        </div>

                                        <div class="modal-body">
                                            <form method="post" enctype="multipart/form-data">

                                                <div class="row">

                                                    <!-- SKILL LOGO -->
                                                    <div class="col-md-6 mb-3">
                                                        <label class="form-label">Skill Logo</label>
                                                        <input type="file" class="form-control" name="skill_logo"
                                                            accept="image/*" onchange="previewSkillImage(this)"
                                                            required>

                                                        <div class="mt-2">
                                                            <img id="skillImagePreview"
                                                                src="https://via.placeholder.com/100"
                                                                style="width:100px;height:100px;border-radius:50%;object-fit:cover;">
                                                        </div>
                                                    </div>

                                                    <!-- SKILL TITLE -->
                                                    <div class="col-md-6 mb-3">
                                                        <label class="form-label">Skill Title</label>
                                                        <input type="text" class="form-control" name="skill_title"
                                                            placeholder="Ex: HTML / CSS / PHP" required>
                                                    </div>

                                                    <!-- SKILL PROGRESS -->
                                                    <div class="col-md-6 mb-3">
                                                        <label class="form-label">Skill Progress (%)</label>
                                                        <input type="text" class="form-control" name="skill_progress"
                                                            placeholder="0 - 100" min="0" max="100" required>
                                                    </div>

                                                </div>

                                                <!-- FOOTER BUTTONS -->
                                                <div class="text-end">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">
                                                        Cancel
                                                    </button>
                                                    <button type="submit" class="btn btn-primary ms-2">
                                                        Save Skill
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
                                        <th>Skill Logo</th>
                                        <th>Skill Name</th>
                                        <th>Skill Progress (%)</th>
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
                                        <td>HTML</td>
                                        <td>85%</td>
                                        <td class="text-end">
                                            <a class="btn btn-primary btn-sm me-2" data-bs-toggle="modal"
                                                data-bs-target="#editCompanyLogoModal">
                                                <i class="fa fa-pencil"></i> Edit
                                            </a>

                                            <a class="btn btn-secondary btn-sm">
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

                                            <div class="row">

                                                <!-- LOGO -->
                                                <div class="col-md-6 mb-3">
                                                    <label class="form-label">Company / Skill Logo</label>
                                                    <input type="file" class="form-control" name="skill_logo"
                                                        accept="image/*" onchange="previewEditSkillImage(this)">

                                                    <div class="mt-2">
                                                        <img id="editSkillImagePreview"
                                                            src="modules/assets/images/user1.jpg"
                                                            style="width:100px;height:100px;border-radius:50%;object-fit:cover;">
                                                    </div>
                                                </div>

                                                <!-- SKILL TITLE -->
                                                <div class="col-md-6 mb-3">
                                                    <label class="form-label">Skill Title</label>
                                                    <input type="text" class="form-control" name="skill_title"
                                                        value="HTML" required>
                                                </div>

                                                <!-- SKILL PROGRESS -->
                                                <div class="col-md-6 mb-3">
                                                    <label class="form-label">Skill Progress (%)</label>
                                                    <input type="number" class="form-control" name="skill_progress"
                                                        value="85" min="0" max="100" required>
                                                </div>

                                            </div>

                                            <!-- hidden id (edit ke liye important) -->
                                            <input type="hidden" name="logo_id" value="1">

                                            <!-- FOOTER -->
                                            <div class="text-end">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                                    Cancel
                                                </button>
                                                <button type="submit" class="btn btn-primary ms-2">
                                                    Update Skill
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


<script>
    function previewSkillImage(input) {
        if (input.files && input.files[0]) {
            const reader = new FileReader();
            reader.onload = function (e) {
                document.getElementById('skillImagePreview').src = e.target.result;
            };
            reader.readAsDataURL(input.files[0]);
        }
    }


    function previewEditSkillImage(input) {
        if (input.files && input.files[0]) {
            const reader = new FileReader();
            reader.onload = function (e) {
                document.getElementById('editSkillImagePreview').src = e.target.result;
            };
            reader.readAsDataURL(input.files[0]);
        }
    }
</script>




<!-- Container-fluid Ends-->



