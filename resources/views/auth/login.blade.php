@extends('layout')
@section('title',__('Login'))

@section('content')

    <!-- Login Area -->
    <div class="container mt-3">
        <div class="form-content">
            <div class="form-header">
                <h3>@lang('Login')</h3>
                <p>If you have an account with us, please log in.</p>
            </div>
            @include('includes.alerts')
            <form action="{{ url('admin/login/submit')}}" method="post">
                @csrf
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control" placeholder="@lang('Your email')" value="{{ old('email')}}">
                    @error('email')
                        <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control"  placeholder="@lang('Your password')">
                    @error('password')
                    <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                @enderror
                </div>

                <div class="row">
                    <div class="col-6">
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1" name="remember_me" value="1">
                            <label class="form-check-label" for="exampleCheck1">@lang('Remember me')</label>
                        </div>
                    </div>
                    <div class="col-6 text-end">
                        <a class="form-link right" href="{{ url('forget/password')}}">@lang('Forgot password')?</a>
                    </div>
                </div>

                <button type="submit" class="default-btn">Login</button>
            </form>

            <div class="form-footer">
                <p>@lang('Don’t have an account')? <a class="form-link" href="signup.html">Signup</a></p>
            </div>
        </div>
    </div>
    <!-- End Login Area -->
@endsection
