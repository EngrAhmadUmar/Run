@extends('user.layout.app')

@section('content')

             <!-- ===================================
              Header
            ==================================== -->

            @include('user.layout.header')



            <!-- ===================================
              PAGE STATIC
            ==================================== -->
            <div class="space-sticky"></div>

            <!-- ===================================
              START BREADCRUMB
            ==================================== -->

            <section class="container breadcrumb mb-5">
                <div class="content">
                    <div class="head">
                        <h2>User Profile</h2>
                        <p class="mt-3"> Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                    </div>
                </div>
            </section>

            <div class="container my-5">

                <section class="un-creator-ptofile mb-5">
                    <!-- head -->

                    <div class="head">
                        <div class="cover-image d-flex align-items-center justify-content-center overlay">
                            <picture>
                                <img src="images/bg-gradient.jpg" alt="cover image">
                            </picture>
                            <div class="position-absolute">
                            </div>
                        </div>

                        <div class="text-user-creator">
                            <div class="d-flex align-items-center">

                                <div class="user-img d-flex align-items-center justify-content-center position-relative">
                                    <picture>
                                        <img class="showImage" src="{{ asset('upload/profile/'.Auth::user()->profile_image ) }}" alt="creator image">
                                    </picture>
                                    <div class="position-absolute">
                                        <button type="button" class="btn btn-upload-icon">
                                            <div class="icon">
                                                <i class="ri-camera-line"></i>
                                            </div>
                                        </button>
                                    </div>
                                </div>

                                <div class="text">
                                    <h3 class="size-15 weight-500">Upload Profile Photo</h3>
                                    <p class="size-11 weight-400">We recommend a 300x300px JPG, PNG, SVG, WEBP or GIF (1MB
                                        max size)
                                    </p>
                                </div>


                            </div>

                            <a href="{{ route('changePassword') }}">
                                <button type="button" class="btn btn-copy-address mt-3">

                                    <div class="icon-box ">
                                        <i class="ri-lock-line"></i>
                                    </div>

                                    <p class="m-3">Change Pasword</p>

                            </button>
                               </a>

                        </div>


                    </div>

                </section>

                @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            @if (session('error'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('error') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

                <form data-parsley-validate="" action="{{ route('profileUpdate') }}" method="POST" enctype="multipart/form-data" >
                    @csrf
                    @method('put')

                    <div class="padding-20 form-edit-profile bg-white">

                        <div class="form-group">
                            <label>Full Name</label>
                            <input type="text" class="form-control" id="user_name" name="name" placeholder="Full Name" data-parsley-trigger="change" required="" >
                        </div>

                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" class="form-control" id="username" name="username" placeholder="User Name" data-parsley-trigger="change" required="" >
                        </div>

                        <div class="form-group">
                            <label>Email Address</label>
                            <input type="email" class="form-control" id="user_email" name="email" placeholder="Email Address" data-parsley-trigger="change" required=""d data-parsley-type="email">
                        </div>

                        <div class="form-group">
                            <label>phone</label>
                            <input type="tel" class="form-control" id="user_phone" name="phone" placeholder="Phone" data-parsley-trigger="change" required="" data-parsley-type="number" >
                        </div>

                        <div class="form-group">
                            <label>Profile Image</label>
                            <input style="height: auto;" type="file" class="form-control" id="profile_image" name="profile_image" placeholder="profile image" >
                        </div>


                        <div class="form-group mt-5">
                            <button  type="submit" class="btn btn-primary w-100 py-3">Update</button>
                        </div>

                    </div>

                </form>

            </div>


            @include('user.layout.homeFooter')

@endsection

            @include('user.layout.side_bar_modal')
            @include('user.layout.card_model')

                              <script>
                                    $(document).ready(function(){
                                    $('#profile_image').change(function(e){
                                    var reader = new FileReader();
                                    reader.onload = function(e){
                                        $('.showImage').attr('src', e.target.result)
                                    }
                                    reader.readAsDataURL(e.target.files['0'])
                                    })
                                })
                                </script>
