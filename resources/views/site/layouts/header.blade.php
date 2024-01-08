

 <!-- ***** Preloader Start ***** -->
 <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
        <span class="dot"></span>
        <div class="dots">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
</div>
<!-- ***** Preloader End ***** -->

<!-- ***** Header Area Start ***** -->
<header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="{{route('site.home.getIndex')}}" class="logo">
                        <img src="{{ asset('global') }}/img/logobaru.png" style="width: 150px" alt="">
                    </a>

                    <!-- ***** Logo End ***** -->

                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        <li><a href="{{route('site.login.getIndex')}}" class="{{Request::is('toys') ? 'active' : '' }}">Login</a></li>
                        <li><a href="{{route('site.home.getIndex')}}" class="{{Request::is('/') ? 'active' : '' }}">Home</a></li>
                        <li><a href="{{route('site.toys.getIndex')}}" class="{{Request::is('toys') ? 'active' : '' }}">Toys</a></li>
                        <li><a href="{{route('site.profile.getIndex')}}"  class="{{Request::is('profile') ? 'active' : '' }}" >Profile <img src="{{asset('global')}}/img/" alt=""></a></li>
                        
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- ***** Header Area End ***** -->

<br>
<br>
