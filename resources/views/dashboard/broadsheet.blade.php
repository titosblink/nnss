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

        <div style="display: flex; justify-content: space-between; align-items: center;">
            CLICK ON ANY OF THE CLASSES BELOW TO VIEW ITS BROADSHEET FOR THIS TERM
        </div>
        <div class="tables-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card-style mb-30">

                        <div class="mb-3">
                            <div class="col-lg-12">

                                <ul class="buttons-group">
                                    @foreach ($Classes as $Classes)
                                        <li>
                                            <a target="_blank" href="/broadsheet_class/{{ $Classes->id }}"
                                                class="main-btn primary-btn-light square-btn btn-hover text-white">
                                                {{ $Classes->name }}</a>
                                        </li>
                                    @endforeach


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
