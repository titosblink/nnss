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
                        <h6 class="mb-10">Create new Student record</h6>
                        <div class="mb-3">

                        </div>
                        <div class="table-wrapper table-responsive">

                            <form action="{{ route('uploadstudent') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <input type="file" name="excel_file" required>
                                <button type="submit" class="btn btn-primary">Import Students</button>
                            </form>
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
