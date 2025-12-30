<!-- Page Sidebar Ends-->
<div class="page-body">
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-6">
                    <h4>About Management </h4>
                </div>
                <div class="col-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo base_url('admin_playground') ?>">
                                <svg class="stroke-icon">
                                    <use href="modules/assets2/svg/icon-sprite.svg#stroke-home"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Dashboard</li>
                        <li class="breadcrumb-item active"><a href="<?= base_url('about'); ?>">About</a> </li>

                    </ol>
                </div>
            </div>
        </div>
    </div>







    <!-- Container-fluid starts-->
    <div class="container-fluid">

    </div>
    <!-- Container-fluid Ends-->









    <div class="container-fluid">
        <div class="edit-profile">
            <div class="row">

                <div class="col-md-12">
                    <form class="card" action="" method="">
                        <div class="card-header">
                            <h4 class="card-title mb-0">Edit About</h4>
                            <div class="card-options">
                                <a class="card-options-collapse" href="edit-profile.html#"
                                    data-bs-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a><a
                                    class="card-options-remove" href="edit-profile.html#"
                                    data-bs-toggle="card-remove"><i class="fe fe-x"></i></a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">

                                <!-- LinkedIn -->
                                <div class="col-sm-6 col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">About Headings</label>
                                        <input class="form-control" type="text" placeholder="About Headings"
                                            id="aboutHeadings" name="aboutHeadings" required />
                                    </div>
                                </div>

                                <div class="col-sm-6 col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">About Tag </label>
                                        <input class="form-control" type="text" placeholder="About Tag" id="aboutTag"
                                            name="aboutTag" />
                                    </div>
                                </div>


                                <div class="col-md-12">
                                    <div>
                                        <label class="form-label">About Message</label>
                                        <textarea class="form-control" rows="4" placeholder="Enter About your Message"
                                            style="resize:none;" id="IntroduceMessage"
                                            name="IntroduceMessage"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer text-end">
                            <button class="btn btn-primary" type="submit" id="introduce_message"
                                name="introduce_message">
                                Update About
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
    <!-- Container-fluid Ends-->











</div>