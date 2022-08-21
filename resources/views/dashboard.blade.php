@extends('user.layout.app')

@section('content')
    <!-- ===================================
                  Header
                ==================================== -->

    @include('user.layout.header')


    <!-- ===================================
                  space sticky
                ==================================== -->
    <div class="space-sticky"></div>
    <div class="space-sticky"></div>

    <!-- ===================================
                  START THE FOOTER - BUTTONS
                ==================================== -->

    <div class="container">
        <div id="googleMap"></div>
    </div>

    <div class="container">

        <div class="p-4">

              @if (session('status'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('status') }} <div class="">  <a class="" href="{{ route('order') }}">Check all orders</a> </div>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
                  @endif

              @if (session('error'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('error') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
                  @endif

            <form action="{{ route('postOrder') }}" method="POST" autocomplete="off">
                @csrf

                <div class="bk-social-networks">

                    <div class="form-group with_icon">
                        <label>Pick up Address</label>
                        <div class="input_group">
                            <input type="text" class="form-control" id="pickup" name="pickup"
                                placeholder="Pick up Address" value="{{ old('pickup') }}">
                            <input id="origin" name="origin" required="" type="hidden" />
                            <div class="icon">
                                <i class="ri-map-pin-fill"></i>
                            </div>
                        </div>

                        @error('pickup')
                            <p class="text-danger pt-1">{{ $message }}</p>
                        @enderror

                    </div>

                    <div class="form-group with_icon">
                        <label>Drop off Address</label>
                        <div class="input_group">
                            <input type="text" class="form-control" name="dropoff" id="dropoff"
                                placeholder="Drop off Address" value="{{ old('dropoff') }}" >
                            <input id="destination" name="destination" required="" type="hidden" />
                            <div class="icon">
                                <i class="ri-pin-distance-fill"></i>
                            </div>
                        </div>

                        @error('dropoff')
                        <p class="text-danger pt-1">{{ $message }}</p>
                      @enderror

                    </div>

                    <div class="row">
                        <div class="col-8"></div>
                        <div class="col-4 d-flex justify-content-end">
                            <button id="distance_form" type="submit" class="btn btn-primary py-2 mb-4 text-white w-100">Get
                                price</button>
                        </div>
                    </div>

                    <div class="form-group with_icon">
                        <label>Delivery Price</label>
                        <div class="input_group">
                            <input id="price" name="price" type="text" class="form-control" value="{{ old('price') }}" placeholder="Delivery Price">
                            <div class="icon">
                                <i class="ri-bank-fill"></i>
                            </div>
                        </div>

                        @error('price')
                        <p class="text-danger pt-1">{{ $message }}</p>
                       @enderror

                    </div>

                    <div class="form-group with_icon">
                        <label>Package Name</label>

                        <div class="input_group">
                            <input type="text" class="form-control" id="package_name" name="package_name"
                                placeholder="Package Name" value="{{ old('package_name') }}" >
                            <div class="icon">
                                <i class="ri-park-fill"></i>
                            </div>
                        </div>

                        @error('package_name')
                        <p class="text-danger pt-1">{{ $message }}</p>
                       @enderror

                    </div>

                    <div class="form-group with_icon">
                        <label>Receiver's Name</label>

                        <div class="input_group">
                            <input type="text" class="form-control" id="receiver_name" name="receiver_name"
                                placeholder="Receiver's Name" value="{{ old('receiver_name') }}">
                            <div class="icon">
                                <i class="ri-user-fill"></i>
                            </div>
                        </div>

                        @error('receiver_name')
                        <p class="text-danger pt-1">{{ $message }}</p>
                       @enderror

                    </div>


                    <div class="form-group with_icon">
                        <label>Receiver's phone Number</label>

                        <div class="input_group">
                            <input type="text" class="form-control" id="phone" name="receiver_phone"
                                placeholder="Receiver's phone Number" value="{{ old('receiver_phone') }}">
                            <div class="icon">
                                <i class="ri-phone-fill"></i>
                            </div>
                        </div>

                        @error('receiver_phone')
                        <p class="text-danger pt-1">{{ $message }}</p>
                       @enderror

                    </div>

                    <p style="font-size: 16px" class="text-danger" id="loading"></p>

                    <div id="result" class="total_price mt-3">
                        <p style="font-size: 16px"> <span id="subject"></span> <span class="text-success" id="per_km">
                            </span> </p>
                    </div>


                    <div class="row d-flex align-items-center">

                        <div class="col-1 reset_btn">
                            <button type="reset">
                                <div class="icon">
                                    <i class="ri-restart-line"></i>
                                </div>
                            </button>
                        </div>

                        <div class="col-1 d-md-none`"></div>

                        <div class="col-10 d-flex justify-content-end 100">
                            <div class="form-group mt-4 w-100">
                                <button type="submit"
                                class="btn btn-primary py-3 text-white w-100">Order</button>
                            </div>
                        </div>

                    </div>

                </div>
            </form>

        </div>

    </div>

    {{-- <form id="paymentForm">
                <div class="form-group">
                  <label for="email">Email Address</label>
                  <input type="email" id="email-address" required value="{{ Auth::user()->email }}" />
                </div>
                <div class="form-group">
                  <label for="amount">Amount</label>
                  <input type="tel" id="amount" name="trip_price" value="" required />
                </div>
                <div class="form-group">
                  <label for="first-name">First Name</label>
                  <input type="text" id="first-name" value="{{ Auth::user()->name }}" />
                </div>
                <div class="form-submit">
                  <button type="submit" onclick="payWithPaystack()"> Pay </button>
                </div>
            </form> --}}

    @include('user.layout.homeFooter')
@endsection

@include('user.layout.side_bar_modal')
@include('user.layout.card_model')


