@extends('layouts.auth')
@section('title', 'Daxil ol')
@section('content')
    <div class="login login-signin-on d-flex flex-column flex-lg-row flex-column-fluid bg-white">
        <div class="d-flex flex-column flex-row-fluid position-relative p-7 overflow-hidden">
            <div class="d-flex flex-column-fluid flex-center mt-30 mt-lg-0">
                <div class="login-form login-signin">
                    <div class="text-center mb-10 mb-lg-20">
                        <img src="{{ asset('backend/img/logo.png') }}">
                    </div>
                    <form action="{{ route('backend.login') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <input
                                type="email"
                                class="form-control form-control-solid h-auto py-5 px-6 @error('email') is-invalid @enderror"
                                name="email"
                                value="{{ old('email') }}"
                                placeholder="Email daxil edin"
                            >
                            @error('email')
                            <span class="form-text text-danger pt-2">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input
                                type="password"
                                class="form-control form-control-solid h-auto py-5 px-6 @error('password') is-invalid @enderror"
                                name="password"
                                placeholder="Şifrə daxil edin"
                            >
                            @error('password')
                            <span class="form-text text-danger pt-2">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group d-flex flex-wrap justify-content-between align-items-center">
                            <div class="checkbox-inline">
                                <label class="checkbox checkbox-lg">
                                    <input type="checkbox" name="remember" value="1">
                                    <span></span> Məni xatırla
                                </label>
                            </div>
                            <button type="submit" class="btn btn-primary font-weight-bold px-9 py-4 my-3">Daxil ol</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/css/sweetalert.min.css') }}">
@endpush
@push('scripts')
    <script src="{{ asset('backend/js/sweetalert.min.js') }}"></script>
@endpush

