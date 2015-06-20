@if(Session::has('msg'))
<div class="success" id='message' style='display:none'>
	<p>Terima kasih, testimonial anda sudah terkirim.</p>
</div>
@endif
@if($errors->all())
<div class="error" id='message' style='display:none'>
	Terjadi kesalahan dalam menyimpan data.<br>
	<ul>
	@foreach($errors->all() as $message)
		<li>{{ $message }}</li>
	@endforeach
	</ul>
</div>
@endif

<!-- =============================================================================================== -->

<section id="main-content">
    <div class="breadcrumb">
        <div>
            <a href="{{url::to('home')}}" title="Home">Home</a> /
            <span class="active">Testimoni</span>
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
            <div id="single-typical">
                        <div class="tabs-title-typical">
                            <h1>Testimonial</h1>
                        </div>
                        @foreach (list_testimonial() as $items)  
                        <div class="quote-testimo">
                            <blockquote>
                                {{$items->isi}}
                            </blockquote>
                            <p class="quote"><i class="fa fa-user"></i>&nbsp;&nbsp;{{$items->nama}}</p>
                        </div>
                        @endforeach
                        <br>
                        <div class="row">
                            <div class="col-md-10">
                                {{$testimonial->links()}}
                            </div>
                        </div><br><br>
                        <div class="respond col-md-6">
                            <h3 style="margin-top: 1px;margin-bottom: 20px;">Buat Testimonial</h3>
                            <form method="post" action="{{URL::to('testimoni')}}" role="form">
                                <div class="form-group">
                                    <label for="name">Your Name</label>
                                    <input type="text" class="form-control" name="nama" required id="name" placeholder="Enter Name">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Testimonial</label>
                                    <textarea name="testimonial" required class="form-control" rows="3" placeholder="Enter Massage"></textarea>
                                </div>
                                <button type="submit" class="btn btn-success">Kirim Testimonial</button>
                                <button type="reset" class="btn btn-default">Reset</button><br><br>
                            </form>
                        </div>
                    </div>

        </div> <!--.center_column-->
    </div><!--.inner-column-->  
</section>