@if(Session::has('errorlogin'))
    <div class="error" id='message' style='display:none'>
        <p>Maaf, email atau password anda salah.</p>
    </div>
@endif
@if(Session::has('error'))
    <div class="error" id='message' style='display:none'>
        {{Session::get('error')}}!!!
    </div>
@endif
@if(Session::has('errorrecovery'))
    <div class="error" id='message' style='display:none'>
        <p>Maaf, email anda tidak ditemukan.</p>
    </div>
@endif
@if(Session::has('forget'))
<div class="success" id='message' style='display:none'>
    <p>Cek email untuk me-reset password anda!</p>
</div>  
@endif
@if(Session::has('error'))
<div class="error" id='message' style='display:none'>
    <p>{{Session::get('error')}}</p>
</div>  
@endif
<section id="main-content">
    <div class="breadcrumb">
        <div>
            <a href="{{url::to('home')}}" title="Home">Home</a> /
            <span class="active">Lupa Password</span>
        </div>
    </div>
<div class="inner-column row padd">
        <div id="center_column" class="inner-bg col-lg-12 col-xs-12 col-sm-8">
        <div id="center_column" class="col-lg-4 col-xs-12 col-sm-4">
            <h2 class="title">Lupa Password</h2><hr><br>
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Email">
                <span class="input-group-btn">
                    <button class="btn btn-warning" type="button">Reset Password</button>
                </span>
            </div><br><br>
        </div>
        <div id="center_column" class="col-lg-4 col-md-offset-1">
            <h2 class="title">Pelanggan Baru</h2><hr><br>
            <p>Nikmati kemudahan berbelanja dengan mendaftar sebagai member.</p>
            <a href="{{URL::to('member/create')}}" class="btn btn-warning bottom">Daftar</a>
        </div>
    </div>
</div>
</section>