<main class="main-wrapper">
    <!-- ========== header start ========== -->
    <header class="header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-5 col-md-5 col-6">
                    <div class="header-left d-flex align-items-center">

                        <div class="header-search d-none d-md-flex">
                            <form action="#">
                                <input type="text" placeholder="{{ \Carbon\Carbon::now()->format('D, d M y') }}"
                                    disabled />
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-md-7 col-6">
                    <div class="header-right">
                        <div class="profile-box ml-15">
                            <button class="dropdown-toggle bg-transparent border-0" type="button" id="profile"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <div class="profile-info">
                                    <div class="info">
                                        <div class="image">
                                            <img src="{{ asset('assets/img/profile.png') }}" alt="" />
                                        </div>
                                        <div>
                                            <h6 class="fw-500">

                                                {{ Auth::user()->name }}

                                            </h6>
                                            <p>

                                                {{ Auth::user()->status }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="profile">

                                <li>
                                    <a class="dropdown-item" href="/changepassword">
                                        <i class="lni lni-pencil"></i>Change Password
                                    </a>
                                </li>


                                <li>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <i class="lni lni-exit"></i> {{ __('Logout') }}
                                    </a>
                                </li>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>

                            </ul>
                        </div>
                        <!-- profile end -->
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- ========== header end ========== -->
