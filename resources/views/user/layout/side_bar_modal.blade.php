    <!-- ===================================
      START THE MODAL SIDEBAR MENU - CONNECTED
    ==================================== -->

    <div class="modal sidebarMenu -left fade" id="mdllSidebar-connected" tabindex="-1"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">

                <div class="modal-header d-block pb-1">

                    <!-- un-user-profile -->
                    <div class="un-user-profile">
                        <div class="image_user">
                            <picture>
                                <img src="{{ asset('user/images/1.jpg') }}" alt="image">
                            </picture>
                        </div>
                    </div>

                    <button type="button" class="btn btnClose" data-bs-dismiss="modal" aria-label="Close">
                        <i class="ri-close-fill"></i>
                    </button>

                    <!-- cover-balance -->
                    <div class="cover-balance mt-5">
                        <div class="un-balance">
                            <div class="content-balance">
                                <div class="head-balance">
                                    <h4> {{ Auth::user()->username }} </h4>
                                </div>
                            </div>
                        </div>
                        <a href="{{ route('profile') }}">
                            <button type="button" class="btn btn-sm-size bg-white text-dark rounded-pill"
                            data-bs-toggle="modal" data-bs-dismiss="modal" data-bs-target="#mdllUploadItem">
                            Profile
                        </button>
                        </a>
                    </div>

                </div>

                <div class="modal-body">
                    <ul class="nav flex-column -active-links">

                        <li class="nav-item">
                            <a class="nav-link" href="/dashboard">
                                <div class="icon_current">
                                    <i class="ri-home-5-line"></i>
                                </div>
                                <div class="icon_active">
                                    <i class="ri-home-5-fill"></i>
                                </div>
                                <span class="title_link">Home</span>
                            </a>
                        </li>


                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('order') }}">
                                <div class="icon_current">
                                    <i class="ri-truck-line"></i>
                                </div>
                                <div class="icon_active">
                                    <i class="ri-truck-fill"></i>
                                </div>
                                <span class="title_link">Orders</span>
                            </a>
                        </li>

                        {{-- <li class="nav-item">
                            <a class="nav-link" href="{{ route('chat') }}">
                                <div class="icon_current">
                                    <i class="ri-message-line"></i>
                                </div>
                                <div class="icon_active">
                                    <i class="ri-message-fill"></i>
                                </div>
                                <span class="title_link">Chat Lawlan Logistics</span>
                            </a>
                        </li> --}}

                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('about') }}">
                                <div class="icon_current">
                                    <i class="ri-file-paper-line"></i>
                                </div>
                                <div class="icon_active">
                                    <i class="ri-file-paper-fill"></i>
                                </div>
                                <span class="title_link">About Us</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('contact') }}">
                                <div class="icon_current">
                                    <i class="ri-contacts-book-line"></i>
                                </div>
                                <div class="icon_active">
                                    <i class="ri-contacts-book-fill"></i>
                                </div>
                                <span class="title_link">Contact Us</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('help') }}">
                                <div class="icon_current">
                                    <i class="ri-question-line"></i>
                                </div>
                                <div class="icon_active">
                                    <i class="ri-question-line"></i>
                                </div>
                                <span class="title_link">Help Center</span>
                            </a>
                        </li>

                    </ul>
                </div>

                <div class="modal-footer">

                    <form class="w-100" action="{{ route('logout') }}" method="post">
                        @csrf

                        <button type="submit" class="btn btn-dark text-white roundedl w-100">
                        Logout  </button>

                    </form>

                </div>
                
            </div>
        </div>
    </div>

    <!-- ===================================
      START STATUS CONNECTION
    ==================================== -->