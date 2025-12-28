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
                    <h4>Pricing Card</h4>
                </div>
                <div class="col-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo base_url('admin_playground') ?>">
                                <svg class="stroke-icon">
                                    <use href="modules/assets2/svg/icon-sprite.svg#stroke-home"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Dashboard</li>
                        <li class="breadcrumb-item active">Pricing Card</li>
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
                                Add Pricing Card
                            </button>

                            <!-- ADD MODAL -->
                            <div class="modal fade" id="addCompanyLogoModal" tabindex="-1" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-xl">
                                    <div class="modal-content">

                                        <div class="modal-header">
                                            <h4 class="modal-title">Add New Pricing Card</h4>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                        </div>

                                        <div class="modal-body">
                                            <form method="post">

                                                <div class="row">

                                                    <!-- PLAN NAME -->
                                                    <div class="col-md-6 mb-3">
                                                        <label class="form-label">Plan Name</label>
                                                        <input type="text" class="form-control" name="plan_name"
                                                            placeholder="Premium / Basic" required>
                                                    </div>

                                                    <!-- SMALL DESCRIPTION -->
                                                    <div class="col-md-6 mb-3">
                                                        <label class="form-label">Small Description</label>
                                                        <input type="text" class="form-control" name="small_description"
                                                            placeholder="Short description" required>
                                                    </div>

                                                    <!-- PRICING -->
                                                    <div class="col-md-6 mb-3">
                                                        <label class="form-label">Pricing</label>
                                                        <input type="text" class="form-control" name="pricing"
                                                            placeholder="₹999">
                                                    </div>

                                                    <!-- URL LINK -->
                                                    <div class="col-md-6 mb-3">
                                                        <label class="form-label">URL Link</label>
                                                        <input type="url" class="form-control" name="plan_url"
                                                            placeholder="https://example.com">
                                                    </div>

                                                    <div class="col-md-6 mb-3">
                                                        <label class="form-label">Package Sample Link</label>
                                                        <input type="url" class="form-control" name="plan_url"
                                                            placeholder="https://example.com">
                                                    </div>

                                                </div>

                                                <!-- ITEM LIST (LOOP) -->
                                                <div class="mb-3">
                                                    <label class="form-label">Item List</label>

                                                    <div id="itemWrapper">
                                                        <div class="d-flex mb-2">
                                                            <input type="text" name="item_list[]"
                                                                class="form-control me-2" placeholder="Feature text">
                                                            <button type="button" class="btn btn-danger btn-sm"
                                                                onclick="removeItem(this)">×</button>
                                                        </div>
                                                    </div>

                                                    <button type="button" class="btn btn-success btn-sm"
                                                        onclick="addItem()">
                                                        + Add Item
                                                    </button>
                                                </div>

                                                <!-- FOOTER BUTTONS (SAME STYLE) -->
                                                <div class="text-end">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">
                                                        Cancel
                                                    </button>
                                                    <button type="submit" class="btn btn-primary ms-2">
                                                        Save Pricing Card
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
                                        <th>CARD ID</th>
                                        <th>Date</th>
                                        <th>Plan Name</th>

                                        <!-- ✅ NEW -->
                                        <th>Small Description</th>

                                        <th>Pricing</th>
                                        <th>Duration</th>
                                        <th>Sample Link</th>
                                        <th class="text-end">Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>23</td>
                                        <td>12 Jan 2024</td>

                                        <!-- PLAN NAME -->
                                        <td>Basic</td>

                                        <!-- SMALL DESCRIPTION -->
                                        <td>Perfect plan for beginners</td>

                                        <!-- PRICING -->
                                        <td>₹299</td>

                                        <!-- DURATION -->
                                        <td>1 Year</td>

                                        <!-- SAMPLE LINK -->
                                        <td>
                                            <a href="https://youtube.com" target="_blank">
                                                youtube.com
                                            </a>
                                        </td>

                                        <!-- ACTION -->
                                        <td class="text-end">
                                            <a class="btn btn-primary btn-sm me-2" data-bs-toggle="modal"
                                                data-bs-target="#editCompanyLogoModal">
                                                <i class="fa fa-pencil"></i> Edit
                                            </a>

                                            <a class="btn btn-danger btn-sm">
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
                                        <h4 class="modal-title">Edit Pricing Card </h4>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                    </div>

                                    <div class="modal-body">
                                        <form method="post">

                                            <div class="row">

                                                <!-- PLAN NAME -->
                                                <div class="col-md-6 mb-3">
                                                    <label class="form-label">Plan Name</label>
                                                    <input type="text" class="form-control" name="plan_name"
                                                        value="Premium" required>
                                                </div>

                                                <!-- SMALL DESCRIPTION -->
                                                <div class="col-md-6 mb-3">
                                                    <label class="form-label">Small Description</label>
                                                    <input type="text" class="form-control" name="small_description"
                                                        value="Best for businesses" required>
                                                </div>

                                                <!-- PRICING -->
                                                <div class="col-md-6 mb-3">
                                                    <label class="form-label">Pricing</label>
                                                    <input type="text" class="form-control" name="pricing" value="₹999">
                                                </div>

                                                <!-- URL -->
                                                <div class="col-md-6 mb-3">
                                                    <label class="form-label">URL Link</label>
                                                    <input type="url" class="form-control" name="plan_url"
                                                        value="https://example.com">
                                                </div>

                                                <!-- SAMPLE LINK -->
                                                <div class="col-md-6 mb-3">
                                                    <label class="form-label">Package Sample Link</label>
                                                    <input type="url" class="form-control" name="sample_url"
                                                        value="https://example.com/demo">
                                                </div>

                                            </div>

                                            <!-- ITEM LIST (EDIT LOOP – UNIQUE ID) -->
                                            <div class="mb-3">
                                                <label class="form-label">Item List</label>

                                                <div id="editItemWrapper">

                                                    <div class="d-flex mb-2">
                                                        <input type="text" name="item_list[]" class="form-control me-2"
                                                            value="Unlimited Projects">
                                                        <button type="button" class="btn btn-danger btn-sm"
                                                            onclick="removeEditItem(this)">×</button>
                                                    </div>

                                                    <div class="d-flex mb-2">
                                                        <input type="text" name="item_list[]" class="form-control me-2"
                                                            value="24/7 Support">
                                                        <button type="button" class="btn btn-danger btn-sm"
                                                            onclick="removeEditItem(this)">×</button>
                                                    </div>

                                                </div>

                                                <button type="button" class="btn btn-success btn-sm"
                                                    onclick="addEditItem()">
                                                    + Add Item
                                                </button>
                                            </div>

                                            <!-- HIDDEN ID -->
                                            <input type="hidden" name="pricing_id" value="1">

                                            <!-- FOOTER -->
                                            <div class="text-end">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                                    Cancel
                                                </button>
                                                <button type="submit" class="btn btn-primary ms-2">
                                                    Update Pricing Card
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
    function addItem() {
        const wrapper = document.getElementById('itemWrapper');
        const div = document.createElement('div');
        div.className = 'd-flex mb-2';
        div.innerHTML = `
        <input type="text" name="item_list[]" class="form-control me-2" placeholder="Feature text">
        <button type="button" class="btn btn-danger btn-sm" onclick="removeItem(this)">×</button>
    `;
        wrapper.appendChild(div);
    }

    function removeItem(btn) {
        btn.parentElement.remove();
    }
</script>

<script>
    function addEditItem() {
        const wrapper = document.getElementById('editItemWrapper');

        const div = document.createElement('div');
        div.className = 'd-flex mb-2';

        div.innerHTML = `
        <input type="text" name="item_list[]" class="form-control me-2" placeholder="Feature text">
        <button type="button" class="btn btn-danger btn-sm" onclick="removeEditItem(this)">×</button>
    `;

        wrapper.appendChild(div);
    }

    function removeEditItem(btn) {
        btn.parentElement.remove();
    }
</script>

<!-- Container-fluid Ends-->




<!-- Footer section Dashboard  -->
<?php
$this->load->view('dashboard/admin/layouts/dashFooter');
?>