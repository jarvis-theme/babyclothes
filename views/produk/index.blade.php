<section id="main-content">
    <div class="breadcrumb">
        <div>
            <a href="{{url::to('home')}}" title="Home">Home</a> /
            <span class="active">Product</span>
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
                        <div class="img-block"></div>
                        <h5 class="title-news">{{short_description($artikel->judul, 20)}}</h5>
                        <p>{{short_description($artikel->isi, 46)}} <a class="read-more" href="{{blog_url($artikel)}}">Read More</a></p>
                        <span class="date-post">{{date("F d, Y", strtotime($artikel->created_at))}}</span>
                    </li>
                    @endforeach
                </ul>
            </div>
            @endif
        </div><!--#left_sidebar-->
        <div id="center_column" class="col-lg-9 col-xs-12 col-sm-8">
            <div class="product-list">
                <div class="row">
                     @if(count(list_product(9, @$category, @$collection)) > 0)
                    <ul class="grid">
                        @foreach(list_product(null, @$category, @$collection) as $listproduk)
                        <li class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                            <div class="prod-container">
                                <div class="image-container">
                                    <a href="{{product_url($listproduk)}}">
                                        {{HTML::image(product_image_url($listproduk->gambar1))}}
                                    </a>
                                     @if(is_outstok($listproduk))
                                        <div class="icon-info icon-sale">KOSONG</div>
                                    @else
                                        @if(is_terlaris($listproduk))
                                        <div class="icon-info icon-promo">HOT ITEM</div>
                                        @elseif(is_produkbaru($listproduk))
                                        <div class="icon-info icon-new">BARU</div>
                                        @endif
                                    @endif
                                </div>
                                <div class="prod-info">
                                    <div class="fl">
                                        <h5 class="product-name">{{short_description($listproduk->nama,22)}}</h5>
                                        <span class="price">Price : {{price($listproduk->hargaJual)}}</span>
                                    </div>
                                    <a href="{{product_url($listproduk)}}"><button class="buy-btn fr">Buy</button></a>
                                </div>
                                <div class="clr"></div>
                            </div>
                        </li>
                        @endforeach

                    </ul>
                    {{list_product(null, @$category, @$collection)->links()}}
                    @else
                    <article class="text-center">
                        <i>Produk tidak ditemukan</i>
                    </article>
                    @endif
                </div><!--.row-->
                </div><!--.product_list-->
                <div class="clr"></div>
        </div> <!--.center_column-->
    </div><!--.inner-column-->  
</section>