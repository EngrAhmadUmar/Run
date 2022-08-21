@extends('user.layout.app')

@section('content')

<div class="space-sticky"></div>
<div class="space-sticky"></div>
<div class="space-sticky"></div>
<div class="space-sticky d-md-none"></div>

<!-- ===================================
  START THE FOOTER - BUTTONS
==================================== -->

<div class="container text-center m-auto">
    <section class="bloack-get-started"">
        <section class="padding-20 form-edit-profile margin-b-10">

            <div class="account_logo mb-5">
                <img class="logo mb-3" src="{{ asset('user/images/ezgif.png') }}" alt="image">
                <h4 class="">Lawlan Logistics</h4>
            </div>

                <p class="text-center" style="font-size: 17px">Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn't receive the email, we will gladly send you another.</p>


                @if (session('message'))
                    <div class="mb-4 text-success">
                        {{ session('message') }}
                    </div>
                @endif

                <section class="copyright-mark margin-t-10 margin-b-30">

                    <div class="d-flex mt-5">
                
                        <form class="mx-5 w-100" method="POST" action="{{ route('verification.send') }}">
                            @csrf
                            <div>
                                <button type="submit" class="btn btn-dark text-white w-100">
                                    Resend verification Email
                                </button>
                            </div>
                        </form>
            
                        <form class="w-100" method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="btn btn-dark text-white w-100">
                                Logout
                            </button>
                        </form>

                    </div>
                    
                </section>

        </section>
    </section>
</div>

    @include('user.layout.footer')

@endsection
