@extends('template')

@section('content')

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
    <div class="container">
    <a class="navbar-brand text-uppercase text-expanded font-weight-bold d-lg-none" href="#">Start Bootstrap</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav mx-auto">
        <li class="nav-item active px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="{{route('index')}}">Home
            <span class="sr-only">(current)</span>
            </a>
        </li>
        <li class="nav-item px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="{{route('about')}}">About</a>
        </li>
        <li class="nav-item px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="{{route('products')}}">Products</a>
        </li>
        <li class="nav-item px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="{{route('store')}}">Store</a>
        </li>
        <li class="nav-item px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="{{route('menuBurger')}}">Memu</a>
        </li>
        <li class="nav-item px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="{{route('storeNationwideFranchise')}}">Store</a>
        </li>
        <li class="nav-item px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="{{route('customerNotices')}}">Cutomer</a>
        </li>
        <li class="nav-item px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="{{route('companyInformation')}}">Company</a>
        </li>
        </ul>
    </div>
    </div>
</nav>

<section class="page-section cta">
    <div class="container">
    <div class="row">
        <div class="col-xl-9 mx-auto">
        <div class="cta-inner text-center rounded">
            <h2 class="section-heading mb-4">
            <span class="section-heading-upper">Our Promise</span>
            <span class="section-heading-lower">버거 메뉴</span>
            </h2>
            <p class="mb-0">When you walk into our shop to start your day, we are dedicated to providing you with friendly service, a welcoming atmosphere, and above all else, excellent products made with the highest quality ingredients. If you are not satisfied, please let us know and we will do whatever we can to make things right!</p>

            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-sm-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
        </div>
    </div>
    </div>
</section>


    
<!-- jQuery -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>


