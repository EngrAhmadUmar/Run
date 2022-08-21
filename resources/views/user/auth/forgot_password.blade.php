@extends('user.layout.app')

@section('content')

<div class="space-sticky"></div>
<div class="space-sticky"></div>
<div class="space-sticky d-md-none"></div>

<!-- ===================================
  START THE FOOTER - BUTTONS
==================================== -->

<div class="container">
    <section class="bloack-get-started"">
        <section class="padding-20 form-edit-profile margin-b-10">

            <div class="account_logo mb-5">
                <img class="logo mb-3" src="{{ asset('user/images/ezgif.png') }}" alt="image">
                <h4 class="">Lawlan Logistics</h4>
            </div>

            <form action="{{ route('password.email') }}" method="post">
                @csrf

                <div class="bk-social-networks mt-5">

                    <div class="form-group with_icon mb-5">
                        <label>Email Address</label>
                        <div class="input_group">
                            <input type="email" class="form-control" name="email" placeholder="Email Address">
                            <div class="icon">
                                <i class="ri-mail-fill"></i>
                            </div>
                        </div>

                        @error('email')
                            <p class="fw-light text-danger mt-2">{{ $message }}</p>
                        @enderror

                        @if (session('status'))
                            <span class="text-success mt-2">{{ session('status') }} </span>
                        @endif

                    </div>

                    <div class="form-group mt-5">
                        <button type="submit" class="btn btn-primary w-100 py-3">Reset Password</button>
                    </div>

                    <p style="font-size: 16px;" class="mt-4 text-center"> Already have an account ? <a href="{{ route('login') }}">Register</a> </p>

                </div>
            </form>

        </section>
    </section>
</div>

    @include('user.layout.footer')

@endsection
