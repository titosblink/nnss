@include('dashboard.header')
@include('dashboard.sidebar')
@include('dashboard.topbar')



<!-- ========== table components start ========== -->
<section class="table-components">
    <div class="container-fluid">
        <div class="title-wrapper pt-30">
        </div>
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        @if (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif
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

                                        <th>
                                            Student ID
                                        </th>
                                        <th>
                                            Fullanme
                                        </th>
                                        <th>
                                            Class
                                        </th>
                                        <th>
                                            Parent Status
                                        </th>
                                        <th>
                                            Parent Phone Number
                                        </th>
                                        <th>
                                            Delete
                                        </th>
                                        <th>
                                            View
                                        </th>

                                    </tr>
                                    <!-- end table row-->
                                </thead>
                                <tbody id="tableBody">
                                    @foreach ($Students as $Students)
                                        <tr>


                                            <td class="min-width">
                                                <p>{{ $Students->studentid }}</p>
                                            </td>
                                            <td class="min-width">
                                                <p>{{ $Students->surname }} {{ $Students->othername }}</p>
                                            </td>
                                            <td class="min-width">
                                                <p>{{ $Students->clas }}</p>
                                            </td>
                                            <td class="min-width">
                                                <p>{{ $Students->parent }}</p>
                                            </td>
                                            <td class="min-width">
                                                <p>{{ $Students->parent_phone }}</p>
                                            </td>
                                            <td class="min-width">
                                                <div class="action">
                                                    <button class="text-danger">

                                                        <a href="/delstudent/{{ $Students->id }}"
                                                            onclick="return confirm('Are you sure you want to delete this student record ?')"><i
                                                                class="lni lni-trash-can" style="color: red;"></i></a>
                                                    </button>
                                                </div>
                                            </td>
                                            <td class="min-width">
                                                <div class="action">
                                                    <button class="text-primary">
                                                        <a href="/viewstudent/{{ $Students->id }}"><i
                                                                class="lni lni-search-alt" style="color: blue;"></i></a>

                                                    </button>
                                                </div>
                                            </td>

                                        </tr>
                                    @endforeach

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
