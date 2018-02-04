@extends('layout.app')

@section('content')

<!--Home Sections-->
        <section id="hello" class="home bg-mega">
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="main_home text-center">
                        <div class="home_text">
                            <h4 class="text-white text-uppercase">a new creative studio</h4>
                            <h1 class="text-white text-uppercase">good design is always in season</h1>
                            <div class="separator"></div>
                            <h5 class=" text-uppercase text-white"><em>One day, the dream will come true with lorem ipsum dolor sit amet, 
                                        consectetuer adipiscing elit, nummy nibh euismod tincidunt laoreet.</em></h5>
                        </div>
                    </div>
                </div>
                <!--End off row-->
            </div>
            <!--End off container -->
        </section>
        <!--End off Home Sections-->

        <!--Our Work Section-->
            <div class="container">
                <div class="row">
                    <div class="main_work">
                        <div class="col-md-7 col-md-offset-5 col-sm-12 col-xs-12">
                            <div class="work_item">
                                <div class="row">
                                    <div class="col-md-7 col-sm-12 col-xs-12 text-right pull-right sm-text-center">
                                        <div class="work_item_img">
                                            <img src="{{ asset('./images/work-img1.jpg') }}" alt="" />
                                        </div>
                                    </div>
                                    <div class="col-md-5 col-sm-12 col-xs-12 text-right pull-left sm-text-center">
                                        <div class="work_item_details m-top-80 sm-m-top-20">
                                            <h4>Fashionista</h4>
                                            <div class="work_separator1"></div>
                                            <p class="m-top-40 sm-m-top-10">Duis autem vel eum iriure dolor in hendrerit in vulputate velit molestie consequat</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End off work-item -->
                        <div class="col-md-7 col-sm-12 col-xs-12">
                            <div class="work_item">
                                <div class="row">
                                    <div class="col-md-7 col-sm-12 col-xs-12">
                                        <div class="work_item_img sm-text-center sm-m-top-40">
                                            <img src="{{ asset('./images/work-img1.jpg') }}" alt="" />
                                        </div>
                                    </div>
                                    <div class="col-md-5 col-sm-12 col-xs-12 text-left pull-left sm-text-center">
                                        <div class="work_item_details m-top-80 sm-m-top-20">
                                            <h4>Fashionista</h4>
                                            <div class="work_separator2"></div>
                                            <p class="m-top-40 sm-m-top-10">Duis autem vel eum iriure dolor in hendrerit in vulputate velit molestie consequat</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End off work-item -->
                        <div class="col-md-7 col-md-offset-5 col-sm-12 col-xs-12">
                            <div class="work_item">
                                <div class="row">
                                    <div class="col-md-7 col-sm-12 col-xs-12 text-right pull-right sm-text-center">
                                        <div class="work_item_img sm-m-top-40">
                                            <img src="{{ asset('./images/work-img1.jpg') }}" alt="" />
                                        </div>
                                    </div>
                                    <div class="col-md-5 col-sm-12 col-xs-12 text-right pull-left sm-text-center">
                                        <div class="work_item_details m-top-80 sm-m-top-20">
                                            <h4>Fashionista</h4>
                                            <div class="work_separator1"></div>
                                            <p class="m-top-40 sm-m-top-10">Duis autem vel eum iriure dolor in hendrerit in vulputate velit molestie consequat</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End off work-item -->
                        <div class="col-md-7 col-sm-12 col-xs-12">
                            <div class="work_item">
                                <div class="row">
                                    <div class="col-md-7 col-sm-12 col-xs-12">
                                        <div class="work_item_img sm-text-center sm-m-top-40">
                                            <img src="{{ asset('./images/work-img1.jpg') }}" alt="" />
                                        </div>
                                    </div>
                                    <div class="col-md-5 col-sm-12 col-xs-12 text-left pull-left sm-text-center">
                                        <div class="work_item_details m-top-80 sm-m-top-20">
                                            <h4>Fashionista</h4>
                                            <div class="work_separator2"></div>
                                            <p class="m-top-40 sm-m-top-10">Duis autem vel eum iriure dolor in hendrerit in vulputate velit molestie consequat</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End off work-item -->
                    </div>
                </div>
            </div>

@endsection


@section('scripts')


@endsection