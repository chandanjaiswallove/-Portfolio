<!-- Page Sidebar Ends-->
<div class="page-body">
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-6">
                    <h4>Introduce </h4>
                </div>
                <div class="col-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo base_url('admin_playground') ?>">
                                <svg class="stroke-icon">
                                    <use href="modules/assets2/svg/icon-sprite.svg#stroke-home"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Dashboard</li>
                        <li class="breadcrumb-item active">Introduce</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>







    <div class="container-fluid">
        <div class="edit-profile">
            <div class="row">

                <div class="col-md-12">
                    <form class="card" action="<?= base_url('') ?>" method="post">
                        <!-- Hidden ID (MOST IMPORTANT) -->
                        <input type="hidden" name="id" value="<?= $intro->id ?? '' ?>">

                        <div class="card-header">
                            <h4 class="card-title mb-0">Edit Introduce</h4>
                            <div class="card-options">
                                <a class="card-options-collapse" href="<?= base_url('introduce') ?>"
                                    data-bs-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a><a
                                    class="card-options-remove" href="<?= base_url('introduce') ?>"
                                    data-bs-toggle="card-remove"><i class="fe fe-x"></i></a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">

                                <!-- LinkedIn -->
                                <div class="col-sm-6 col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Introduce Headings</label>
                                        <input class="form-control" type="text" placeholder="Introduce Headings"
                                            id="introduceHeadings" name="introduceHeadings"
                                            value="<?= $intro->introduce_title ?? '' ?>" required />
                                    </div>
                                </div>

                                <div class="col-sm-6 col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Hightlight Tag </label>
                                        <input class="form-control" type="text" placeholder="Hightlight Tag"
                                            id="hightlightTag" name="hightlightTag"
                                            value="<?= $intro->introduce_highlight ?? '' ?>" />
                                    </div>
                                </div>

                                <div class="col-sm-6 col-md-4">
                                    <div class="mb-3">
                                        <label class="form-label">Experience</label>
                                        <input class="form-control" type="text" placeholder=" Years of experience"
                                            id="yearExperience" name="yearExperience"
                                            value="<?= $intro->experience ?? '' ?>" />
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-3">
                                    <div class="mb-3">
                                        <label class="form-label">Project Downloads</label>

                                        <div class="input-group">
                                            <input type="text" id="projectFileName" class="form-control"
                                                placeholder="No file chosen" readonly
                                                value="<?= !empty($intro->project_download) ? basename($intro->project_download) : '' ?>">

                                            <!-- Browse button -->
                                            <button class="btn btn-primary rounded-end" type="button"
                                                id="projectBrowseBtn"
                                                onclick="document.getElementById('projectDownloads').click();"
                                                style="<?= !empty($intro->project_download) ? 'display:none;' : '' ?>">
                                                Browse
                                            </button>

                                            <!-- Remove button -->
                                            <button class="btn btn-danger rounded-end" type="button"
                                                id="projectRemoveBtn" onclick="removeProjectFile()"
                                                style="<?= empty($intro->project_download) ? 'display:none;' : '' ?>">
                                                Remove
                                            </button>

                                            <!-- Hidden file input -->
                                            <input type="file" class="d-none" id="projectDownloads"
                                                name="projectDownloads" onchange="handleProjectFileChange(this)">
                                        </div>
                                    </div>

                                </div>

                                <div class="col-md-5">
                                    <div class="mb-3">
                                        <label class="form-label">Project Completed </label>
                                        <input class="form-control" type="text" placeholder=" Project Completed"
                                            id="projectCompleted" name="projectCompleted"
                                            value="<?= $intro->project_completed ?? '' ?>" />
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div>
                                        <label class="form-label">Introduce Message</label>
                                        <textarea class="form-control" rows="4" placeholder="Enter About your Message"
                                            style="resize:none;" id="IntroduceMessage"
                                            name="IntroduceMessage"><?= $intro->introduce_paragraph ?? '' ?></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer text-end">
                            <button class="btn btn-primary" type="submit" id="introduce_message"
                                name="introduce_message">
                                Update Introduce
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
    <!-- Container-fluid Ends-->



















</div>

<script>
    function handleProjectFileChange(input) {
        const fileNameInput = document.getElementById('projectFileName');
        const browseBtn = document.getElementById('projectBrowseBtn');
        const removeBtn = document.getElementById('projectRemoveBtn');

        if (input.files && input.files[0]) {
            fileNameInput.value = input.files[0].name;
            browseBtn.style.display = 'none';
            removeBtn.style.display = 'inline-block';
        }
    }

    function removeProjectFile() {
        const fileInput = document.getElementById('projectDownloads');
        const fileNameInput = document.getElementById('projectFileName');
        const browseBtn = document.getElementById('projectBrowseBtn');
        const removeBtn = document.getElementById('projectRemoveBtn');

        fileInput.value = '';
        fileNameInput.value = '';
        removeBtn.style.display = 'none';
        browseBtn.style.display = 'inline-block';
    }
</script>