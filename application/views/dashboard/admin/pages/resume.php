




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
                    <form class="card" method="post">

                        <div class="card-body">

                            <h5 class="mb-3">Education / Experience</h5>

                            <div id="blocks-wrapper">

                                <!-- ===== ONE BLOCK ===== -->
                                <div class="edu-block border rounded p-3 mb-3" data-index="0">

                                    <div class="d-flex justify-content-between mb-2">
                                        <strong>Block</strong>
                                        <button type="button" class="btn btn-danger btn-sm remove-block d-none">Remove
                                            Block</button>
                                    </div>

                                    <!-- DATE -->
                                    <div class="mb-3">
                                        <label>Date</label>
                                        <div class="date-wrapper">
                                            <div class="input-group mb-2">
                                                <input type="text" name="education[0][date][]" class="form-control"
                                                    placeholder="2010 - 2013">
                                                <button type="button"
                                                    class="btn btn-danger remove-field d-none">✕</button>
                                            </div>
                                        </div>
                                        <button type="button" class="btn btn-sm btn-success add-date">+ Add
                                            Date</button>
                                    </div>

                                    <!-- TITLE -->
                                    <div class="mb-3">
                                        <label>Title</label>
                                        <div class="title-wrapper">
                                            <div class="input-group mb-2">
                                                <input type="text" name="education[0][title][]" class="form-control"
                                                    placeholder="Bachelor Degree">
                                                <button type="button"
                                                    class="btn btn-danger remove-field d-none">✕</button>
                                            </div>
                                        </div>
                                        <button type="button" class="btn btn-sm btn-success add-title">+ Add
                                            Title</button>
                                    </div>

                                    <!-- DESCRIPTION -->
                                    <div class="mb-3">
                                        <label>Description</label>
                                        <div class="desc-wrapper">
                                            <div class="input-group mb-2">
                                                <input type="text" name="education[0][desc][]" class="form-control"
                                                    placeholder="US RMIT University">
                                                <button type="button"
                                                    class="btn btn-danger remove-field d-none">✕</button>
                                            </div>
                                        </div>
                                        <button type="button" class="btn btn-sm btn-success add-desc">+ Add
                                            Description</button>
                                    </div>

                                </div>
                                <!-- ===== END BLOCK ===== -->

                            </div>

                            <button type="button" class="btn btn-primary" id="add-block">
                                + Add New Block
                            </button>

                        </div>

                        <div class="card-footer text-end">
                            <button class="btn btn-success" type="submit">
                                Update Resume
                            </button>
                        </div>

                    </form>

                    <script>
                        let blockIndex = 1;

                        // ADD NEW BLOCK
                        document.getElementById('add-block').addEventListener('click', function () {
                            const wrapper = document.getElementById('blocks-wrapper');

                            const block = `
    <div class="edu-block border rounded p-3 mb-3" data-index="${blockIndex}">
        <div class="d-flex justify-content-between mb-2">
            <strong>Block</strong>
            <button type="button" class="btn btn-danger btn-sm remove-block">Remove Block</button>
        </div>

        <div class="mb-3">
            <label>Date</label>
            <div class="date-wrapper"></div>
            <button type="button" class="btn btn-sm btn-success add-date">+ Add Date</button>
        </div>

        <div class="mb-3">
            <label>Title</label>
            <div class="title-wrapper"></div>
            <button type="button" class="btn btn-sm btn-success add-title">+ Add Title</button>
        </div>

        <div class="mb-3">
            <label>Description</label>
            <div class="desc-wrapper"></div>
            <button type="button" class="btn btn-sm btn-success add-desc">+ Add Description</button>
        </div>
    </div>`;

                            wrapper.insertAdjacentHTML('beforeend', block);
                            blockIndex++;
                        });

                        // ADD FIELD INSIDE BLOCK
                        document.addEventListener('click', function (e) {
                            const block = e.target.closest('.edu-block');
                            if (!block) return;

                            const i = block.dataset.index;

                            if (e.target.classList.contains('add-date')) {
                                block.querySelector('.date-wrapper').insertAdjacentHTML('beforeend',
                                    fieldHTML(`education[${i}][date][]`, '2010 - 2013'));
                            }

                            if (e.target.classList.contains('add-title')) {
                                block.querySelector('.title-wrapper').insertAdjacentHTML('beforeend',
                                    fieldHTML(`education[${i}][title][]`, 'Bachelor Degree'));
                            }

                            if (e.target.classList.contains('add-desc')) {
                                block.querySelector('.desc-wrapper').insertAdjacentHTML('beforeend',
                                    fieldHTML(`education[${i}][desc][]`, 'US RMIT University'));
                            }

                            if (e.target.classList.contains('remove-field')) {
                                e.target.closest('.input-group').remove();
                            }

                            if (e.target.classList.contains('remove-block')) {
                                block.remove();
                            }
                        });

                        function fieldHTML(name, placeholder) {
                            return `
    <div class="input-group mb-2">
        <input type="text" name="${name}" class="form-control" placeholder="${placeholder}">
        <button type="button" class="btn btn-danger remove-field">✕</button>
    </div>`;
                        }
                    </script>


                </div>
            </div>
        </div>

    </div>
    <!-- Container-fluid Ends-->

    <!-- Container-fluid Ends-->



















</div>






