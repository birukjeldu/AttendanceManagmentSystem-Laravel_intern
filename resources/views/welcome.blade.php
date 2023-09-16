@extends('layouts.master-blank')

@section('content')
    <div class="wrapper-page">
        <div class="card overflow-hidden account-card mx-3">
            <div class="p-2 bg-dark text-white text-center position-relative">
                <h4 class="font-20 m-b-5">EAMS Administrator</h4>
                <p class="text-white-50 mb-4"></p>
                {{-- <a href="" class="logo logo-admin">
                    <img src="assets/images/profile-icon.png" alt="user" class="rounded-circle" width="60px">
                </a> --}}
            </div>
            <div class="account-card-content bg-light">
                <form class="form-horizontal m-t-30" method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="form-group">
                        <label for="email" class="col-form-label ">{{ __('Email Address') }}</label>

                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                            name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="password" class="col-form-label ">{{ __('Password') }}</label>


                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                            name="password" required autocomplete="current-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                   
                    <div class="form-group row m-t-20">
                        <div class=" col-sm-6">
                        </div>
                        <div class="col-sm-6 text-right">
                            <button class="btn btn-success w-md waves-effect waves-light" type="submit">Log In</button>
                        </div>
                    </div>


                </form>
            </div>
        </div>


    </div>
    <!-- end wrapper-page -->
@endsection

@section('script')
@endsection


