
            <!-- ===================================
              START THE HEADER
            ==================================== -->
            <header class="default heade-sticky">
                
                    <a href="{{ route('dashboard') }}">
                        <div class="un-title-page">
                            <h1>Lawlan Logistics</h1>
                        </div>
                     </a>

                <div class="un-block-right">
                    {{-- <div class="un-notification">
                        <a href="{{ route('chat') }}" aria-label="activity">
                            <i class="ri-message-line"></i>
                        </a>
                        <span class="bull-activity"></span>
                    </div> --}}
                    <div class="un-user-profile">
                        <a href="{{ route('profile') }}" aria-label="profile">
                            <picture>
                                <img class="img-avatar" src="{{ asset('user/images/1.jpg') }}" alt="img account">
                            </picture>
                        </a>
                    </div>
                    <!-- menu-sidebar -->
                    <div class="menu-sidebar">
                        <button type="button" name="sidebarMenu" aria-label="sidebarMenu" class="btn"
                            data-bs-toggle="modal" data-bs-target="#mdllSidebar-connected">
                            <svg xmlns="http://www.w3.org/2000/svg" width="19" height="9.3" viewBox="0 0 19 9.3">
                                <g id="Group_8081" data-name="Group 8081" transform="translate(-329 -37)">
                                    <rect id="Rectangle_3986" data-name="Rectangle 3986" width="19" height="2.3"
                                        rx="1.15" transform="translate(329 37)" fill="#222032" />
                                    <rect id="Rectangle_3987" data-name="Rectangle 3987" width="19" height="2.3"
                                        rx="1.15" transform="translate(329 44)" fill="#222032" />
                                </g>
                            </svg>
                        </button>
                    </div>
                </div>
            </header>



            