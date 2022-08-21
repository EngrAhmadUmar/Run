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
            <div class="space-sticky mt-0"></div>

            <!-- ===================================
              START BREADCRUMB
            ==================================== -->

            <section class="container breadcrumb mb-5">
                <div class="content">
                    <div class="head">
                        <h2>User Password</h2>
                        <p class="mt-3"> Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                    </div>
                </div>
            </section>


            <div class="container my-5">

                <form action="" method="post">

                    <div class="padding-20 form-edit-profile bg-white">
               
                        <div class="form-group">
                            <label>Current password</label>
                            <input type="password" class="form-control" placeholder="Current password">
                        </div>
                   
                        <div class="form-group">
                            <label>New password</label>
                            <input type="email" class="form-control" placeholder="New password">
                        </div>
                   
                        <div class="form-group">
                            <label>Confirm password</label>
                            <input type="tel" class="form-control" placeholder="Confirm password">
                        </div>
    

                        <div class="form-group mt-5">
                            <button type="submit" class="btn btn-primary w-100 py-3">Update</button>
                        </div>
    
                    </div>

                </form>

            </div>


            @include('user.layout.homeFooter')

@endsection

            @include('user.layout.side_bar_modal')
            @include('user.layout.card_model')
