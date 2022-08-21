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
                        <h2>Help Center</h2>
                        <p class="mt-3"> Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                    </div>
                </div>
            </section>


            <div class="container my-5">
                
               
                <div class="description mb-5">
                    <h4>Frequent Questions</h4>
                    <p>
                        We get asked these questions a lot, so we made this small section to help you out identifying
                        what you need faster.
                    </p>
                </div>
                
                <div class="accordion" id="accordionExample">

                    <div class="accordion-item mb-4">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                What does Lawlan Logistics does ?
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed ipsum error dolore iusto hic expedita?
                            </div>
                        </div>
                    </div>
                    
                    <div class="accordion-item mb-4">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                What does Lawlan Logistics does ?
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit tempora debitis error recusandae. Voluptatem, dolores quidem quam deleniti dolore aliquid!
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item mb-4">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                What does Lawlan Logistics does ?
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit tempora debitis error recusandae. Voluptatem, dolores quidem quam deleniti dolore aliquid!
                            </div>
                        </div>
                    </div>

                </div>

            </div>


            @include('user.layout.homeFooter')

@endsection

            @include('user.layout.side_bar_modal')
            @include('user.layout.card_model')
