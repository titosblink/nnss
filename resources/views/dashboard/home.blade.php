@include('dashboard.header')
@include('dashboard.sidebar')
@include('dashboard.topbar')



<!-- ========== table components start ========== -->
<section class="table-components">
    <div class="container-fluid">
        <div class="title-wrapper pt-30">
        </div>
        <div class="tables-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card-style mb-30">
                        <h6 class="mb-10">All Student</h6>
                        <div class="mb-3">

                        </div>
                        <div class="table-wrapper table-responsive">
                            <div class="mb-3 d-flex justify-content-between">
                                <input type="text" id="tableSearch" class="form-control w-25"
                                    placeholder=" Search student..." />

                                <div>
                                    <button class="btn btn-success me-2" onclick="exportToExcel()">
                                        Export Excel
                                    </button>
                                    <button class="btn btn-danger" onclick="exportToPDF()">
                                        Export PDF
                                    </button>
                                </div>
                            </div>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="lead-info">
                                            <h6>Lead</h6>
                                        </th>
                                        <th class="lead-email">
                                            <h6>Email</h6>
                                        </th>
                                        <th class="lead-phone">
                                            <h6>Phone No</h6>
                                        </th>
                                        <th class="lead-company">
                                            <h6>Company</h6>
                                        </th>
                                        <th>
                                            <h6>Action</h6>
                                        </th>
                                    </tr>
                                    <!-- end table row-->
                                </thead>
                                <tbody id="tableBody">
                                    <tr>
                                        <td class="min-width">
                                            <div class="lead">
                                                <div class="lead-image">
                                                    <img src="assets/images/lead/lead-1.png" alt="" />
                                                </div>
                                                <div class="lead-text">
                                                    <p>Courtney Henry</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="min-width">
                                            <p><a href="#0">yourmail@gmail.com</a></p>
                                        </td>
                                        <td class="min-width">
                                            <p>(303)555 3343523</p>
                                        </td>
                                        <td class="min-width">
                                            <p>UIdeck digital agency</p>
                                        </td>
                                        <td>
                                            <div class="action">
                                                <button class="text-danger">
                                                    <i class="lni lni-trash-can"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                    <!-- end table row -->
                                    <tr>
                                        <td class="min-width">
                                            <div class="lead">
                                                <div class="lead-image">
                                                    <img src="assets/images/lead/lead-2.png" alt="" />
                                                </div>
                                                <div class="lead-text">
                                                    <p>John Doe</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="min-width">
                                            <p><a href="#0">yourmail@gmail.com</a></p>
                                        </td>
                                        <td class="min-width">
                                            <p>(303)555 3343523</p>
                                        </td>
                                        <td class="min-width">
                                            <p>Graygrids digital agency</p>
                                        </td>
                                        <td>
                                            <div class="action">
                                                <button class="text-danger">
                                                    <i class="lni lni-trash-can"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <!-- end table -->
                        </div>
                    </div>
                    <!-- end card -->
                </div>
                <!-- end col -->
            </div>
        </div>
        <!-- ========== tables-wrapper end ========== -->
    </div>
    <!-- end container -->
</section>
@include('dashboard.footer')
