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
                                        <h6>Student Data</h6>
                                    </span>
                                    <a href="/viewstudent/{{ $id }}" class="btn btn-sm btn-outline-primary">Go
                                        Back</a>
                                </div>
                                <hr>
                                <form action="/storestudent" method="POST">
                                    @csrf
                                    <input name="idi" value="{{ $id }}" hidden>
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label>Date of Birth</label>
                                            <input type="date" name="dob" class="form-control" required
                                                value="{{ $Students->dob }}">
                                        </div>

                                        <div class="col-md-6 mb-3">
                                            <label>State of Origin</label>
                                            <select name="states" id="state" class="form-control">
                                                <option value="">-- Select State -- {{ $Students->states }}
                                                </option>
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
                                            </select>>
                                        </div>

                                        <div class="col-md-6 mb-3">
                                            <label>Local Government</label>
                                            <select name="lga" id="lga" class="form-control">
                                                <option value="">-- Select LGA -- {{ $Students->lga }}</option>
                                            </select>
                                        </div>

                                        <div class="col-md-6 mb-3">
                                            <label>Place of Birth</label>
                                            <input type="text" name="place_of_birth" class="form-control"
                                                value="{{ $Students->place_of_birth }}">
                                        </div>

                                        <div class="col-md-12 mb-3">
                                            <label>Parent Home Address</label>
                                            <textarea name="parent_address" class="form-control" rows="2">{{ $Students->parent }}</textarea>
                                        </div>

                                        <div class="col-md-6 mb-3">
                                            <label>Parent Phone</label>
                                            <input type="text" name="parent_phone" class="form-control"
                                                value="{{ $Students->parent_phone }}">
                                        </div>

                                        <div class="col-md-6 mb-3">
                                            <label>House</label>
                                            <select name="house" class="form-control">
                                                <option value="">--Select House-- {{ $Students->house }}
                                                </option>
                                                @foreach ($Houses as $Houses)
                                                    <option value="{{ $Houses->name }}">{{ $Houses->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="col-md-6 mb-3">
                                            <label>Division</label>
                                            <select name="division" class="form-control">
                                                <option value="">--Select Division-- {{ $Students->division }}
                                                </option>
                                                @foreach ($Divisions as $Divisions)
                                                    <option value="{{ $Divisions->name }}">{{ $Divisions->name }}
                                                    </option>
                                                @endforeach

                                            </select>
                                        </div>

                                        <div class="col-md-6 mb-3">
                                            <label>Parent Status</label>
                                            <select name="parent_status" class="form-control">
                                                <option value="">--Select Status-- {{ $Students->parent }}
                                                </option>
                                                <option value="Civilian">Civilian</option>
                                                <option value="Officer">Officer</option>
                                                <option value="Other Rank">Other Rank</option>
                                            </select>
                                        </div>

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
