@extends('layout.app')


@section('content')


            <!--Home Sections-->

            <section id="hello" class="model-banner bg-mega">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row">
                        <div class="main_home text-center">
                            <div class="model_text">
                                <h1 class="text-white text-uppercase">OUR MODELS</h1>
                                <ol class="breadcrumb">
                                    <li><a href="#">Home</a></li>
                                    <li class="active"><a href="#">OUR MODELS</a></li>
                                </ol>
                            </div>
                        </div>
                    </div><!--End off row-->
                </div><!--End off container -->
            </section> <!--End off Home Sections-->

            <!--Portfolio Section-->
            <section id="gallery" class="gallery margin-top-120 bg-white">
                <!-- Portfolio container-->
                <div class="container">
                    <div class="row">
                        <div class="main-gallery main-model roomy-80">
                            <div class="col-md-12 m-bottom-60">
                                @include('layout.inc.messages')
                                <div class="filters-button-group sm-text-center">
                                    <button class="button is-checked" data-filter="*">View all</button>
                                    <button class="button" data-filter=".metal">Catwalk</button>
                                    <button class="button" data-filter=".transition">Advertisement</button>
                                    <button class="button" data-filter=".alkali">Fashionista</button>
                                    <button class="button" data-filter=".ar">Model Photo</button>
                                </div>
                            </div>

                            <div style="clear: both;"></div>

                            <div class="grid models text-center">
                                
                                @if(count($products) > 0)

                                    @foreach($products as $product)
                                        
                                        <div class="grid-item model-item transition metal ium">
                                            <img alt="" src="{{ asset('./storage/images/'.$product->image_a) }}">
                                            <a href="/products/{{ $product->id }}" class="btn btn-default m-top-20">View Details<i class="fa fa-long-arrow-right"></i></a>
                                            <hr>
                                            
                                            {{ $product->product_name }}

                                            <!--If Authenticated -->
                                            @if (Auth::user())
                                            <hr>
                                            <a href="/products/{{ $product->id }}/edit" class="btn btn-info">Edit Product</a>
                                            &nbsp;
                                            &nbsp;
                                            <a href="/product_del/{{ $product->id }}" class="btn btn-danger pull-right">Delete</a>
                                            @endif
                                            <!--EndIf Authenticated -->
                                        </div><!-- End off grid item -->
                                        
                                    @endforeach

                                    <!--Pagination goes here-->
                                    <div class="container">
                                        <div class="row">
                                            <div class="main_cbrand text-center">
                                                {{ $products->links() }}
                                            </div>
                                        </div>
                                        <!-- End off row -->
                                    </div>
                                    <!-- End off container -->

                                @else
                                 Sorry, Temporarily, there are no Products Available.
                                 We will update our products as soon as possible
                                @endif
                            </div>
                            
                            <div style="clear: both;"></div>

                        </div>
                    </div>
                </div><!-- Portfolio container end -->
            </section><!-- End off portfolio section -->

            <br>


@endsection


@section('scripts')


@endsection