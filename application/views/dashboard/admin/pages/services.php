




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

                                                    <div class="mb-3">
                                                        <label class="form-label">Service Icon</label>
                                                        <input type="file" class="form-control" name="service_icon"
                                                            required>
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
                                    <tr>
                                        <td>1</td>
                                        <td>25 June 2018</td>
                                        <td>Web Development</td>
                                        <td>Professional and scalable web development services.</td>
                                        <td>24 Projects</td>
                                        <td>
                                            <i class="fa fa-code text-primary"></i>
                                        </td>
                                        <td class="text-end">
                                            <a class="btn btn-primary btn-sm me-2" href="javascript:void(0)"
                                                data-bs-toggle="modal" data-bs-target="#exampleModalCenter2">
                                                <i class="fa fa-pencil"></i> Edit
                                            </a>

                                            <a class="btn btn-secondary btn-sm" href="javascript:void(0)">
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

                                        <!-- MODAL HEADER (TITLE) -->
                                        <div class="modal-header">
                                            <h4 class="modal-title">Edit Service</h4>
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

                                                    <div class="mb-3">
                                                        <label class="form-label">Service Icon</label>
                                                        <input type="file" class="form-control" name="service_icon"
                                                            required>
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
                                                            Update Service
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


                    </div>

                </div>
            </div>





        </div>
    </div>
</div>









