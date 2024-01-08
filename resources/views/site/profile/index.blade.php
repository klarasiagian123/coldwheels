@extends('site.layouts.main')

@section('title', 'Profile')


@section('extra-css')
    <!-- start here -->

@endsection

@section('extra-styles')
    <!-- start here -->



@endsection

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-content">

                    <!-- ***** Banner Start ***** -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="main-profile ">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <img src="{{asset('global')}}/img/cat.jpg" alt="" style="border-radius: 23px;">
                                    </div>
                                    <div class="col-lg-4 align-self-center">
                                        <div class="main-info header-text">
                                            <span>Offline</span>
                                            <h4>Klara</h4>
                                            <p>You Haven't Gone yet. Go Open Your Toy Shop By Touching The Button Below.</p>
                                            <div class="main-border-button">
                                                <a href="#">Start Open</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 align-self-center">
                                        <ul>
                                            <li>Toy Purchased <span>2</span></li>
                                            <li>Friends Online <span>16</span></li>
                                            <li>Live Streams <span>None</span></li>
                                            <li>Toy Collection <span>29</span></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ***** Banner End ***** -->

                   <!-- ***** Gaming Library Start ***** -->
                   <div class="gaming-library">
                    <div class="col-lg-12">
                        <div class="heading-section">
                            <h4><em>Your Cars</em> Library</h4>
                        </div>
                        <div class="item">
                            <ul>
                                <li><img src="{{asset('global')}}/img/scobbydo.png" alt="" class="templatemo-item"></li>
                                <li>
                                    <h4>The Mystery Machine™</h4><span>ColdWheels</span>
                                </li>
                                <li>
                                    <h4>Type</h4><span>Van</span>
                                </li>
                                <li>
                                    <h4>Price</h4><span>IDR 500.000</span>
                                </li>
                                <li>
                                    <h4>Purchased</h4><span>1H 22 Mins</span>
                                </li>
                                <li>
                                    <div class="main-border-button border-no-active"><a href="#">Buy Now</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="item">
                            <ul>
                                <li><img src="{{asset('global')}}/img/twinmil.png" alt="" class="templatemo-item"></li>
                                <li>
                                    <h4>Twin Mill™ 2021</h4><span>ColdWheels</span>
                                </li>
                                <li>
                                    <h4>Type</h4><span>Classic</span>
                                </li>
                                <li>
                                    <h4>Price</h4><span>IDR 350.000</span>
                                </li>
                                <li>
                                    <h4>Not Purchased</h4><span>-</span>
                                </li>
                                <li>
                                    <div class="main-border-button"><a href="#">Buy Now</a></div>
                                </li>
                            </ul>
                        </div>
                        <div class="item last-item">
                            <ul>
                                <li><img src="{{asset('global')}}/img/senna.png" alt="" class="templatemo-item"></li>
                                <li>
                                    <h4>McLaren Senna</h4><span>McLaren</span>
                                </li>
                                <li>
                                    <h4>Type</h4><span>HyperCar</span>
                                </li>
                                <li>
                                    <h4>Price</h4><span>IDR 1.000.000</span>
                                </li>
                                <li>
                                    <h4>Purchased</h4><span>Few Ago</span>
                                </li>
                                <li>
                                    <div class="main-border-button border-no-active"><a href="#">Buy Now</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="main-button">
                            <a href="{{route('site.toys.getIndex')}}">View Your Library</a>
                        </div>
                    </div>
                </div>
                <!-- ***** Gaming Library End ***** -->
                </div>
            </div>
        </div>
    </div>







@endsection

@section('extra-content')
    <!-- start here -->
@endsection

@section('extra-js')
    <!-- start here -->

@endsection

@section('extra-script')
    <!-- start here -->
@endsection
