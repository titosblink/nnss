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

                                <ul class="buttons-group">
                                    <li>
                                        <a href="/studentdata/{{ $id }}"
                                            class="main-btn primary-btn-light square-btn btn-hover text-white">Student
                                            Data</a>
                                    </li>
                                    <li>
                                        <a href="/psychometer/{{ $id }}"
                                            class="main-btn primary-btn-light square-btn btn-hover text-white">Affective
                                            Psychomotor Domain</a>
                                    </li>
                                    {{-- <li>
                                        <a href="/comments/{{ $id }}"
                                            class="main-btn primary-btn-light square-btn btn-hover text-white">Comments</a>
                                    </li> --}}
                                    <li>
                                        <a href="/assessment/{{ $id }}"
                                            class="main-btn primary-btn-light square-btn btn-hover text-white">Assessment</a>
                                    </li>

                                    <li>
                                        <a href="/uploadpassport/{{ $id }}"
                                            class="main-btn primary-btn-light square-btn btn-hover text-white">Upload
                                            Passport</a>
                                    </li>
                                    <li>
                                        <a href="/viewresult/{{ $id }}" target="_blank"
                                            class="main-btn primary-btn-light square-btn btn-hover text-white">View
                                            Result</a>
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
