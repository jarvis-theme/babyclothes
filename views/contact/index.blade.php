<section id="main-content">
    <div class="breadcrumb">
        <div>
            <a href="{{url::to('home')}}" title="Home">Home</a> /
            <span class="active">Kontak</span>
        </div>
    </div>
    <div class="inner-column row">
        <div id="left_sidebar" class="col-lg-3 col-xs-12 col-sm-4">
            @if(count(list_category()) > 0)
            <div id="categories" class="block">
                <div class="title"><h2>Categories</h2></div>
                 <ul class="block-content">
                 @foreach(list_category() as $side_menu)
                    @if($side_menu->parent == '0')
                    <li>
                        <a href="{{category_url($side_menu)}}">{{short_description($side_menu->nama,20)}}
                        </a>
                        @if($side_menu->anak->count() != 0)
                        <ul class="block1">
                            @foreach($side_menu->anak as $submenu)
                                @if($submenu->parent == $side_menu->id)
                                <li>
                                    <a href="{{category_url($submenu)}}">{{short_description($submenu->nama,20)}}</a>
                                    @if($submenu->anak->count() != 0)
                                    <ul class="block2">
                                        @foreach($submenu->anak as $submenu2)
                                        @if($submenu2->parent == $submenu->id)
                                        <li>
                                            <a href="{{category_url($submenu2)}}">{{short_description($submenu2->nama,20)}}</a>
                                        </li>
                                        @endif
                                        @endforeach
                                    </ul>
                                    @endif
                                </li>
                                @endif
                            @endforeach
                        </ul>
                        @endif
                    </li>
                    @endif
                @endforeach
                </ul>
            </div>
            @endif
            @if(count(best_seller()) > 0)
            <div id="best-seller" class="block">
                <div class="title"><h2>Best Seller</h2></div>
                <ul class="block-content">
                    @foreach(best_seller() as $bestproduk )
                    <li>
                        <a href="{{product_url($bestproduk)}}">
                            <div class="img-block">
                                {{HTML::image(product_image_url($bestproduk->gambar1),'',array('width'=>'81','height'=>'64'))}}
                            </div>
                            <p class="product-name">{{short_description($bestproduk->nama,12)}}</p>
                            <p class="price">{{price($bestproduk->hargaJual)}}</p> 
                        </a>
                    </li>
                    @endforeach
                </ul>
                <div class="btn-more">
                    <a href="{{url::to('produk')}}">view more >></a>
                </div>
            </div>
            @endif
            @if(count(list_blog()) > 0)
            <div id="latest-news" class="block">
                <div class="title"><h2>Latest News</h2></div>
                <ul class="block-content">
                    @foreach(list_blog(5) as $artikel)
                    <li>
                        <div class="img-block">    
                        </div>
                        <h5 class="title-news">{{short_description($artikel->judul, 20)}}</h5>
                        <p>{{short_description($artikel->isi, 46)}} <a class="read-more" href="{{blog_url($artikel)}}">Read More</a></p>
                        <span class="date-post">{{date("F d, Y", strtotime($artikel->created_at))}}</span>
                    </li>
                    @endforeach
                </ul>
            </div>
            @endif
        </div><!--#left_sidebar-->
        <div id="center_column" class="inner-bg col-lg-9 col-xs-12 col-sm-8">
            <div class="tabs-description">
                <div class="col-md-12 col-xs-12" style="margin-bottom:30px;">         
                    <div class="maps" >
                        <h2 class="title">Peta Lokasi</h2>
                        @if($kontak->lat!='0' || $kontak->lng!='0')
                            <iframe style="float:right;width:100%" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q={{ $kontak->lat.','.$kontak->lng }}&amp;aq=&amp;sll={{ $kontak->lat.','.$kontak->lng }}&amp;sspn=0.006849,0.009892&amp;ie=UTF8&amp;t=m&amp;z=14&amp;output=embed"></iframe><br />
                        @else
                            <iframe style="float:right;width:100%" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q={{ $kontak->alamat }}&amp;aq=0&amp;oq=gegerkalong+hil&amp;sspn=0.006849,0.009892&amp;ie=UTF8&amp;hq=&amp;hnear={{ $kontak->alamat }}&amp;t=m&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe><br />
                        @endif
                    </div>
                </div>
                <br><br>
                <div class="col-md-12">
                    <div class="contact-us" >
                        <div class="contact-desc">
                            @if(!empty($kontak->alamat))
                                <strong>Shop Address :</strong> {{$kontak->alamat}}<br>
                            @endif
                            @if(!empty($kontak->telepon))
                                <strong>Phone :</strong> {{$kontak->telepon}}<br>
                            @endif
                            @if(!empty($kontak->hp))
                                <strong>HP :</strong> {{$kontak->hp}}<br>
                            @endif
                            @if(!empty($kontak->bb))
                                <strong>BBM :</strong> {{$kontak->bb}}<br>
                            @endif
                            @if(!empty($kontak->email))
                                <strong>Email :</strong><a href="mailto:{{$kontak->email}}"> {{$kontak->email}}</a>
                            @endif
                            <div class="clr"></div>
                        </div>
                        <br>
                        <br>
                        <div class="col-md-6 kontak">
                            <form class="contact-form" action="{{url('kontak')}}" method="post">
                                <p class="form-group">
                                <input class="form-control" placeholder="Name" name="namaKontak" type="text" required>
                                </p>
                                <p class="form-group">
                                <input class="form-control" placeholder="Email Address" name="emailKontak" type="email" required>
                                </p>
                                <p class="form-group">
                                <textarea class="form-control" placeholder="Message" name="messageKontak" required></textarea>
                                </p>
                                <button class="btn btn-warning submitnewletter">Send</button><br><br>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div> <!--.center_column-->
    </div><!--.inner-column-->  
</section>