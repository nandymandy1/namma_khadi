@extends('layout.app')


@section('content')

<!--Home Sections-->

            <section id="hello" class="model-banner bg-mega">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row">
                        <div class="main_home text-center">
                            <div class="model_text">
                                <h1 class="text-white text-uppercase"> Our Model</h1>
                                <ol class="breadcrumb text-uppercase">
                                    <li><a href="#">Home</a></li>
                                    <li class="active"><a href="#">Our Model</a></li>
                                    <li class="active"><a href="#">Angela Baby</a></li>
                                </ol>
                            </div>
                        </div>
                    </div><!--End off row-->
                </div><!--End off container -->
            </section> <!--End off Home Sections-->

         	           <!--Model Details Section-->
            <section id="m_details" class="m_details roomy-100 fix">
                <div class="container">
                    <div class="row">
                        <div class="main_details">
                            <div class="col-md-6">

                                <div class="m_details_img">
                                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                  <!-- Indicators -->
                                  <ol class="carousel-indicators">
                                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                    <li data-target="#myCarousel" data-slide-to="1"></li>
                                    
                                    @if($product->image_c)
                                    <li data-target="#myCarousel" data-slide-to="2"></li>
                                    @endif
                                    
                                    @if(!($product->image_d == "noimage.jpg"))
                                    <li data-target="#myCarousel" data-slide-to="3"></li>
                                    @endif

                                  </ol>

                                  <!-- Wrapper for slides -->

                                  <div class="carousel-inner">
                                    <div class="item active">
                                      <img src="{{ asset('./storage/images/'.$product->image_a) }}">
                                    </div>

                                    <div class="item">
                                      <img src="{{ asset('./storage/images/'.$product->image_b) }}">
                                    </div>

                                    @if($product->image_c)
                                        <div class="item">
                                          <img src="{{ asset('./storage/images/'.$product->image_c) }}">
                                        </div>
                                    @endif

                                    @if($product->image_d)
                                        <div class="item">
                                          <img src="{{ asset('./storage/images/'.$product->image_d) }}">
                                        </div>
                                    @endif

                                  </div>

                                  <!-- Left and right controls -->
                                  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                                    <span class="glyphicon glyphicon-chevron-left"></span>
                                    <span class="sr-only">Previous</span>
                                  </a>
                                  <a class="right carousel-control" href="#myCarousel" data-slide="next">
                                    <span class="glyphicon glyphicon-chevron-right"></span>
                                    <span class="sr-only">Next</span>
                                  </a>
                                </div>                                    
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="m_details_content m-bottom-40">
                                    <h2>{{ $product->product_name }}</h2>
                                    <p>{!! $product->description !!}</p>
                                </div>
                                <hr />
                                <div class="person_details m-top-40">
                                    <div class="row">
                                        <div class="col-md-5 text-left">
                                            <p>Real name:</p>
                                            <p>Born:</p>
                                            <p>Height:</p>
                                            <p>Weight:</p>
                                            <p>C / W / H:</p>
                                            <p>Eyes color:</p>
                                            <p>Hair color:</p>
                                        </div>
                                        <div class="col-md-7 text-left">
                                            <p>Angela  Baby</p>
                                            <p>Feb 29th 1992</p>
                                            <p>180cm</p>
                                            <p>52kg</p>
                                            <p>96 / 60 / 96</p>
                                            <p>Blue</p>
                                            <p>Brown / Voilet</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- End off row -->
                </div> <!-- End off container -->
            </section> <!-- End off Model Details Section -->



@endsection


@section('scripts')



@endsection