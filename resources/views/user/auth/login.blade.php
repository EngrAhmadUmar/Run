@extends('user.layout.app')

@section('content')

           <!-- ===================================
              PAGE STATIC
            ==================================== -->
            <!-- <div class="space-sticky"></div> -->
            <div class="space-sticky d-md-none"></div>
            <!-- ===================================
              START THE FOOTER - BUTTONS
            ==================================== -->
            <div class="container">

                <section class="bloack-get-started" style="margin-top: 30px;">
                    <section class="padding-20 form-edit-profile margin-b-10">

                        <div class="account_logo mb-5">
                            <img class="logo mb-3" src="{{ asset('user/images/ezgif.png') }}" alt="image">
                            <h4 class="">Lawlan Logistics</h4>
                        </div>

                        <form action="{{ route('loginStore') }}" method="post">
                            @csrf

                            <div class="bk-social-networks mt-5">

                                <div class="form-group with_icon mb-2">
                                    <label>Email Address</label>
                                    <div class="input_group">
                                        <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email Address">
                                        <div class="icon">
                                            <i class="ri-mail-fill"></i>
                                        </div>
                                    </div>
                                        @error('email')
                                        <p class="fw-light text-danger mt-2">{{ $message }}</p>
                                       @enderror
                                </div>


                                <div class="form-group with_icon">
                                    <label>Password</label>
                                    <div class="input_group">
                                        <input type="password" class="form-control" name="password" placeholder="passsword">
                                        <div class="icon">
                                            <i class="ri-lock-fill"></i>
                                        </div>
                                    </div>
                                    @error('password')
                                        <p class="fw-light text-danger mt-2">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="row d-flex align-items-center">

                                    <div class="col-6">
                                        <!-- Remember Me -->
                                        <div class="block">
                                            <label for="remember_me" class="">
                                                <input id="remember_me" type="checkbox"name="remember">
                                                <span class="">'Remember me</span>
                                            </label>
                                        </div>

                                    </div>

                                    <div class="col-6 d-flex justify-content-end">
                                        <a href="{{ route('password.email') }}">
                                            <p style="font-size: 16px;">Forget password?</p>
                                        </a>
                                    </div>

                                </div>
                                

                                <div class="form-group mt-5">
                                    <button type="submit" class="btn btn-primary w-100 py-3">Login</button>
                                </div>

                                <p style="font-size: 16px;" class="mt-4 text-center"> I don't have an account ? <a
                                        href="{{ route('register') }}">Register</a> </p>

                            </div>
                        </form>

                    </section>
                </section>

            </div>

    @include('user.layout.footer')

@endsection
