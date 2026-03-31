@include('header')
<div class="col-lg-3 col-md-6 mx-auto text-center">
    <h4 class="text-white mb-4">Check Result</h4>
    <p>Enter your Registration Number</p>

    <div class="position-relative w-100 mx-auto" style="max-width: 300px;">
        <form method="POST" action="/myresult">
            @csrf
            <input class="form-control bg-transparent w-100 py-3 ps-4 pe-5 text-center" name="studentid" type="text"
                placeholder="Registration No.">
            <br>
            <button type="submit" class="btn btn-light">
                Continue
            </button>
        </form>
    </div>
</div>
@include('footer')
