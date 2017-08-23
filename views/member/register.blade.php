<section id="main-content">
    <div class="breadcrumb">
        <div>
            <a href="{{url::to('home')}}" title="Home">Home</a> /
            <span class="active">Register</span>
        </div>
    </div>
    <div class="inner-column row padd">
        <div id="center_column" class="inner-bg col-lg-12 col-xs-12">
            <div class="tab-title-top"><h1>Register</h1></div>
            <div class="register-page">
                <div class="col-xs-12 col-md-6 zeropadding">
                    <span>Jika anda telah memiliki akun, maka anda dapat langsung menuju <a href="{{url('member')}}"> halaman login</a></span>
                    {{Form::open(array('url'=>'member','method'=>'post','class'=>'form-horizontal register'))}}
                        <div class="form-group">
                            <label class="col-md-3">{{trans('content.step2.name')}}</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="nama" value="{{Input::old('nama')}}" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3">{{trans('content.step2.email')}}</label>
                            <div class="col-md-9">
                                <input type="email" class="form-control" name="email" value="{{Input::old('email')}}" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3">Password</label>
                            <div class="col-md-9">
                                <input type="password" class="form-control" name="password" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3">Konfirmasi Password</label>
                            <div class="col-md-9">
                                <input type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3">{{trans('content.step2.address')}}</label>
                            <div class="col-md-9">
                                <textarea class="form-control" name="alamat" required>{{Input::old("alamat")}}</textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3">{{trans('content.step2.country')}}</label>
                            <div class="col-md-9">
                                <select class="form-control" name="negara" id="negara" data-rel="chosen" required>
                                    <option selected>-- Pilih Negara --</option>
                                    @foreach ($negara as $key=>$item)
                                        @if(strtolower($item)=='indonesia')
                                        <option value="1" {{Input::old('negara')==1 ? 'selected' : ''}}>{{$item}}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3">{{trans('content.step2.state')}}</label>
                            <div class="col-md-9">
                                {{Form::select('provinsi',array('' => '-- '.trans('content.step2.select_state').' --') + $provinsi, Input::old("provinsi"),array('required', "id"=>"provinsi", "data-rel"=>"chosen", "class"=>"form-control"))}}
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3">{{trans('content.step2.city')}}</label>
                            <div class="col-md-9">
                                {{Form::select('kota',array('' => '-- '.trans('content.step2.select_city').' --') + $kota, Input::old("kota"),array('required', "id"=>"kota", "data-rel"=>"chosen", "class"=>"form-control"))}}
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3">{{trans('content.step2.poscode')}}</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="kodepos" value="{{Input::old('kodepos')}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3">{{trans('content.step2.phone')}}</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="telp" value="{{Input::old('telp')}}" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3">Captcha</label>
                            <div class="col-md-9">
                                {{ HTML::image(Captcha::img(), 'Captcha image') }}
                                {{Form::text('captcha','',array('class'=>'form-control captcha','placeholder'=>'Captcha'))}}
                            </div>
                        </div>
                        <div>
                            <input type="checkbox" name="readme" id="inlineCheckbox1" value="1" required checked> Saya telah membaca dan menyetujui 
                            <a id="tos" href="{{url('service')}}" target="_blank">Persyaratan Member</a></td>
                        </div>
                        <div class="register">
                            <input type="submit" class="btn btn-warning" value="Register">
                        </div>
                    {{Form::close()}}
                </div>
            </div>
        </div>
    </div>
</section>