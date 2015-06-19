<header>
    <div id="top-header">
      <div id="logo" class="fl">
          <a href="{{url('home')}}">{{HTML::image(logo_image_url(), 'Logo', array('width'=>'327', 'height'=>'67'))}}</a>
        </div>
        {{shopping_cart()}}
        <div class="clr"></div>
    </div>
    <div class="info">
        @if ( ! is_login() )
            <span>Selamat berbelanja</span><span class="divide"></span>
            <span> {{ HTML::link('member', 'Login') }} |</span><span class="divide"></span>
            <span>{{ HTML::link('member/create', 'Register') }}</span>
        @else
            <span>Hai, {{ HTML::link('member', user()->nama) }} <span class="divide"></span><span>| {{HTML::link('logout', 'Logout')}}</span>
        @endif
    </div>
    <!-- MENU - START -->
    <nav id="menu" class="navbar navbar-default" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand mobile-only" href="#">MENU</a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    @foreach(main_menu()->link as $key=>$link)
                    <li><a href="{{menu_url($link)}}">{{$link->nama}}</a></li>
                    @endforeach

                </ul> 
                <div class="pull-right search-form">
                    <form class="navbar-form" role="search" action="{{url('search')}}" method="post">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search" name="search" required>
                            <div class="input-group-btn">
                                <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                            </div>
                        </div>
                    </form>
                </div>  
            </div>
    </nav>
    <!-- MENU - END -->
    <div class="clr"></div>
</header>