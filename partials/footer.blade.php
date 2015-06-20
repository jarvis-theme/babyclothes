<footer>
    <div id="testimonial">
        <div class="img-testimonial col-sm-4">
            <img class="img-responsive" src="{{url(dirTemaToko().'babyshop/assets/images/img-testimonial.png')}}" alt="" width="382" height="115" />
        </div>
        <div class="col-sm-7 text-testi flexslider">
            <ul class="slides">
                @foreach(list_testimonial() as $key=>$value)
                <li>{{short_description($value->isi,136)}} <strong> : {{$value->nama}}</strong></li>
                @endforeach
            </ul>
        </div>
        <div class="clr"></div>
    </div>
    <div class="top-footer">
            <div class="row">
                <div id="about-foot" class="col-xs-12 col-lg-4">
                    <h4 class="title">About Us</h4>
                    <div class="block-content">
                        <p>{{short_description($aboutUs[1]->isi,400)}} </p>
                    </div>
                </div>
                @foreach($tautan as $key=>$menu)
                  @if($key == '1' || $key == '2')
                    <div id="links-foot" class="col-xs-12 col-lg-2">
                        <h4 class="title">{{$menu->nama}}</h4>
                        <div class="block-content">
                            <ul>
                                @foreach($quickLink as $link_menu)
                                @if($menu->id == $link_menu->tautanId)
                                <li><a href="{{menu_url($link_menu)}}">{{$link_menu->nama}}</a></li>
                                @endif
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    @endif
                @endforeach
                {{ Theme::partial('subscribe') }}
            </div>
            <div class="row sosial">
        <div class="social-media">
          @if(!empty($kontak->fb))
          <a href="{{url($kontak->fb)}}">
            <div class="icon">
              <i class="fa fa-facebook"></i>
            </div>
          </a>
          @endif
          @if(!empty($kontak->tw))
          <a href="{{url($kontak->tw)}}">
            <div class="icon">
              <i class="fa fa-twitter"></i>
            </div>
          </a>
          @endif
          @if(!empty($kontak->gp))
          <a href="{{url($kontak->gp)}}">
            <div class="icon">
              <i class="fa fa-google-plus"></i>
            </div>
          </a>
          @endif
          @if(!empty($kontak->pt))
          <a href="{{url($kontak->pt)}}">
            <div class="icon">
              <i class="fa fa-pinterest"></i>
            </div>
          </a>
          @endif
          @if(!empty($kontak->tl))
          <a href="{{url($kontak->tl)}}">
            <div class="icon">
              <i class="fa fa-tumblr"></i>
            </div>
          </a>
          @endif
          @if(!empty($kontak->ig))
          <a href="{{url($kontak->ig)}}">
            <div class="icon">
              <i class="fa fa-instagram"></i>
            </div>
          </a>
          @endif
          
      </div>

            </div>
            
                        
              
         </div>
    <div class="copyright">
            <p>  &copy; {{ short_description(Theme::place('title'),80) }} {{date('Y')}} All Right Reserved. Powered by <a class="title-copyright" href="http://jarvis-store.com" target="_blank"> Jarvis Store</a></p>
    </div>
</footer>


