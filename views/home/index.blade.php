<div id="adv-home">
    <div class="row">
        @foreach(horizontal_banner() as $banners)
        <a href="{{URL::to($banners->url)}}">
            {{HTML::image(banner_image_url($banners->gambar),'banner',array('width'=>'270','height'=>'388','class'=>'img-responsive'))}}
        </a>
        @endforeach
    </div>
</div>
<div class="inner-column row">
    <div id="center_column" class="col-lg-12 col-xs-12 col-sm-12">
        <div id="all-product-home" class="product_home">
            <div class="block-title"><h2>Koleksi Produk</h2></div>
            <div class="product-list">
                <div class="row">
                    @if(count(home_product()) > 0)
                    <ul class="grid">
                        @foreach(home_product() as $listproduk)
                        <li class="item col-xs-12 col-sm-6 col-md-6 col-lg-3">
                            <div class="prod-container">
                                <div class="image-container">
                                    <a href="{{product_url($listproduk)}}">
                                        {{HTML::image(product_image_url($listproduk->gambar1,'medium'),$listproduk->nama,array('title'=>$listproduk->nama))}}
                                    </a>
                                    @if(is_outstok($listproduk))
                                    <div class="icon-info icon-sale">KOSONG</div>
                                    @elseif(is_terlaris($listproduk))
                                    <div class="icon-info icon-promo">HOT ITEM</div>
                                    @elseif(is_produkbaru($listproduk))
                                    <div class="icon-info icon-new">BARU</div>
                                    @endif
                                </div>
                                <div class="prod-info">
                                    <div class="fl">
                                        <h5 class="product-name">{{short_description($listproduk->nama,22)}}</h5>
                                        <span class="price">Harga : {{price($listproduk->hargaJual)}}</span>
                                    </div>
                                    <a href="{{product_url($listproduk)}}"><button class="buy-btn fr">Beli</button></a>
                                </div>
                                <div class="clr"></div>
                            </div>
                        </li> 
                        @endforeach
                    </ul>
                    {{home_product()->links()}}
                    @else
                    <article class="text-center"><i>Produk tidak ditemukan</i></article>
                    @endif
                    <div class="clr"></div>
                </div>
            </div>
        </div>
    </div>
</div>
