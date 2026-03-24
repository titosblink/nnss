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

                            <form method="POST" action="{{ route('savenewstudent') }}">
                                @csrf

                                <div class="row">

                                    <!-- Row 1 -->
                                    <div class="col-md-4 mb-3">
                                        <label>Student ID</label>
                                        <input type="text" class="form-control" name="studentid"
                                            placeholder="Student ID">
                                    </div>

                                    <div class="col-md-4 mb-3">
                                        <label>Surname</label>
                                        <input type="text" class="form-control" name="surname" placeholder="Surname">
                                    </div>

                                    <div class="col-md-4 mb-3">
                                        <label>Othername</label>
                                        <input type="text" class="form-control" name="othername"
                                            placeholder="Othername">
                                    </div>

                                    <!-- Row 2 -->
                                    <div class="col-md-4 mb-3">
                                        <label>Parent Status</label>
                                        <select name="parent" class="form-control">
                                            <option value="">-- Select Status --</option>
                                            <option value="Civilian">Civilian</option>
                                            <option value="Officer">Officer</option>
                                            <option value="Other Rank">Other Rank</option>
                                        </select>
                                    </div>

                                    <div class="col-md-4 mb-3">
                                        <label>Class</label>
                                        <select name="clas" class="form-control">
                                            <option value="">-- Select Class --</option>
                                            @foreach ($Classes as $Classes)
                                                <option value="{{ $Classes->name }}">{{ $Classes->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="col-md-4 mb-3">
                                        <label>Gender</label>
                                        <select name="gender" class="form-control">
                                            <option value="">-- Select Gender --</option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label>Division</label>
                                        <select name="division" class="form-control">
                                            <option value="">-- Select Division --</option>
                                            @foreach ($Divisions as $Divisions)
                                                <option value="{{ $Divisions->name }}">{{ $Divisions->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label>House</label>
                                        <select name="house" class="form-control">
                                            <option value="">-- Select House --</option>
                                            @foreach ($Houses as $Houses)
                                                <option value="{{ $Houses->name }}">{{ $Houses->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-12 mb-3">
                                        <label>Date of Birth</label>
                                        <input type="date" name="dob" class="form-control">
                                    </div>

                                    <!-- State of Origin -->
                                    <div class="col-lg-4 col-md-6 col-12 mb-3">
                                        <label>State of Origin</label>
                                        <select name="states" id="state" class="form-control">
                                            <option value="">-- Select State -- </option>
                                            <option value="Abia">Abia</option>
                                            <option value="Adamawa">Adamawa</option>
                                            <option value="Akwa Ibom">Akwa Ibom</option>
                                            <option value="Anambra">Anambra</option>
                                            <option value="Bauchi">Bauchi</option>
                                            <option value="Bayelsa">Bayelsa</option>
                                            <option value="Benue">Benue</option>
                                            <option value="Borno">Borno</option>
                                            <option value="Cross River">Cross River</option>
                                            <option value="Delta">Delta</option>
                                            <option value="Ebonyi">Ebonyi</option>
                                            <option value="Edo">Edo</option>
                                            <option value="Ekiti">Ekiti</option>
                                            <option value="Enugu">Enugu</option>
                                            <option value="Gombe">Gombe</option>
                                            <option value="Imo">Imo</option>
                                            <option value="Jigawa">Jigawa</option>
                                            <option value="Kaduna">Kaduna</option>
                                            <option value="Kano">Kano</option>
                                            <option value="Katsina">Katsina</option>
                                            <option value="Kebbi">Kebbi</option>
                                            <option value="Kogi">Kogi</option>
                                            <option value="Kwara">Kwara</option>
                                            <option value="Lagos">Lagos</option>
                                            <option value="Nasarawa">Nasarawa</option>
                                            <option value="Niger">Niger</option>
                                            <option value="Ogun">Ogun</option>
                                            <option value="Ondo">Ondo</option>
                                            <option value="Osun">Osun</option>
                                            <option value="Oyo">Oyo</option>
                                            <option value="Plateau">Plateau</option>
                                            <option value="Rivers">Rivers</option>
                                            <option value="Sokoto">Sokoto</option>
                                            <option value="Taraba">Taraba</option>
                                            <option value="Yobe">Yobe</option>
                                            <option value="Zamfara">Zamfara</option>
                                            <option value="FCT">Federal Capital Territory (FCT)</option>
                                        </select>
                                    </div>

                                    <!-- Local Government -->
                                    <div class="col-lg-4 col-md-6 col-12 mb-3">
                                        <label>Local Government</label>
                                        <select name="lga" id="lga" class="form-control">
                                            <option value="">-- Select LGA -- </option>
                                        </select>
                                    </div>

                                    <!-- Place of Birth -->
                                    <div class="col-lg-4 col-md-6 col-12 mb-3">
                                        <label>Place of Birth</label>
                                        <input type="text" name="place_of_birth" class="form-control"
                                            placeholder="Place of Birth">
                                    </div>

                                    <!-- Parent Address -->
                                    <div class="col-lg-4 col-md-6 col-12 mb-3">
                                        <label>Parent Address</label>
                                        <input type="text" name="parent_address" class="form-control"
                                            placeholder="Parent Address">
                                    </div>

                                    <!-- Parent Phone -->
                                    <div class="col-lg-4 col-md-6 col-12 mb-3">
                                        <label>Parent Phone Number</label>
                                        <input type="text" name="parent_phone" class="form-control"
                                            placeholder="Parent Phone Number">
                                    </div>

                                </div>

                                <!-- Submit Button -->
                                <div class="row">
                                    <div class="col-12 text-end">
                                        <button type="submit" class="btn btn-success">
                                            Submit
                                        </button>
                                    </div>
                                </div>

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
