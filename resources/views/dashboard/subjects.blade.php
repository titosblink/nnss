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
                        <h6 class="mb-10">All Subjects</h6>
                        <div class="mb-3 d-flex justify-content-end">




                        </div>
                        <div class="table-wrapper table-responsive">
                            <div class="mb-3 d-flex justify-content-between">
                                <input type="text" id="tableSearch" class="form-control w-25"
                                    placeholder=" Search student..." />

                                <button class="btn btn-success me-2" onclick="window.location.href='/addsubjects'">
                                    Add Subjects
                                </button>
                            </div>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="lead-info">
                                            <h6>Name of Subject</h6>
                                        </th>
                                        <th class="lead-company">
                                            <h6>Delete</h6>
                                        </th>
                                        <th class="lead-company">
                                            <h6>Add to Class(es)</h6>
                                        </th>
                                    </tr>
                                    <!-- end table row-->
                                </thead>
                                <tbody id="tableBody">
                                    @foreach ($Subjects as $Subjects)
                                        <tr>
                                            <td class="min-width">
                                                <div class="lead">
                                                    <div class="lead-text">
                                                        <p>{{ $Subjects->name }}</p>
                                                    </div>
                                                </div>
                                            </td>

                                            <td class="min-width">
                                                <p><a href="/delsubjects/{{ $Subjects->id }}"
                                                        onclick="return confirm('Are you sure you want to delete this user ?')"><i
                                                            class="lni lni-trash-can" style="color: red;"></i></a></p>
                                                </p>
                                            </td>
                                            <td class="min-width">
                                                <p><a href="/addsubjtoclass/{{ $Subjects->id }}"
                                                        onclick="return confirm('Do you want to add this to a class ?')"><i
                                                            class="lni lni-plus" style="color: green;"></i></a></p>
                                                </p>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
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
