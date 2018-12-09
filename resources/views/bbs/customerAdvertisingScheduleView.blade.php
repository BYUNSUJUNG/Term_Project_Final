@extends('template')


@section('content')
@include('bbs/menuSidebar')

<script src="//developers.kakao.com/sdk/js/kakao.min.js"></script>
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
            <li class="nav-item active px-lg-4">
                <a class="nav-link text-uppercase text-expanded" href="{{route('customerNotices')}}">Cutomer</a>
            </li>
            <li class="nav-item px-lg-4">
                <a class="nav-link text-uppercase text-expanded" href="{{route('companyInformation')}}">Company</a>
            </li>

            <li class="nav-item">
                <a href="{{route('shoppingCartBoard')}}">
                    장바구니
                </a>
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
                <span class="section-heading-upper">Customer</span>
                <span class="section-heading-lower">Notices</span>
                </h2>
              
                <form action="{{('/customerNoticesSearch')}}" method="post" role="search">
                    {{ csrf_field() }}
                    <div class="input-group">
                        <input type="text" class="form-control" name="search"
                            placeholder="Search users"> 
                            <button type="submit" class="btn btn-default">검색</button>
                        </span>
                    </div>
                </form>
            </div>
            <table class="table table-hover" style="background-color:white; margin-top:20px;">
                <tr>
                    <th>번호</th>
                    <th>제목</th>
                    <th>작성자</th>
                    <th>작성일시</th>
                </tr>	
                @foreach($customer as $customers)
                    <tr>
                        <td>{{$customers->id}}</td>
                        <td>
                            <a href="/customerNoticesView/{{$customers->id}}">
                                {{$customers->title}}						
                            </a>		
                        </td>
                        <td>{{$customers->writer}}</td>
                        <td>{{$customers->created_at}}</td>
                    </tr>
                @endforeach	
            </table>	
            {{$customer->links()}}
            <button type="submit" class="btn btn-default"><a href="{{route('customer_write_form')}}">글작성</a></button>
        </div>
    </div>
    </div>
</section>


<section class="page-section cta">
    <div class="container">
    <div class="row">
        <div class="col-xl-9 mx-auto">
			<div class="cta-inner text-center rounded">
				<table class="table">
					<tr> 
						<th>제목</th>
						<td>{{$customerId->title}}</td>
					</tr>	
					<tr> 
						<th>작성자</th>
						<td>{{$customerId->writer}}</td>
					</tr>	
					<tr> 
						<th>작성일시</th>
						<td>{{$customerId->created_at}}</td>				
					</tr>	
					<tr> 
						<th>내용</th>
						
						<td>
                            <img height="350" width="350" src="/img/{{$customerId->file}}"/>

                             {!! $customerId->content !!}
                        </td>				
					</tr>				
				</table>
			
			</div>
			<a href="{{route('menuBurger')}}">목록보기</a>
			<a href="{{route('menu_modify_form',$customerId->id)}}">글수정</a>
			<a href="{{route('delete',$customerId->id)}}">글삭제</a>
        </div>
    </div>
    </div>
</section>



<!-- jQuery -->
<script src="/js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="/js/bootstrap.min.js"></script>

@endsection
