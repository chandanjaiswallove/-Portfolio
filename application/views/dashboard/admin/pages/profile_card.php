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
                    <h4>My Profile</h4>
                </div>
                <div class="col-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo base_url('admin_playground') ?>">
                                <svg class="stroke-icon">
                                    <use href="modules/assets2/svg/icon-sprite.svg#stroke-home"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Dashboard</li>
                        <li class="breadcrumb-item active">My Profile</li>
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
                            <h4 class="card-title mb-0">Edit Profile</h4>
                            <div class="card-options">
                                <a class="card-options-collapse" href="edit-profile.html#"
                                    data-bs-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a><a
                                    class="card-options-remove" href="edit-profile.html#"
                                    data-bs-toggle="card-remove"><i class="fe fe-x"></i></a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-6 col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Company Name</label>
                                        <input class="form-control" type="text" placeholder="Company Name"
                                            id="company_name" name="company_name" required />
                                    </div>
                                </div>

                                <div class="col-sm-6 col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Web Title</label>
                                        <input class="form-control" type="text" placeholder="Enter Website Title"
                                            id="web_title" name="web_title" required />
                                    </div>
                                </div>


                                <div class="col-sm-6 col-md-4">
                                    <label class="form-label">Company Icon</label>
                                    <input class="form-control" type="file" id="company_icon" name="company_icon"
                                        accept="image/*" onchange="previewImage(this, 'companyIconPreview')" />

                                    <img id="companyIconPreview" src=""
                                        style="margin-top:10px; width:80px; height:80px; object-fit:contain; display:none;">
                                </div>
                                <div class="col-sm-6 col-md-4">
                                    <label class="form-label">Profile Photo</label>
                                    <input class="form-control" type="file" id="profile_photo" name="profile_photo"
                                        accept="image/*" onchange="previewImage(this, 'profilePhotoPreview')" />

                                    <img id="profilePhotoPreview"
                                        style="margin-top:10px; width:120px; height:120px; border-radius:50%; object-fit:cover; display:none;">
                                </div>
                                <div class="col-sm-6 col-md-4">
                                    <label class="form-label">Company Logo</label>
                                    <input class="form-control" type="file" id="company_logo" name="company_logo"
                                        accept="image/*" onchange="previewImage(this, 'companyLogoPreview')" />

                                    <img id="companyLogoPreview"
                                        style="margin-top:10px; width:120px; height:80px; object-fit:contain; display:none;">
                                </div>

                                <div class="col-sm-6 col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Full Name</label>
                                        <input class="form-control" type="text" placeholder="Full Name" id="full_name"
                                            name="full_name" required />
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

                                <!-- GitHub -->
                                <div class="col-sm-6 col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">GitHub Link</label>
                                        <input class="form-control" type="text" placeholder="GitHub profile link"
                                            id="github_link" name="github_link" />
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
                                Update Profile
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
<script>
    function previewImage(input, previewId) {
        const preview = document.getElementById(previewId);

        if (input.files && input.files[0]) {
            const reader = new FileReader();

            reader.onload = function (e) {
                preview.src = e.target.result;
                preview.style.display = "block";
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
</script>







<!-- Footer section Dashboard  -->
<?php
$this->load->view('dashboard/admin/layouts/dashFooter');
?>