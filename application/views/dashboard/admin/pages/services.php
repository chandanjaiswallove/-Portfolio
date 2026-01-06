<!-- Page Sidebar Ends-->
<div class="page-body">
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-6">
                    <h4>My Services</h4>
                </div>
                <div class="col-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo base_url('admin_playground') ?>">
                                <svg class="stroke-icon">
                                    <use href="modules/assets2/svg/icon-sprite.svg#stroke-home"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Dashboard</li>
                        <li class="breadcrumb-item active"><a href="<?= base_url('services'); ?>">My Service</a> </li>
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
                            <!--Centered modal-->
                            <button class="btn btn-primary" type="button" data-bs-toggle="modal"
                                data-bs-target="#exampleModalCenter1">Add New Service</button>
                            <div class="modal fade" id="exampleModalCenter1" tabindex="-1" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-xl">
                                    <div class="modal-content">

                                        <!-- MODAL HEADER (TITLE) -->
                                        <div class="modal-header">
                                            <h4 class="modal-title">New Service</h4>
                                        </div>

                                        <!-- MODAL BODY -->
                                        <div class="modal-body">
                                            <div class="modal-toggle-wrapper">

                                                <!-- SERVICE FORM -->
                                                <form method="post" action="" enctype="multipart/form-data">

                                                    <div class="mb-3">
                                                        <label class="form-label">Service Title</label>
                                                        <input type="text" class="form-control" name="service_title"
                                                            placeholder="Enter service title" required>
                                                    </div>

                                                    <div class="mb-3">
                                                        <label class="form-label">Service Description</label>
                                                        <textarea class="form-control" rows="4" name="service_paragraph"
                                                            placeholder="Enter service description" style="resize:none;"
                                                            required></textarea>
                                                    </div>
                                                    <!-- INSERT SERVICE ICON -->
                                                    <div class="mb-3 position-relative">
                                                        <label class="form-label">Service Icon</label>

                                                        <div class="input-group mb-2">
                                                            <input type="text" id="insertServiceIconName"
                                                                class="form-control" placeholder="No file chosen"
                                                                readonly>

                                                            <button class="btn btn-primary rounded-end" type="button"
                                                                onclick="document.getElementById('insert_service_icon').click();">
                                                                Browse
                                                            </button>

                                                            <input type="file" class="d-none" id="insert_service_icon"
                                                                name="service_icon" accept="image/*" onchange="updateFileNameAndPreview(
                this,
                'insertServiceIconName',
                'insertServiceIconPreview',
                'insertServiceIconRemove'
            )">
                                                        </div>

                                                        <div class="d-inline-block position-relative">
                                                            <img id="insertServiceIconPreview"
                                                                style="width:80px;height:80px;object-fit:contain;display:none;">

                                                            <button type="button" id="insertServiceIconRemove" onclick="removeFileWithPreview(
                'insert_service_icon',
                'insertServiceIconName',
                'insertServiceIconPreview',
                'insertServiceIconRemove'
            )" style="position:absolute;top:-10px;right:-20px;
            border:none;background:none;font-size:20px;
            color:#fe6a49;cursor:pointer;display:none;">
                                                                &times;
                                                            </button>
                                                        </div>
                                                    </div>


                                                    <div class="mb-3">
                                                        <label class="form-label">Service Project Count</label>
                                                        <input type="number" class="form-control"
                                                            name="service_project_count"
                                                            placeholder="Number of projects" required>
                                                    </div>

                                                    <div class="text-end">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal">
                                                            Cancel
                                                        </button>
                                                        <button type="submit" class="btn btn-primary ms-2">
                                                            Save Service
                                                        </button>
                                                    </div>

                                                </form>
                                                <!-- SERVICE FORM END -->

                                            </div>
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
                                        <th>Heading</th>
                                        <th>Description</th>
                                        <th>Projects Count</th>
                                        <th>Service Icon</th>
                                        <th class="text-end">Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php foreach ($services as $row): ?>
                                        <tr>
                                            <td><?= $row->id ?></td>
                                            <td><?= date('d M Y', strtotime($row->updated_date)) ?></td>
                                            <td><?= $row->heading ?></td>
                                            <td><?= $row->description ?></td>
                                            <td><?= $row->projects_count ?> Projects</td>
                                            <td>
                                                <?php if ($row->service_icon): ?>
                                                    <img src="<?= base_url($row->service_icon) ?>"
                                                        style="width:40px;height:40px;object-fit:contain;">
                                                <?php endif; ?>
                                            </td>
                                            <td class="text-end">
                                                <a class="btn btn-primary btn-sm editServiceBtn" href="javascript:void(0)"
                                                    data-bs-toggle="modal" data-bs-target="#editServiceModal"
                                                    data-id="<?= $row->id ?>"
                                                    data-title="<?= htmlspecialchars($row->heading) ?>"
                                                    data-desc="<?= htmlspecialchars($row->description) ?>"
                                                    data-count="<?= $row->projects_count ?>"
                                                    data-icon="<?= $row->service_icon ? base_url($row->service_icon) : '' ?>">
                                                    <i class="fa fa-pencil"></i> Edit
                                                </a>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>



                                </tbody>
                            </table>


                            <!-- ✅ MODAL YAHAN RAKHO (table ke baad) -->
                            <div class="modal fade" id="exampleModalCenter2" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalCenter2" aria-hidden="true">>
                                <div class="modal-dialog modal-dialog-centered modal-xl">
                                    <div class="modal fade" id="editServiceModal" tabindex="-1" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered modal-xl">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Edit Service</h4>
                                                </div>

                                                <div class="modal-body">
                                                    <form method="post" action="<?= base_url('services/update'); ?>"
                                                        enctype="multipart/form-data">

                                                        <!-- HIDDEN ID -->
                                                        <input type="hidden" name="id" id="edit_service_id">

                                                        <div class="mb-3">
                                                            <label class="form-label">Service Title</label>
                                                            <input type="text" class="form-control" name="service_title"
                                                                placeholder="Enter service title" required>
                                                        </div>

                                                        <div class="mb-3">
                                                            <label class="form-label">Service Description</label>
                                                            <textarea class="form-control" rows="4"
                                                                name="service_paragraph"
                                                                placeholder="Enter service description"
                                                                style="resize:none;" required></textarea>
                                                        </div>

                                                        <!-- SERVICE ICON -->
                                                        <div class="mb-3 position-relative">
                                                            <label class="form-label">Service Icon</label>
                                                            <div class="input-group mb-2">
                                                                <input type="text" id="editServiceIconName"
                                                                    class="form-control" placeholder="No file chosen"
                                                                    readonly>
                                                                <button class="btn btn-primary rounded-end"
                                                                    type="button"
                                                                    onclick="document.getElementById('edit_service_icon').click();">Browse</button>
                                                                <input type="file" class="d-none" id="edit_service_icon"
                                                                    name="service_icon" accept="image/*" onchange="updateFileNameAndPreview(
this,
'editServiceIconName',
'editServiceIconPreview',
'editServiceIconRemove'
)">
                                                            </div>
                                                            <div class="d-inline-block position-relative">
                                                                <img id="editServiceIconPreview"
                                                                    style="width:80px;height:80px;object-fit:contain;display:none;">
                                                                <button type="button" id="editServiceIconRemove"
                                                                    onclick="removeFileWithPreview(
'edit_service_icon',
'editServiceIconName',
'editServiceIconPreview',
'editServiceIconRemove'
)" style="position:absolute;top:-10px;right:-20px;border:none;background:none;font-size:20px;color:#fe6a49;cursor:pointer;display:none;">&times;</button>
                                                            </div>
                                                            <small class="text-muted d-block mt-1">Leave empty to keep
                                                                existing icon</small>
                                                        </div>
















                                                        

                                                        <div class="mb-3">
                                                            <label class="form-label">Service Project Count</label>
                                                            <input type="number" class="form-control"
                                                                name="service_project_count"
                                                                placeholder="Number of projects" required>
                                                        </div>

                                                        <div class="text-end">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-bs-dismiss="modal">Cancel</button>
                                                            <button type="submit" class="btn btn-primary ms-2">Update
                                                                Service</button>
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





        </div>
    </div>

    <script>
        function updateFileNameAndPreview(input, nameInputId, previewId, removeBtnId) {
            const fileNameInput = document.getElementById(nameInputId);
            const preview = document.getElementById(previewId);
            const removeBtn = document.getElementById(removeBtnId);

            if (input.files && input.files[0]) {
                fileNameInput.value = input.files[0].name;

                const reader = new FileReader();
                reader.onload = function (e) {
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
            document.getElementById(previewId).src = '';
            document.getElementById(previewId).style.display = 'none';
            document.getElementById(removeBtnId).style.display = 'none';
        }
    </script>


</div>