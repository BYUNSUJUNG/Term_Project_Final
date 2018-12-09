
@extends('template')

@section('content')
@include('bbs/companySidebar')

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
    <div class="container">
        <a class="navbar-brand text-uppercase text-expanded font-weight-bold d-lg-none" href="#">Start Bootstrap</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav mx-auto">
            <li class="nav-item px-lg-4">
            <a href="javascript:void plusFriendChat()">
                <img src="https://developers.kakao.com/assets/img/about/logos/plusfriend/consult_small_yellow_pc.png"/>
            </a>
            <script type='text/javascript'>
            //<![CDATA[
                // 사용할 앱의 JavaScript 키를 설정해 주세요.
                Kakao.init('97a2a81cf0c9553d44cd3273cfbdaeee');
                function plusFriendChat() {
                Kakao.PlusFriend.chat({
                    plusFriendId: '_SJuXj' // 플러스친구 홈 URL에 명시된 id로 설정합니다.
                });
                }
            //]]>
            </script>
            </li>
            <li class="nav-item px-lg-4">
                <a class="nav-link text-uppercase text-expanded" href="{{route('index')}}">Home
                <span class="sr-only">(current)</span>
                </a>
            </li>
            <li class="nav-item px-lg-4">
                <a class="nav-link text-uppercase text-expanded" href="{{route('menuBurger')}}">Memu</a>
            </li>
            <li class="nav-item px-lg-4">
                <a class="nav-link text-uppercase text-expanded" href="{{route('storePeople')}}">Store</a>
            </li>
            <li class="nav-item px-lg-4">
                <a class="nav-link text-uppercase text-expanded" href="{{route('customerNotices')}}">Cutomer</a>
            </li>
            <li class="nav-item active px-lg-4">
                <a class="nav-link text-uppercase text-expanded" href="{{route('companyInformation')}}">Company</a>
            </li>

        @guest
            <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
            </li>
            <li class="nav-item">
                @if (Route::has('register'))
                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                @endif
            </li>
        @else
            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }} <span class="caret"></span>
                </a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </li>
        @endguest
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
            <span class="section-heading-upper">Company</span>
            <span class="section-heading-lower">History</span>
            </h2>
            
            <h1>2017</h1>
            <h3>06</h3><p>대한민국 창업대상 대한상공회의소 회장상 수상</p>
            <h3>03</h3><p>나트륨저감 우수업체 식품의약품안전처장 표창</p>
            <h1>2016</h1>
            <h3>12</h3><p>집게리아 999호점 개점</p>
            <h3>11</h3><p>대만 2호점 오픈/진천 물류센터 증축</p>
            <h3>09</h3><p>집게리아 베트남 1호점 오픈</p>
            <h3>04</h3><p>집게리아 대만 1호점 오픈</p>
            <h1>2015</h1>
            <h3>12</h3><p>한국프랜차이즈대상 대통령상 수상</p>
            <h3>10</h3><p>미래창조경영 우수기업 고용노동부장관상</p>
            <h3>06</h3><p>제 9회 국가 지속경영기능 대상</p>
            <h3>03</h3><p>매일경제 100대 프랜차이즈 선정</p>
            <h1>2014</h1>
            <h3>12</h3><p>진천공장 및 물류센터 준공</p>
            <h3>09</h3><p>집게리아 500호점 개점</p>
            <h3>07</h3><p>경영혁신형 중소기업 지정</p>
            <h1>2013</h1>
            <h3>02</h3><p>맘스터치 300호점 개점</p>
            <h1>2012</h1>
            <h3>09</h3><p>소상공인진흥원 우수프랜차이즈 선정</p>
            <h1>2011</h1>
            <h3>10</h3><p>하반기 네티즌 파워브랜드 선정(패스트푸드부문)</p>
            <h1>2010</h1>
            <h3>07</h3><p>경영혁신형 중소기업 선정</p>
            <h3>06</h3><p>가맹점 집게리아 1호점 복현점 개점</p>
            <h1>2005</h1>
            <h3>08</h3><p>(주)집게로 설립</p>
        </div>
        </div>
    </div>
    </div>
</section>


    
<!-- jQuery -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>


