@extends('layout.template.auth') 
@section('content')
<section class="sign-in" style="margin-top: 8%">
            <div class="container">
                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img src="{{asset('Admin/images/login-images_2.jpg')}}" alt="sing up image"></figure>
                        <a href="/register" class="signup-image-link">Buat Akun</a>
                    </div>

                    <div class="signin-form">
                        <h2 class="form-title">Login</h2>
                        <h3 class="form-title">Elektronik Sistem Pengaduan Mahasiswa</h3>

                        <form method="POST" action="/postlogin" class="register-form" id="login-form">
                            @csrf
                            <div class="form-group">
                                <label for="your_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="email" name="email" id="your_name" placeholder="Email Anda"/ value="{{old('email')}}">
                            </div>
                            @error('email')
                                <div class="invalid-feedback mt-2" style="margin-top: -8%">{{ $message }}</div>
                            @enderror
                            <div class="form-group">
                                <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password" id="your_pass" placeholder="Password Anda"/>
                            </div>
                            @error('password')
                                <div class="invalid-feedback mt-2" style="margin-top: -8%">{{ $message }}</div>
                            @enderror
                            @if (session('status'))
                            <div class="alert alert-danger" style="margin-top: -8%">
                                {{ session('status') }}
                            </div>
                            @endif
                            <div class="form-group">
                                <input type="checkbox" name="rememberme" id="remember-me" class="agree-term" />
                                <label for="remember-me" class="label-agree-term"><span><span></span></span>Ingat Saya</label>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit"  class="form-submit" value="Log in"/>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
@endsection

