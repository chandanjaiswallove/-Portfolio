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
                    <h4>Contact </h4>
                </div>
                <div class="col-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo base_url('admin_playground') ?>">
                                <svg class="stroke-icon">
                                    <use href="modules/assets2/svg/icon-sprite.svg#stroke-home"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Dashboard</li>
                        <li class="breadcrumb-item active">Contact</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>








    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h4>Visitors Data</h4>
                    <!-- <span>Only Visitors Data listed here</span> -->
                </div>
                <div class="card-block row">
                    <div class="col-sm-12 col-lg-12 col-xl-12">
                        <div class="table-responsive">
                            <table class="table table-dashed">
                                <thead>
                                    <tr>
                                        <th scope="col"><b>Id</b></th>
                                        <th scope="col"><b>Visit Date</b></th>
                                        <th scope="col"><b>Full Name</b></th>
                                        <th scope="col"><b>Email</b></th>
                                        <th scope="col"><b>Subject</b></th>
                                        <th scope="col"><b>Message</b></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Mind & Body</td>
                                        <td>Yoga</td>
                                        <td>8:00 AM - 9:00 AM</td>
                                        <td>Adam Stewart</td>
                                        <td>20</td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->



















</div>







<!-- Footer section Dashboard  -->
<?php
$this->load->view('dashboard/admin/layouts/dashFooter');
?>