@extends('user.layout.app')

@section('content')

    <div class="container">

        <section class="bloack-get-started" style="margin-top: 30px;">
            <section class="padding-20 form-edit-profile margin-b-10">

                <div class="account_logo mb-5">
                    <img class="logo mb-3" src="{{ asset('user/images/ezgif.png') }}" alt="image">
                    <h4 class="">Lawlan Logistics</h4>
                </div>

                <form action="{{ route('register') }}" method="POST">
                    @csrf

                    <div class="bk-social-networks">

                        <div class="form-group with_icon">
                            <label>Full Name</label>
                            <div class="input_group">
                                <input type="text" class="form-control" name="name" placeholder="Full Name" value="{{ old('name') }}" >
                                <div class="icon">
                                    <i class="ri-user-fill"></i>
                                </div>
                            </div>
                            @error('name')
                                <p class="fw-light text-danger mt-2">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="form-group with_icon">
                            <label>username</label>
                            <div class="input_group">
                                <input type="text" class="form-control" name="username" value="{{ old('username') }}" placeholder="Username">
                                <div class="icon">
                                    <i class="ri-user-smile-fill"></i>
                                </div>
                            </div>
                            @error('username')
                            <p class="fw-light text-danger mt-2">{{ $message }}</p>
                           @enderror
                        </div>

                        <div class="row">

                            <div class="col-lg-6">
                                <div class="form-group with_icon">
                                    <label>Email Address</label>
                                    <div class="input_group">
                                        <input type="email" name="email" value="{{ old('email') }}" class="form-control" placeholder="Email Address">
                                        <div class="icon">
                                            <i class="ri-mail-fill"></i>
                                        </div>
                                    </div>
                                    @error('email')
                                    <p class="fw-light text-danger mt-2">{{ $message }}</p>
                                   @enderror
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group with_icon">
                                    <label>Phone Number</label>
                                    <div class="input_group">
                                        <input type="tel" class="form-control" name="phone" value="{{ old('phone') }}" placeholder="phone Number">
                                        <div class="icon">
                                            <i class="ri-phone-fill"></i>
                                        </div>
                                    </div>
                                    @error('phone')
                                    <p class="fw-light text-danger mt-2">{{ $message }}</p>
                                   @enderror
                                </div>
                            </div>

                        </div>

                        <div class="row">

                            <div class="col-lg-6">

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

                            </div>

                            <div class="col-lg-6">

                                <div class="form-group with_icon">
                                    <label>Confrim Password</label>
                                    <div class="input_group">
                                        <input type="password" class="form-control"
                                            placeholder="Confirm Password" name="password_confirmation" >
                                        <div class="icon">
                                            <i class="ri-lock-fill"></i>
                                        </div>
                                    </div>
                                </div>

                                <!-- <a href="">
                                    <p style="font-size: 16px;" class="mt-4">Forget password?</p>
                                </a> -->

                            </div>

                        </div>

                        <div class="form-group mt-5">
                            <button type="submit" class="btn btn-primary w-100 py-3">Register</button>
                        </div>

                        <p style="font-size: 16px;" class="mt-4 text-center"> Already have an account ? <a
                                href="{{ route('login') }}">Login</a> </p>

                    </div>
                </form>

            </section>
        </section>

    </div>

    @include('user.layout.footer')

@endsection
