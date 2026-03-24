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
                        <h6 class="mb-10">Add to Class</h6> {{ $name_of_subject }}<br><br>
                        <div class="mb-3">
                            <i style="color: red">Thick the class to add</i>
                            <hr>
                        </div>
                        <div class="table-wrapper table-responsive">

                            <form action="{{ route('save.classes') }}" method="POST">
                                @csrf
                                <input name="subj" value="{{ $name_of_subject }}" hidden>
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>
                                                <input type="checkbox" id="selectAll">
                                            </th>
                                            <th>Class Name</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($Classes as $class)
                                            <tr>
                                                <td>
                                                    <input type="checkbox" name="classes[]" value="{{ $class->id }}"
                                                        class="classCheckbox">
                                                </td>
                                                <td>{{ $class->name }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>

                                <button type="submit" class="btn btn-success">Save Selected</button>
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
                <!-- end col -->
            </div>
        </div>
        <!-- ========== tables-wrapper end ========== -->
    </div>
    <!-- end container -->
</section>
@include('dashboard.footer')
<script>
    document.getElementById('selectAll').addEventListener('click', function() {
        let checkboxes = document.querySelectorAll('.classCheckbox');
        checkboxes.forEach(cb => cb.checked = this.checked);
    });
</script>
