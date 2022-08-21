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
                        <h2>Contact Us</h2>
                        <p class="mt-3"> Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                    </div>
                </div>
            </section>


            <div class="container my-5">

                @if (session('status'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('status') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
                  @endif

                
                <form action="{{ route('contactPost') }}" method="post">
                    @csrf

                    <div class="padding-20 form-edit-profile bg-white">
               
                        <div class="form-group">
                            <label>Full Name</label>
                            <input type="text" class="form-control" value="{{ Auth::user()->name }}" name="name" placeholder="Full Name">
                            @error('name')
                            <p class="fw-light text-danger mt-2">{{ $message }}</p>
                            @enderror
                        </div>
                   
                        <div class="form-group">
                            <label>EMail Address</label>
                            <input type="email" class="form-control"  value="{{ Auth::user()->email }}" name="email" placeholder="Email Address">
                            @error('email')
                            <p class="fw-light text-danger mt-2">{{ $message }}</p>
                           @enderror
                        </div>
                   
                        <div class="form-group">
                            <label>phone</label>
                            <input type="tel" class="form-control"  value="{{ Auth::user()->phone }}"name="phone" placeholder="Phone">
                            @error('phone')
                            <p class="fw-light text-danger mt-2">{{ $message }}</p>
                             @enderror
                        </div>
    
                        <div class="form-group">
                            <label>Message</label>
                            <textarea class="form-control" rows=6" name="msg"  value="{{ old('message') }}" placeholder="Enter Message"></textarea>
                            @error('msg')
                            <p class="fw-light text-danger mt-2">{{ $message }}</p>
                        @enderror
                        </div>

                        <div class="form-group mt-5">
                            <button type="submit" class="btn btn-primary w-100 py-3">Submit</button>
                        </div>
    
                    </div>

                </form>

            </div>

            @include('user.layout.homeFooter')

@endsection

            @include('user.layout.side_bar_modal')
            @include('user.layout.card_model')
