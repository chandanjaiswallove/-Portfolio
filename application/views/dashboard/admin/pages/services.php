




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
                        <li class="breadcrumb-item active">My Services</li>
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
<!-- Container-fluid Ends-->

<!-- Container-fluid Ends-->





<!-- <div class="col-md-12 project-list">
        <div class="card">
            <div class="row">
                <div class="col-md-6">
                    <ul class="nav nav-tabs border-tab" id="top-tab" role="tablist">

                        <li class="nav-item" role="presentation"><a class="nav-link" id="contact-top-tab"
                                data-bs-toggle="tab" href="projects.html#top-contact" role="tab"
                                aria-controls="top-contact" aria-selected="false" tabindex="-1"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-check-circle">
                                    <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                    <polyline points="22 4 12 14.01 9 11.01"></polyline>
                                </svg>Done</a></li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <div class="form-group mb-0 me-0"></div><a class="btn btn-primary" href="projectcreate.html"> Create
                        New Project</a>
                </div>
            </div>
        </div>
    </div> -->

<!-- <div class="card-body">
        <button class="btn btn-success" type="button" data-bs-toggle="modal"
            data-bs-target="#exampleModalCenter1">Vertically centered</button>
        <div class="modal fade" id="exampleModalCenter1" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalCenter1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="modal-toggle-wrapper">
                            <ul class="modal-img">
                                <li> <img src="modules/assets2/images/gif/danger.gif" alt="error">
                                </li>
                            </ul>
                            <h4 class="text-center pb-2">Ohh! Something went wrong!</h4>
                            <p class="text-center">Attackers on malicious activity may trick you
                                into doing something dangrous like installing software or revealing
                                your personal informations.</p>
                            <button class="btn btn-secondary d-flex m-auto" type="button"
                                data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->













</div>






