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
                                        <h6>Assessment</h6>
                                    </span>
                                    <a href="/viewstudent/{{ $id }}" class="btn btn-sm btn-outline-primary">Go
                                        Back</a>
                                </div>
                                <hr>
                                <form action="/storesassessment" method="POST">
                                    @csrf
                                    <input name="idi" value="{{ $id }}" hidden>
                                    <div class="row">
                                        <div class="col-md-2 mb-2">
                                            <label>Subject</label>
                                        </div>
                                        <div class="col-md-2 mb-2">
                                            <label>1st Test</label>
                                        </div>
                                        <div class="col-md-2 mb-2">
                                            <label>2nd Test</label>
                                        </div>
                                        <div class="col-md-2 mb-2">
                                            <label>Exam</label>
                                        </div>
                                        <div class="col-md-2 mb-2">
                                            <label>Subject Position</label>
                                        </div>
                                        <div class="col-md-2 mb-2">
                                            <label>Class Average</label>
                                        </div>


                                        <hr>
                                        @foreach ($Classuser as $Classuser)
                                            <div class="col-md-2 mb-2">
                                                <input name="subject[]" value="{{ $Classuser->subject }}" hidden
                                                    class="form-control"
                                                    style="background-color: transparent; border: none;">
                                                <label>{{ $Classuser->subject }}</label>
                                            </div>
                                            <div class="col-md-2 mb-2">
                                                <input type="number" name="firsttest[]" class="form-control" required
                                                    value="" placeholder="First Test">
                                            </div>
                                            <div class="col-md-2 mb-2">
                                                <input type="number" name="secondtest[]" placeholder="Second Test"
                                                    class="form-control" required value="">
                                            </div>
                                            <div class="col-md-2 mb-2">
                                                <input type="number" name="exams[]" placeholder="Exam"
                                                    class="form-control" required value="">
                                            </div>
                                            <div class="col-md-2 mb-2">
                                                <input type="number" name="sbjposi[]" placeholder="Subject Position"
                                                    class="form-control" required value="">
                                            </div>
                                            <div class="col-md-2 mb-2">
                                                <input type="number" name="classave[]" placeholder="Class Average"
                                                    class="form-control" required value="">
                                            </div>
                                        @endforeach
                                    </div>

                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </form>
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
