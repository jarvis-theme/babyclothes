  <div id="bg-slider">
    <div id="da-slider" class="flexslider">
        <ul class="slides">
        	@foreach (slideshow() as $val) 
            <li><img src="{{slide_image_url($val->gambar)}}" width="1170" height="500" alt="" /></li>
            @endforeach 
        </ul>
    </div>
</div>
