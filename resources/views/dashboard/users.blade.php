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
                        <h6 class="mb-10">All Users</h6>
                        <div class="mb-3 d-flex justify-content-end">
                            <button class="btn btn-success me-2" onclick="window.location.href='/addnewusers'">
                                Add User
                            </button>
                        </div>
                        <div class="table-wrapper table-responsive">

                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="lead-info">
                                            <h6>Name</h6>
                                        </th>
                                        <th class="lead-email">
                                            <h6>Email</h6>
                                        </th>
                                        <th class="lead-phone">
                                            <h6>Right</h6>
                                        </th>
                                        <th class="lead-company">
                                            <h6>Reset Password</h6>
                                        </th>
                                        <th class="lead-company">
                                            <h6>Delete</h6>
                                        </th>
                                    </tr>
                                    <!-- end table row-->
                                </thead>
                                <tbody id="tableBody">
                                    @foreach ($Users as $Users)
                                        <tr>
                                            <td class="min-width">
                                                <div class="lead">
                                                    <div class="lead-text">
                                                        <p>{{ $Users->name }}</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="min-width">
                                                <p><a href="#0">{{ $Users->email }}</a></p>
                                            </td>
                                            <td class="min-width">
                                                <p>{{ $Users->status }}</p>
                                            </td>
                                            <td class="min-width">
                                                <p><a href="/resetpword/{{ $Users->id }}"
                                                        onclick="return confirm('Your new password will be password ?')"><i
                                                            class="lni lni-reload" style="color: green;"></i></a></p>
                                            </td>
                                            <td class="min-width">
                                                <p><a href="/deluser/{{ $Users->id }}"
                                                        onclick="return confirm('Are you sure you want to delete this user ?')"><i
                                                            class="lni lni-reload" style="color: red;"></i></a></p>

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
