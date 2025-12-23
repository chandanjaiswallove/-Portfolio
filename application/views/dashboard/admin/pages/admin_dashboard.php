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
                    <h4>Project Management</h4>
                </div>
                <div class="col-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo base_url('admin_playground') ?>">
                                <svg class="stroke-icon">
                                    <use href="modules/assets2/svg/icon-sprite.svg#stroke-home"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Dashboard</li>
                        <li class="breadcrumb-item active">Portfolio-Management</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>




    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row size-column">
            <div class="col-xxl-9 box-col-12">
                <div class="row">
                    <div class="col-xl-3 col-sm-6">
                        <div class="card o-hidden small-widget">
                            <div class="card-body total-project border-b-primary border-2">
                                <span class="f-light f-w-500 f-14">Total Project</span>
                                <div class="project-details">
                                    <div class="project-counter">
                                        <h2 class="f-w-600">1,523</h2>
                                        <span class="f-12 f-w-400">(This month)</span>
                                    </div>
                                    <div class="product-sub bg-primary-light">
                                        <svg class="invoice-icon">
                                            <use href="modules/svg/icon-sprite.svg#color-swatch"></use>
                                        </svg>
                                    </div>
                                </div>
                                <ul class="bubbles">
                                    <li class="bubble"></li>
                                    <li class="bubble"></li>
                                    <li class="bubble"></li>
                                    <li class="bubble"></li>
                                    <li class="bubble"></li>
                                    <li class="bubble"></li>
                                    <li class="bubble"></li>
                                    <li class="bubble"></li>
                                    <li class="bubble"></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6">
                        <div class="card o-hidden small-widget">
                            <div class="card-body total-Progress border-b-warning border-2">
                                <span class="f-light f-w-500 f-14">In Progress</span>
                                <div class="project-details">
                                    <div class="project-counter">
                                        <h2 class="f-w-600">836</h2>
                                        <span class="f-12 f-w-400">(This month) </span>
                                    </div>
                                    <div class="product-sub bg-warning-light">
                                        <svg class="invoice-icon">
                                            <use href="modules/svg/icon-sprite.svg#tick-circle"></use>
                                        </svg>
                                    </div>
                                </div>
                                <ul class="bubbles">
                                    <li class="bubble"></li>
                                    <li class="bubble"></li>
                                    <li class="bubble"></li>
                                    <li class="bubble"></li>
                                    <li class="bubble"></li>
                                    <li class="bubble"></li>
                                    <li class="bubble"></li>
                                    <li class="bubble"></li>
                                    <li class="bubble"></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6">
                        <div class="card o-hidden small-widget">
                            <div class="card-body total-Complete border-b-secondary border-2">
                                <span class="f-light f-w-500 f-14">Complete</span>
                                <div class="project-details">
                                    <div class="project-counter">
                                        <h2 class="f-w-600">475</h2>
                                        <span class="f-12 f-w-400">(This month) </span>
                                    </div>
                                    <div class="product-sub bg-secondary-light">
                                        <svg class="invoice-icon">
                                            <use href="modules/svg/icon-sprite.svg#add-square"></use>
                                        </svg>
                                    </div>
                                </div>
                                <ul class="bubbles">
                                    <li class="bubble"></li>
                                    <li class="bubble"></li>
                                    <li class="bubble"></li>
                                    <li class="bubble"></li>
                                    <li class="bubble"></li>
                                    <li class="bubble"></li>
                                    <li class="bubble"></li>
                                    <li class="bubble"></li>
                                    <li class="bubble"></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6">
                        <div class="card o-hidden small-widget">
                            <div class="card-body total-upcoming">
                                <span class="f-light f-w-500 f-14">Upcoming</span>
                                <div class="project-details">
                                    <div class="project-counter">
                                        <h2 class="f-w-600">189</h2>
                                        <span class="f-12 f-w-400">(This month) </span>
                                    </div>
                                    <div class="product-sub bg-light-light">
                                        <svg class="invoice-icon">
                                            <use href="modules/svg/icon-sprite.svg#edit-2"></use>
                                        </svg>
                                    </div>
                                </div>
                                <ul class="bubbles">
                                    <li class="bubble"></li>
                                    <li class="bubble"></li>
                                    <li class="bubble"></li>
                                    <li class="bubble"></li>
                                    <li class="bubble"></li>
                                    <li class="bubble"></li>
                                    <li class="bubble"></li>
                                    <li class="bubble"></li>
                                    <li class="bubble"></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-xxl-12">
                        <div class="card recent-order">
                            <div class="card-header card-no-border total-revenue">
                                <h4 class="m-0">All Project Table</h4>
                                <div class="header-top"></div>
                                <a href="product.html">View All </a>
                            </div>
                            <div class="card-body pt-0">
                                <div class="project-table table-responsive custom-scrollbar">
                                    <table class="order-table project-table w-100">
                                        <thead>
                                            <tr>
                                                <th>Project Name</th>
                                                <th>Client Name</th>
                                                <th>End Date</th>
                                                <th>Assigned to</th>
                                                <th>Status</th>
                                                <th>Progress</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="project-comment d-flex gap-2">
                                                        <div class="radial-chart-wrap">
                                                            <div class="widgetsChart" id="widgetsChart1"></div>
                                                        </div>
                                                        <div>
                                                            <a class="f-w-500 f-14" href="product.html">Pet App
                                                                Design</a>
                                                            <div class="project-comment-icon">
                                                                <div class="project-link">
                                                                    <svg>
                                                                        <use
                                                                            href="modules/svg/icon-sprite.svg#messages-2">
                                                                        </use>
                                                                    </svg><span class="f-w-500 f-light f-12">20</span>
                                                                </div>
                                                                <div class="project-link">
                                                                    <svg>
                                                                        <use
                                                                            href="modules/svg/icon-sprite.svg#paperclip">
                                                                        </use>
                                                                    </svg><span class="f-w-500 f-light f-12">7</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="product-sub">
                                                        <a class="f-w-500 f-14" href="product.html">Darrell
                                                            Steward</a><span
                                                            class="f-w-500 f-light f-12 d-block">darrells@example.com</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="product-sub">
                                                        <a class="f-w-500 f-14" href="product.html">15 Nov,
                                                            2024</a><span class="f-w-500 f-light f-12 d-block">8 Days
                                                            Left</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="product-sub">
                                                        <a class="f-w-500 f-14" href="product.html">Team Roha</a><span
                                                            class="f-w-500 f-light f-12 d-block">12 Member</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div
                                                        class="txt-primary d-flex gap-2 align-items-center justify-content-center">
                                                        <span class="pending bg-primary"></span><span
                                                            class="f-w-500 f-13 txt-primary">Active</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="product-sub">
                                                        <div class="dropdown">
                                                            <div id="dropdownMenuButtonicon11" data-bs-toggle="dropdown"
                                                                aria-expanded="false" role="menu">
                                                                <svg class="invoice-icon">
                                                                    <use
                                                                        href="modules/svg/icon-sprite.svg#more-horizontal">
                                                                    </use>
                                                                </svg>
                                                            </div>
                                                            <div class="dropdown-menu dropdown-menu-end"
                                                                aria-labelledby="dropdownMenuButtonicon11">
                                                                <span class="dropdown-item">Last Month</span><span
                                                                    class="dropdown-item">Last Week</span><span
                                                                    class="dropdown-item">Last Day </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="project-comment d-flex gap-2">
                                                        <div class="radial-chart-wrap">
                                                            <div class="widgetsChart" id="widgetsChart2"></div>
                                                        </div>
                                                        <div>
                                                            <a class="f-w-500 f-14" href="product.html">Chain Desktop
                                                                App</a>
                                                            <div class="project-comment-icon">
                                                                <div class="project-link">
                                                                    <svg>
                                                                        <use
                                                                            href="modules/svg/icon-sprite.svg#messages-2">
                                                                        </use>
                                                                    </svg><span class="f-w-500 f-light f-12">20</span>
                                                                </div>
                                                                <div class="project-link">
                                                                    <svg>
                                                                        <use
                                                                            href="modules/svg/icon-sprite.svg#paperclip">
                                                                        </use>
                                                                    </svg><span class="f-w-500 f-light f-12">7</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="product-sub">
                                                        <a class="f-w-500 f-14" href="product.html">Eleanor
                                                            Pena</a><span
                                                            class="f-w-500 f-light f-12 d-block">pena12@example.com</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="product-sub">
                                                        <a class="f-w-500 f-14" href="product.html">20 Nov,
                                                            2024</a><span class="f-w-500 f-light f-12 d-block">13 Days
                                                            Left</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="product-sub">
                                                        <a class="f-w-500 f-14" href="product.html">Team Suresh</a><span
                                                            class="f-w-500 f-light f-12 d-block">10 Member</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div
                                                        class="txt-warning d-flex gap-2 align-items-center justify-content-center">
                                                        <span class="pending bg-warning"></span><span
                                                            class="f-w-500 f-13 txt-warning">On Hold</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="product-sub">
                                                        <div class="dropdown">
                                                            <div id="dropdownMenuButtonicon12" data-bs-toggle="dropdown"
                                                                aria-expanded="false" role="menu">
                                                                <svg class="invoice-icon">
                                                                    <use
                                                                        href="modules/svg/icon-sprite.svg#more-horizontal">
                                                                    </use>
                                                                </svg>
                                                            </div>
                                                            <div class="dropdown-menu dropdown-menu-end"
                                                                aria-labelledby="dropdownMenuButtonicon12">
                                                                <span class="dropdown-item">Last Month</span><span
                                                                    class="dropdown-item">Last Week</span><span
                                                                    class="dropdown-item">Last Day </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="project-comment d-flex gap-2">
                                                        <div class="radial-chart-wrap">
                                                            <div class="widgetsChart" id="widgetsChart3"></div>
                                                        </div>
                                                        <div>
                                                            <a class="f-w-500 f-14" href="product.html">Business Web
                                                                Design</a>
                                                            <div class="project-comment-icon">
                                                                <div class="project-link">
                                                                    <svg>
                                                                        <use
                                                                            href="modules/svg/icon-sprite.svg#messages-2">
                                                                        </use>
                                                                    </svg><span class="f-w-500 f-light f-12">20</span>
                                                                </div>
                                                                <div class="project-link">
                                                                    <svg>
                                                                        <use
                                                                            href="modules/svg/icon-sprite.svg#paperclip">
                                                                        </use>
                                                                    </svg><span class="f-w-500 f-light f-12">7</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="product-sub">
                                                        <a class="f-w-500 f-14" href="product.html">Robert Fox</a><span
                                                            class="f-w-500 f-light f-12 d-block">foxxxx8s@example.com</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="product-sub">
                                                        <a class="f-w-500 f-14" href="product.html">22 Nov,
                                                            2024</a><span class="f-w-500 f-light f-12 d-block">15 Days
                                                            Left</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="product-sub">
                                                        <a class="f-w-500 f-14" href="product.html">Team Liza</a><span
                                                            class="f-w-500 f-light f-12 d-block">7 Member</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div
                                                        class="txt-secondary d-flex gap-2 align-items-center justify-content-center">
                                                        <span class="pending bg-secondary"></span><span
                                                            class="f-w-500 f-13 txt-secondary">Pending</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="product-sub">
                                                        <div class="dropdown">
                                                            <div id="dropdownMenuButtonicon13" data-bs-toggle="dropdown"
                                                                aria-expanded="false" role="menu">
                                                                <svg class="invoice-icon">
                                                                    <use
                                                                        href="modules/svg/icon-sprite.svg#more-horizontal">
                                                                    </use>
                                                                </svg>
                                                            </div>
                                                            <div class="dropdown-menu dropdown-menu-end"
                                                                aria-labelledby="dropdownMenuButtonicon13">
                                                                <span class="dropdown-item">Last Month</span><span
                                                                    class="dropdown-item">Last Week</span><span
                                                                    class="dropdown-item">Last Day </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="project-comment d-flex gap-2">
                                                        <div class="radial-chart-wrap">
                                                            <div class="widgetsChart" id="widgetsChart4"></div>
                                                        </div>
                                                        <div>
                                                            <a class="f-w-500 f-14" href="product.html">NFT App
                                                                Design</a>
                                                            <div class="project-comment-icon">
                                                                <div class="project-link">
                                                                    <svg>
                                                                        <use
                                                                            href="modules/svg/icon-sprite.svg#messages-2">
                                                                        </use>
                                                                    </svg><span class="f-w-500 f-light f-12">20</span>
                                                                </div>
                                                                <div class="project-link">
                                                                    <svg>
                                                                        <use
                                                                            href="modules/svg/icon-sprite.svg#paperclip">
                                                                        </use>
                                                                    </svg><span class="f-w-500 f-light f-12">7</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="product-sub">
                                                        <a class="f-w-500 f-14" href="product.html">Arlene
                                                            McCoy</a><span
                                                            class="f-w-500 f-light f-12 d-block">arlene78@example.com</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="product-sub">
                                                        <a class="f-w-500 f-14" href="product.html">28 Nov,
                                                            2024</a><span class="f-w-500 f-light f-12 d-block">21 Days
                                                            Left</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="product-sub">
                                                        <a class="f-w-500 f-14" href="product.html">Team
                                                            Sulekha</a><span class="f-w-500 f-light f-12 d-block">9
                                                            Member</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div
                                                        class="txt-primary d-flex gap-2 align-items-center justify-content-center">
                                                        <span class="pending bg-primary"></span><span
                                                            class="f-w-500 f-13 txt-primary">Active</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="product-sub">
                                                        <div class="dropdown">
                                                            <div id="dropdownMenuButtonicon14" data-bs-toggle="dropdown"
                                                                aria-expanded="false" role="menu">
                                                                <svg class="invoice-icon">
                                                                    <use
                                                                        href="modules/svg/icon-sprite.svg#more-horizontal">
                                                                    </use>
                                                                </svg>
                                                            </div>
                                                            <div class="dropdown-menu dropdown-menu-end"
                                                                aria-labelledby="dropdownMenuButtonicon14">
                                                                <span class="dropdown-item">Last Month</span><span
                                                                    class="dropdown-item">Last Week</span><span
                                                                    class="dropdown-item">Last Day </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="project-comment d-flex gap-2">
                                                        <div class="radial-chart-wrap">
                                                            <div class="widgetsChart" id="widgetsChart5"></div>
                                                        </div>
                                                        <div>
                                                            <a class="f-w-500 f-14" href="product.html">Digital Avtar
                                                                Web Design</a>
                                                            <div class="project-comment-icon">
                                                                <div class="project-link">
                                                                    <svg>
                                                                        <use
                                                                            href="modules/svg/icon-sprite.svg#messages-2">
                                                                        </use>
                                                                    </svg><span class="f-w-500 f-light f-12">20</span>
                                                                </div>
                                                                <div class="project-link">
                                                                    <svg>
                                                                        <use
                                                                            href="modules/svg/icon-sprite.svg#paperclip">
                                                                        </use>
                                                                    </svg><span class="f-w-500 f-light f-12">7</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="product-sub">
                                                        <a class="f-w-500 f-14" href="product.html">Courtney
                                                            Henry</a><span
                                                            class="f-w-500 f-light f-12 d-block">henry45@example.com</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="product-sub">
                                                        <a class="f-w-500 f-14" href="product.html">2 Dec, 2024</a><span
                                                            class="f-w-500 f-light f-12 d-block">25 Days Left</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="product-sub">
                                                        <a class="f-w-500 f-14" href="product.html">Team
                                                            Shreena</a><span class="f-w-500 f-light f-12 d-block">12
                                                            Member</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div
                                                        class="txt-primary d-flex gap-2 align-items-center justify-content-center">
                                                        <span class="pending bg-primary"></span><span
                                                            class="f-w-500 f-13 txt-primary">Active</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="product-sub">
                                                        <div class="dropdown">
                                                            <div id="dropdownMenuButtonicon15" data-bs-toggle="dropdown"
                                                                aria-expanded="false" role="menu">
                                                                <svg class="invoice-icon">
                                                                    <use
                                                                        href="modules/svg/icon-sprite.svg#more-horizontal">
                                                                    </use>
                                                                </svg>
                                                            </div>
                                                            <div class="dropdown-menu dropdown-menu-end"
                                                                aria-labelledby="dropdownMenuButtonicon15">
                                                                <span class="dropdown-item">Last Month</span><span
                                                                    class="dropdown-item">Last Week</span><span
                                                                    class="dropdown-item">Last Day </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xxl-3 d-xxl-block d-none activity-group box-col-none">
                <div class="row">
                    <div class="col-xl-12 col-md-6">
                        <div class="card overflow-hidden">
                            <div class="card-body pt-0 project-ideas-card">
                                <div class="project-card">
                                    <div>
                                        <span class="f-22 f-w-500 text-center">Get more ideas for your important
                                            project</span>
                                        <div class="btn-showcase text-center">
                                            <a href="pricing.html">
                                                <button class="btn btn-pill btn-outline-primary-2x b-r-8 active">
                                                    Upgrade Now
                                                </button></a>
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









</div>







<!-- Footer section Dashboard  -->
<?php
$this->load->view('dashboard/admin/layouts/dashFooter');
?>