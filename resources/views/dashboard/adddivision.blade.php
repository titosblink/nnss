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
                        <h6 class="mb-10">Create new Division</h6>
                        <div class="mb-3">

                        </div>
                        <div class="table-wrapper table-responsive">

                            <form method="POST" action="{{ route('savenewdivision') }}">
                                @csrf
                                <div class="row">
                                    <div class="col-4">
                                        <div class="input-group">
                                            <input type="text" placeholder="Enter Division" class="form-control"
                                                name="cname" />
                                        </div>
                                    </div>

                                    <div class="col-xxl-6 col-lg-12 col-md-4">
                                        <div class="text-start text-md-end text-lg-start text-xxl-end mb-30"></div>
                                    </div>
                                    <!-- end col -->
                                    <div class="col-4">
                                        <div class="button-group d-flex justify-content-center flex-wrap">
                                            <button class="main-btn primary-btn btn-hover w-100 text-center">
                                                Submit
                                            </button>
                                        </div>
                                    </div>

                                    <!-- end row -->
                            </form>

                        </div>
                    </div>
                    <!-- end card -->
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
                <!-- end col -->
            </div>
        </div>
        <!-- ========== tables-wrapper end ========== -->
    </div>
    <!-- end container -->
</section>
@include('dashboard.footer')
