@extends('site.layouts.main')

@section('title', 'Home')


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
                    <div class="main-banner">
                            <div class="row">
                                <div class="col-lg-7">
                                    <div class="header-text">
                                        <h6>Welcome To ColdWheels</h6>
                                        <h4><em>Raise</em> Your Collection</h4>
                                        <h6>The very best Toy of the Cold Wheels™ universe is here!</h6>
                                        <div class="main-button">
                                            <a href="browse.html">Browse Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                    <!-- ***** Banner End ***** -->

                    <!-- ***** Most Popular Start ***** -->
                    <div class="most-popular">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="heading-section">
                                    <h4><em>Most Popular</em> Cars</h4>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 col-sm-6">
                                        <div class="item">
                                            <img src="{{asset('global')}}/img/mclaren.png" alt="">
                                            <h4>Mclaren 7250s<br><span>Mclaren</span></h4>
                                            <ul>
                                                <li><i class="fa fa-star"></i> 4.8</li>
                                                <li><i class="fa fa-shopping-cart"></i> 2.3M</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-sm-6">
                                        <div class="item">
                                            <img src="{{asset('global')}}/img/bmw.png" alt="">
                                            <h4>BMW<br><span>M3 GT2</span></h4>
                                            <ul>
                                                <li><i class="fa fa-star"></i> 4.8</li>
                                                <li><i class="fa fa-shopping-cart"></i> 2.3M</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-sm-6">
                                        <div class="item">
                                            <img src="{{asset('global')}}/img/astonmartin.png" alt="">
                                            <h4>Aston Martin<br><span>DBS 2010</span></h4>
                                            <ul>
                                                <li><i class="fa fa-star"></i> 4.8</li>
                                                <li><i class="fa fa-shopping-cart"></i> 2.3M</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-sm-6">
                                        <div class="item">
                                            <img src="{{asset('global')}}/img/shreder.png" alt="">
                                            <h4>ColdWheels<br><span>TMNT Shredder</span></h4>
                                            <ul>
                                                <li><i class="fa fa-star"></i> 4.8</li>
                                                <li><i class="fa fa-shopping-cart"></i> 2.3M</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="col-lg-3 col-sm-6">
                                        <div class="item">
                                            <img src="{{asset('global')}}/img/velociraptor.png" alt="">
                                            <h4>ColdWheels<br><span>Velociraptor Blue</span></h4>
                                            <ul>
                                                <li><i class="fa fa-star"></i> 4.8</li>
                                                <li><i class="fa fa-shopping-cart"></i> 2.3M</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="col-lg-3 col-sm-6">
                                        <div class="item">
                                            <img src="{{asset('global')}}/img/cheetah.png" alt="">
                                            <h4>ColdWheels<br><span>The Cheetah™</span></h4>
                                            <ul>
                                                <li><i class="fa fa-star"></i> 4.8</li>
                                                <li><i class="fa fa-shopping-cart"></i> 2.3M</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="col-lg-3 col-sm-6">
                                        <div class="item">
                                            <img src="{{asset('global')}}/img/24ours.png" alt="">
                                            <h4>ColdWheels<br><span>The 24 Ours™</span></h4>
                                            <ul>
                                                <li><i class="fa fa-star"></i> 4.8</li>
                                                <li><i class="fa fa-shopping-cart"></i> 2.3M</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="col-lg-3 col-sm-6">
                                        <div class="item">
                                            <img src="{{asset('global')}}/img/cyborg.png" alt="">
                                            <h4>ColdWheels<br><span>Cyborg™</span></h4>
                                            <ul>
                                                <li><i class="fa fa-star"></i> 4.8</li>
                                                <li><i class="fa fa-shopping-cart"></i> 2.3M</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="main-button">
                                            <a href="browse.html">Discover Popular</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ***** Most Popular End ***** -->

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
