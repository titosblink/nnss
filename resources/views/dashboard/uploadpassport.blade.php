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
                                <form action="/uploadpassport" method="POST" enctype="multipart/form-data">
                                    @csrf

                                    <!-- Select Image -->
                                    <div class="mb-3">
                                        <label for="passport" class="form-label"><b>Select Passport</b></label>
                                        <input type="file" name="passport" id="passport" class="form-control"
                                            accept="image/*" required>
                                    </div>

                                    <!-- Image Preview -->
                                    <div class="mb-3">
                                        <label class="form-label"><b>Preview</b></label><br>
                                        <div style="width: 120px; height: 120px;">
                                            <img id="previewImage"
                                                src="{{ $ppt ? asset('passport/' . $ppt) : asset('assets/img/passport.jpeg') }}"
                                                style="width: 100%; height: 100%; border-radius: 50%; object-fit: cover;">
                                        </div>
                                    </div>

                                    <!-- Hidden Student ID -->
                                    <input type="hidden" name="student_id" value="{{ $id }}">

                                    <!-- Submit Button -->
                                    <div class="mb-3">
                                        <button type="submit" class="btn btn-primary">Upload Passport</button>
                                    </div>
                                </form>
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
<script>
    document.getElementById('passport').addEventListener('change', function(event) {
        const file = event.target.files[0];
        if (file) {
            const preview = document.getElementById('previewImage');
            preview.src = URL.createObjectURL(file);
        }
    });
</script>
