@extends('layout.app')


@section('content')

<!--Models section-->

            <section id="hello" class="about-banner bg-mega">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row">
                        <div class="main_home text-center">
                            <div class="about_text">
                                <h1 class="text-white text-uppercase">Store</h1>
                                <ol class="breadcrumb">
                                    <li><a href="{{ route('home') }}">Home</a></li>
                                    <li class="active"><a href="{{ route('store') }}">store</a></li>
                                </ol>
                            </div>
                        </div>
                    </div><!--End off row-->
                </div><!--End off container -->
            </section> <!--End off Home Sections-->

            <section id="teams" class="teams roomy-80">
                <div class="container">
                    <div class="row">
                        <div class="main_teams">
                            <div class="col-md-12">
                                <div class="head_title text-left sm-text-center wow fadeInDown">
                                    <h2>Categories</h2>
                                    @include('layout.inc.messages')
                                    <h5><em>Something abou the store</em></h5>
                                    <div class="separator_left"></div>
                                </div>
                            </div>

                            <div class="col-md-4 col-sm-6">
                                <a href="/category/men">
                                    <div class="team_item m-top-30">
                                        <div class="team_img">
                                            <img src="{{ asset('./images/model-img1.jpg') }}" alt="" />
                                            <div class="team_caption">
                                            <h4 class="">Men</h4>
                                            <h5><em>Something here about men shopping</em></h5>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div><!-- End off col-md-3 -->



                            <div class="col-md-4 col-sm-6">
                                <a href="/category/women">
                                    <div class="team_item m-top-30">
                                    <div class="team_img">
                                        <img src="{{ asset('./images/model-img1.jpg') }}" alt="" />
                                        <div class="team_caption">
                                            <h4 class="">Women</h4>
                                            <h5><em>Something here about women shopping</em></h5>
                                        </div>
                                    </div>
                                </div>
                                </a>
                            </div><!-- End off col-md-3 -->

                            <div class="col-md-4 col-sm-6">
                                <a href="/category/decor">
                                    <div class="team_item m-top-30">
                                    <div class="team_img">
                                        <img src="{{ asset('./images/model-img1.jpg') }}" alt="" />

                                        <div class="team_caption">
                                            <h4 class="">Home Decor</h4>
                                            <h5><em>Something here about Home shopping</em></h5>
                                        </div>
                                    </div>
                                </div>
                                </a>
                            </div><!-- End off col-md-3 -->
                        </div>
                    </div>
                </div>
            </section>


@endsection



@section('scripts')



@endsection
