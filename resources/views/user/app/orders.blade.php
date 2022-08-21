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
    <div class="space-sticky"></div>

    <!-- ===================================
                              START BREADCRUMB
                            ==================================== -->

    <section class="container breadcrumb mb-5">
        <div class="content">
            <div class="head">
                <h2>Order</h2>
                <p class="mt-3"> Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
            </div>
        </div>
    </section>


    <div class="container">

        @if (session('status'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('status') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        @if (session('error'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('error') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <section class="margin-t-10 un-connect-wallet margin-b-30">

            <ul class="nav flex-column">

                @foreach ($orders as $order)

                    <li class="nav-item">

                        <a class="nav-link">

                            <div class="d-flex flex-wrap align-items-center">

                                <div class="mx-4 mb-2">
                                    <h2 class="text-name"> <span>Order ID: </span>
                                        <p class="fw-light">{{ $order->order_id }}</p>
                                    </h2>
                                </div>

                                <div class="mx-4 mb-2">
                                    <h2 class="text-name "> <span>Package Name: </span>
                                        <p class="fw-light">{{ $order->package_name }}</p>
                                    </h2>
                                </div>

                                <div class="mx-4 mb-2">
                                    <h2 class="text-name "> <span>Order Date: </span>
                                        <p class="fw-light">{{ $order->created_at->diffForHumans() }}</p>
                                    </h2>
                                </div>

                                <div class="mx-4 mb-2">
                                    <h2 class="text-name "> <span>Package Status: </span>
                                        <p class="fw-light">

                                            @if ($order->status == 0)
                                                <div class="badge bg-secondary rounded-pill"> Pending </div>
                                            @elseif ($order->status == 1)
                                                <div class="badge bg-primary rounded-pill"> Approved </div>
                                            @elseif ($order->status == 2)
                                                <div class="badge bg-success rounded-pill"> Delivered </div>
                                            @else
                                                <div class="badge bg-danger rounded-pill"> Rejected </div>
                                            @endif

                                        </p>
                                    </h2>
                                </div>

                                @if($order->status > 0)

                                @else
                                <div class="mx-4">
                                    <form action="{{ route('cancelOrder', $order->id) }}" method="POST">
                                        @csrf
                                        @method('PATCH')
                                        <button type="submit" class="btn btn-secondary rounded-pill text-light">Cancel
                                            Order</button>
                                    </form>
                                </div>
                                @endif

                            </div>

                        </a>

                    </li>

                @endforeach

            </ul>

        </section>


    </div>

    @include('user.layout.homeFooter')
@endsection

@include('user.layout.side_bar_modal')
@include('user.layout.card_model')

