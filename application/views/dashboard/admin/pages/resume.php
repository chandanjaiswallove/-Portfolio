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
                    <h4>My Resume</h4>
                </div>
                <div class="col-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo base_url('admin_playground') ?>">
                                <svg class="stroke-icon">
                                    <use href="modules/assets2/svg/icon-sprite.svg#stroke-home"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Dashboard</li>
                        <li class="breadcrumb-item active">My Resume</li>
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
                    <form class="card" action="" method="">
                        <div class="card-header">
                            <h4 class="card-title mb-0"> Resume</h4>
                            <div class="card-options">
                                <a class="card-options-collapse" href="edit-profile.html#"
                                    data-bs-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a><a
                                    class="card-options-remove" href="edit-profile.html#"
                                    data-bs-toggle="card-remove"><i class="fe fe-x"></i></a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="mb-3">
                                        <label class="form-label">Company Name</label>
                                        <input class="form-control" type="text" placeholder="Company Name"
                                            id="company_name" name="company_name" required />
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-3">
                                    <div class="mb-3">
                                        <label class="form-label">Company Icon</label>
                                        <input class="form-control" type="file" placeholder="Company Icon"
                                            id="company_icon" name="company_icon" required />
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4">
                                    <div class="mb-3">
                                        <label class="form-label">Company logo </label>
                                        <input class="form-control" type="file" placeholder="Company logo"
                                            id="company_logo" name="company_logo" required />
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Full Name</label>
                                        <input class="form-control" type="text" placeholder="Full Name" id="full_name"
                                            name="full_name" required />
                                    </div>
                                </div>
                                <!-- Profile Photo -->
                                <div class="col-sm-6 col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Profile Photo</label>
                                        <input class="form-control" type="file" id="profile_photo" name="profile_photo"
                                            required />
                                    </div>
                                </div>

                                <!-- Facebook -->
                                <div class="col-sm-6 col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Facebook Link</label>
                                        <input class="form-control" type="text" placeholder="Facebook link"
                                            id="facebook_link" name="facebook_link" required />
                                    </div>
                                </div>
                                <!-- X / Twitter -->
                                <div class="col-sm-6 col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">X (Twitter) Link</label>
                                        <input class="form-control" type="text" placeholder="X / Twitter link"
                                            id="twitter_link" name="twitter_link" required />
                                    </div>
                                </div>
                                <!-- LinkedIn -->
                                <div class="col-sm-6 col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">LinkedIn Link</label>
                                        <input class="form-control" type="text" placeholder="LinkedIn link"
                                            id="linkedin_link" name="linkedin_link" required />
                                    </div>
                                </div>

                                <div class="col-sm-6 col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Instagram Links </label>
                                        <input class="form-control" type="text" placeholder="Instagram links"
                                            id="companyName" name="companyName" />
                                    </div>
                                </div>

                                <div class="col-sm-6 col-md-4">
                                    <div class="mb-3">
                                        <label class="form-label">Address</label>
                                        <input class="form-control" type="text" placeholder="Address" id="companyName"
                                            name="companyName" />
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-3">
                                    <div class="mb-3">
                                        <label class="form-label">Whatsapp Number</label>
                                        <input class="form-control" type="number" placeholder="Whatsapp Number "
                                            maxlength="13" id="companyName" name="companyName" />
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="mb-3">
                                        <label class="form-label">Email Address </label>
                                        <input class="form-control" type="email" placeholder=" Email" id="companyName"
                                            name="companyName" />
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div>
                                        <label class="form-label">Whatsapp Message</label>
                                        <textarea class="form-control" rows="4" placeholder="Enter About your Message"
                                            style="resize:none;" id="WhatsappMessage" name="WhatsappMessage"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer text-end">
                            <button class="btn btn-primary" type="submit" id="whatsapp_message" name="whatsapp_message">
                                Update Resume
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
    <!-- Container-fluid Ends-->

    <!-- Container-fluid Ends-->



















</div>







<!-- Footer section Dashboard  -->
<?php
$this->load->view('dashboard/admin/layouts/dashFooter');
?>