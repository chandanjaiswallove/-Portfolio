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


                <!-- <div class="col-xl-4">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title mb-0">My Profile</h4>
                            <div class="card-options">
                                <a class="card-options-collapse" href="edit-profile.html#"
                                    data-bs-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a><a
                                    class="card-options-remove" href="edit-profile.html#"
                                    data-bs-toggle="card-remove"><i class="fe fe-x"></i></a>
                            </div>
                        </div>
                        <div class="card-body">
                            <form>
                                <div class="row mb-2">
                                    <div class="profile-title">
                                        <div class="media">
                                            <img class="img-70 rounded-circle" alt=""
                                                src="modules/assets2/images/user/7.jpg" />
                                            <div class="media-body">
                                                <h5 class="mb-1">MARK JECNO</h5>
                                                <p>DESIGNER</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <h6 class="form-label">Bio</h6>
                                    <textarea class="form-control" rows="5">
On the other hand, we denounce with righteous indignation</textarea>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Email-Address</label>
                                    <input class="form-control" placeholder="your-email@domain.com" />
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Password</label>
                                    <input class="form-control" type="password" value="password" />
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Website</label>
                                    <input class="form-control" placeholder="http://Uplor .com" />
                                </div>
                                <div class="form-footer">
                                    <button class="btn btn-primary btn-block">Save</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div> -->


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
                                        <th>Project Name</th>
                                        <th>Date</th>
                                        <th>Status</th>
                                        <th>Price</th>
                                        <th>testing</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>


                                    <tr>
                                        <td>
                                            <a class="text-inherit" href="edit-profile.html#">Untrammelled prevents</a>
                                        </td>
                                        <td>25 June 2018</td>
                                        <td>
                                            <span class="status-icon bg-success"></span> Completed
                                        </td>
                                        <td>$15,987</td>
                                        <td>Tested ok</td>



                                        <td class="text-end">
                                            <!-- Edit Button (Modal Open) -->
                                            <a class="btn btn-primary btn-sm me-2" href="javascript:void(0)"
                                                data-bs-toggle="modal" data-bs-target="#exampleModalCenter2">
                                                <i class="fa fa-pencil"></i> Edit
                                            </a>

                                            <!-- Delete Button -->
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







<!-- Footer section Dashboard  -->
<?php
$this->load->view('dashboard/admin/layouts/dashFooter');
?>