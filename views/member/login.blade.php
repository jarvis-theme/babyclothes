@if(Session::has('error'))
<div class="error" id='message' style='display:none'>
    {{Session::get('error')}}
</div>
@endif

@if(Session::has('success'))
<div class="success" id='message' style='display:none'>
    <p>Selamat, anda sudah berhasil register. Silakan check email untuk mengetahui informasi akun anda.</p>
</div>
@endif

@if(Session::has('errorrecovery'))  
<div class="error" id='message' style='display:none'>
    <p>Maaf, email anda tidak ditemukan.</p>
</div>
@endif
<section id="main-content">
    <div class="breadcrumb">
        <div>
            <a href="{{url::to('home')}}" title="Home">Home</a> /
            <span class="active">Login</span>
        </div>
    </div>
    <div class="inner-column row padd">
        <div id="center_column" class="inner-bg col-lg-12 col-xs-12 col-sm-8">
            <div class="tab-title-top">
                <h1>Login Member</h1>
            </div>

    <div class="login-page">
        <div class="row">
            <div class="col-sm-6">
                <div class="login-desc">
                    <h2 class="title">Pendaftaran</h2>
                    <h4>Daftar untuk mendapatkan keuntungan :</h4>
                    <ul class="ul">
                        <li>Cepat dan Mudah dalam bertransaksi</li>
                        <li>Mudah untuk mengetahui Order Histori dan Status</li>
                    </ul>
                </div><br>
                <div class="tabs-btn-login">
                    <a href="{{url('member/create')}}" class="register btn btn-warning">Register</a>
                </div>
            </div><br><br>
            <div class="col-sm-3">
                <div class="login-wrap">
                    <h2 class="title">Login</h2>
                    <h4>Sudah Terdaftar ?</h4>
                    <p>Silahkan login:</p>
                    <form action="{{url('member/login')}}" method="post" enctype="multipart/form-data">
                    <div class="content-login">
                        <b>*Email</b><br>
                        <input type="text" placeholder="Email" name="email" class="form-control" required>
                     <br>
                        <b>*Password</b><br>
                        <input type="password" placeholder="Password" name="password" class="form-control" required>
                        <br>
                        <a href="{{url('member/forget-password')}}" class="forgot">Lupa Password?</a><br>
                        <br>
                        <input type="submit" value="Login" class="btn btn-warning">
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
            <br><br>
        </div> <!--.center_column-->
    </div><!--.inner-column-->  
</section>