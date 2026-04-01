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
                        <div class="mb-3">
                            <div class="col-lg-12">

                                <ul class="buttons-group">

                                    <li>
                                        <a href="/students"
                                            class="main-btn primary-btn-light square-btn btn-hover text-white">
                                            Student</a>
                                    </li>
                                    <li>
                                        <a href="/uploadstudents"
                                            class="main-btn primary-btn-light square-btn btn-hover text-white">
                                            Upload Students via Excel</a>
                                    </li>
                                    <li>
                                        <a href="/addstudent"
                                            class="main-btn primary-btn-light square-btn btn-hover text-white">
                                            Add Student Manually</a>
                                    </li>
                                    <li>
                                        <a href="/classes"
                                            class="main-btn primary-btn-light square-btn btn-hover text-white">
                                            Manage Classes</a>
                                    </li>
                                    <li>
                                        <a href="/principalcomments"
                                            class="main-btn primary-btn-light square-btn btn-hover text-white">
                                            Manage Comments</a>
                                    </li>

                                    <li>
                                        <a href="/division"
                                            class="main-btn primary-btn-light square-btn btn-hover text-white">
                                            Manage Division</a>
                                    </li>
                                    <li>
                                        <a href="/houses"
                                            class="main-btn primary-btn-light square-btn btn-hover text-white">
                                            Manage House</a>
                                    </li>
                                    <li>
                                        <a href="/subjects"
                                            class="main-btn primary-btn-light square-btn btn-hover text-white">
                                            Manage Subjects</a>
                                    </li>
                                    <li>
                                        <a href="/broadsheet"
                                            class="main-btn primary-btn-light square-btn btn-hover text-white">
                                            View Broadsheet</a>
                                    </li>

                                    <li>
                                        <a href="/users"
                                            class="main-btn primary-btn-light square-btn btn-hover text-white">
                                            Manage Users</a>
                                    </li>
                                </ul>

                            </div>
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
