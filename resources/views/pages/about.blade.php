@extends('layout.app')



@section('content')

            <section id="hello" class="about-banner bg-mega">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row">
                        <div class="main_home text-center">
                            <div class="about_text">
                                <h1 class="text-white text-uppercase">About</h1>
                                <ol class="breadcrumb">
                                    <li><a href="{{ route('home') }}">Home</a></li>
                                    <li class="active"><a href="{{ route('about') }}">About</a></li>
                                </ol>
                            </div>
                        </div>
                    </div><!--End off row-->
                </div><!--End off container -->
            </section> <!--End off Home Sections-->

           <!--About Sections-->
            <section id="feature" class="ab_feature roomy-100">
                <div class="container">
                    <div class="row">
                        <div class="main_ab_feature">

                            <div class="col-md-6">
                                <!-- Head Title -->
                                <div class="head_title">
                                    <h2>Story about us</h2>
                                    <h5><em>Pouseidon brings the waves to somewhere so far,
                                            with beautiful & elegant</em></h5>
                                    <div class="separator_left"></div>
                                </div><!-- End off Head Title -->

                                <div class="ab_feature_content wow fadeIn m-top-40">
                                    <p>Eusus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores
                                        legere me lius quod ii legunt saepius. Duis autem vel eum iriure dolor in hendrerit vulputate
                                        velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et
                                        accumsan et iusto odio dignissim qui blandit praesent luptatum</p>

                                    <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, 
                                        vel illum dolore feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim</p>

                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="ab_feature_photo wow fadeIn sm-m-top-40">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-6">
                                            <div class="ab_feature_item sm-m-top-20">
                                                <img src="{{ asset('./images/ab-f-img1.jpg') }}" alt="" />
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="ab_feature_item sm-m-top-20">
                                                <img src="{{ asset('./images/ab-f-img2.jpg') }}" alt="" />
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="ab_feature_item sm-m-top-20">
                                                <img src="{{ asset('./images/ab-f-img3.jpg') }}" alt="" />
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="ab_feature_item m-top-20">
                                                <img src="{{ asset('./images/ab-f-img4.jpg') }}" alt="" />
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="ab_feature_item m-top-20">
                                                <img src="{{ asset('./images/ab-f-img5.jpg') }}" alt="" />
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="ab_feature_item m-top-20">
                                                <img src="{{ asset('./images/ab-f-img6.jpg') }}" alt="" />
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="ab_feature_item m-top-20">
                                                <img src="{{ asset('./images/ab-f-img7.jpg') }}" alt="" />
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="ab_feature_item m-top-20">
                                                <img src="{{ asset('./images/ab-f-img8.jpg') }}" alt="" />
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="ab_feature_item m-top-20">
                                                <img src="{{ asset('./images/ab-f-img9.jpg') }}" alt="" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!--End off row-->
                </div><!--End off container -->
            </section>


            <!--Simple Section-->
            <section id="simple" class="simple bg-grey roomy-80">
                <div class="container">
                    <div class="row">
                        <div class="main_simple text-center">
                            <div class="col-md-12">
                                <h2>Simplicity isn’t simple</h2>
                                <p>Eusus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere 
                                    me lius quod ii legunt saepius. Duis autem vel eum iriure dolor in hendrerit vulputate velit esse
                                    molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan blandit
                                    praesent luptatum.</p>

                                <a href="{{ route('contact') }}" class="btn btn-default m-top-40">Contact Us <i class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

@endsection

@section('scripts')


@endsection