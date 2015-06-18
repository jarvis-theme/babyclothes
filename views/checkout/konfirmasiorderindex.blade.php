<div class="container">
@if(Session::has('message'))
<div class="error" id='message' style='display:none'>
	<p>Maaf, kode order anda tidak ditemukan.</p>					
</div>		
@endif

<section id="main-content">
    <div class="breadcrumb">
        <div>
            <a href="{{url::to('home')}}" title="Home">Home</a> /
            <span class="active">Konfirmasi Order</span>
        </div>
    </div>
	<div class="inner-column row padd">
        <div id="center_column" class="inner-bg col-lg-12 col-xs-12 col-sm-8">
        	<div class="contact-form">
				<p>Silakan masukkan kode order yang mau anda cari!</p>
				{{Form::open(array('url'=>'konfirmasiorder','method'=>'post','class'=>'form-inline'))}}
					<input style="float:left;" type="text" class="form-control" placeholder=" Kode Order" name='kodeorder' required>
					<button type="submit" style="margin-left:10px;" class="btn btn-success"><span> Cari Kode</span></button>
				{{Form::close()}}
			</div>
			<br>
        </div> <!--.center_column-->
    </div><!--.inner-column-->
    
</section>