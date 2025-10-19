@extends('master')

@section('content')
<!-- Page Header Start -->
<div class="page-header" style="background-image: url('assets/img/banner1.jpg');">
    <div class="container">
        <div class="row">         
            <div class="col-md-12">
                <div class="breadcrumb-wrapper">
                    <h2 class="product-title">My Account</h2>
                    <ol class="breadcrumb">
                        <li><a href="{{ url('/') }}"><i class="ti-home"></i> Home</a></li>
                        <li class="current">My Account</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Page Header End -->

<div id="content" class="my-account">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 col-sm-8 cd-user-modal">
                <div class="my-account-form">
                    <ul class="cd-switcher">
                        <li>
                            <a href="{{ route('login.show') }}" class="{{ request()->routeIs('login.show') ? 'selected' : '' }}">LOGIN</a>
                        </li>
                        <li>
                            <a href="{{ route('register.show') }}" class="{{ request()->routeIs('register.show') ? 'selected' : '' }}">REGISTER</a>
                        </li>
                    </ul>

                    {{-- Login Form --}}
                    @if(request()->routeIs('login.show'))
                    <div id="cd-login" class="is-selected">
                        <div class="page-login-form">
                            <form method="POST" action="{{ route('login.perform') }}">
                                @csrf
                                <div class="form-group">
                                    <div class="input-icon">
                                        <i class="ti-user"></i>
                                        <input type="email" name="email" value="{{ old('email') }}" 
                                            class="form-control @error('email') is-invalid @enderror" placeholder="Email" required autofocus>
                                    </div>
                                    @error('email')
                                        <span class="text-danger small">{{ $message }}</span>
                                    @enderror
                                </div> 

                                <div class="form-group">
                                    <div class="input-icon">
                                        <i class="ti-lock"></i>
                                        <input type="password" name="password" 
                                            class="form-control @error('password') is-invalid @enderror" placeholder="Password" required>
                                    </div>
                                    @error('password')
                                        <span class="text-danger small">{{ $message }}</span>
                                    @enderror
                                </div> 

                                <button class="btn btn-common log-btn w-100" type="submit">Login</button>

                                <div class="checkbox-item mt-2">
                                    <div class="checkbox">
                                        <label for="rememberme" class="rememberme">
                                            <input name="remember" id="rememberme" type="checkbox" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                        </label>
                                    </div>
                                    <p class="cd-form-bottom-message mt-2">
                                        <a href="{{ route('password.request') }}">Lost your password?</a>
                                    </p>
                                </div> 
                            </form>
                        </div>
                    </div>
                    @endif

                    {{-- Register Form --}}
                    @if(request()->routeIs('register.show'))
                    <div id="cd-signup" class="is-selected">
                        <div class="page-login-form register">
                            <form method="POST" action="{{ route('register.perform') }}">
                                @csrf
                                <div class="form-group">
                                    <div class="input-icon">
                                        <i class="ti-user"></i>
                                        <input type="text" name="name" value="{{ old('name') }}" 
                                            class="form-control @error('name') is-invalid @enderror" placeholder="Username" required autofocus>
                                    </div>
                                    @error('name')
                                        <span class="text-danger small">{{ $message }}</span>
                                    @enderror
                                </div> 

                                <div class="form-group">
                                    <div class="input-icon">
                                        <i class="ti-email"></i>
                                        <input type="email" name="email" value="{{ old('email') }}" 
                                            class="form-control @error('email') is-invalid @enderror" placeholder="Email" required>
                                    </div>
                                    @error('email')
                                        <span class="text-danger small">{{ $message }}</span>
                                    @enderror
                                </div> 

                                <div class="form-group">
                                    <div class="input-icon">
                                        <i class="ti-lock"></i>
                                        <input type="password" name="password" 
                                            class="form-control @error('password') is-invalid @enderror" placeholder="Password" required>
                                    </div>
                                    @error('password')
                                        <span class="text-danger small">{{ $message }}</span>
                                    @enderror
                                </div> 

                                <div class="form-group">
                                    <div class="input-icon">
                                        <i class="ti-lock"></i>
                                        <input type="password" name="password_confirmation" class="form-control" placeholder="Repeat Password" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="role_id">Select Role</label>
                                    <select name="role_id" id="role_id" class="form-control @error('role_id') is-invalid @enderror" required>
                                        <option value="">-- Choose Role --</option>
                                        @foreach(\App\Models\Role::all() as $role)
                                            <option value="{{ $role->id }}" {{ old('role_id') == $role->id ? 'selected' : '' }}>
                                                {{ $role->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('role_id')
                                        <span class="text-danger small">{{ $message }}</span>
                                    @enderror
                                </div>

                                <button class="btn btn-common log-btn w-100" type="submit">Register</button> 
                            </form>
                        </div>
                    </div>
                    @endif

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
