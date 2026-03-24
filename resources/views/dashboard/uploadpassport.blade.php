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
        <div style="text-align: left; margin-bottom: 10px;">
            <img src="{{ $ppt ? asset('passport/' . $ppt) : asset('assets/img/passport.jpeg') }}" alt="Logo"
                style="height: 80px; width: 80px; border-radius: 50%;">
        </div>
        <div style="display: flex; justify-content: space-between; align-items: center;">
            <span><b>{{ $fullname }} </b>({{ $studid }})</span>
            <span>{{ $clas }}</span>
        </div>
        <div class="tables-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card-style mb-30">

                        <div class="mb-3">
                            <div class="col-lg-12">
                                <div style="display: flex; justify-content: space-between; align-items: center;">
                                    <span>
                                        <h6>Upload Passport</h6>
                                    </span>
                                    <a href="/viewstudent/{{ $id }}" class="btn btn-sm btn-outline-primary">Go
                                        Back</a>
                                </div>

                            </div>
                        </div>
                        <hr>

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
