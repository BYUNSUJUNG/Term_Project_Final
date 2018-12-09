@extends('template')

@section('content')
@include('bbs/customerSidebar')

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
        <form method="post" action="menu_write" novalidate>
          <input type="hidden" name="_token" value="{{csrf_token()}}">
          <div class="form-group">
            <label for="title">제목:</label>
            <input type="text" class="form-control" id="title" name="title"
            required>
          </div>
          <div class="form-group">
            <label for="writer">메뉴:</label>
            <input type="text" class="form-control" id="menu_board" name="menu_board"
            required>
          </div>    
          <div class="form-group">
            <label for="writer">작성자:</label>
            <input type="text" class="form-control" id="writer" name="writer"
            required>
          </div>    
          <div class="form-group"> 
            <label>업로드 파일 선택:</label>
            <input type="file" name="file">
          </div>
          <div class="form-group">
            <label for="writer">가격:</label>
            <input type="text" class="form-control" id="price" name="price"
            required>
          </div>
          <div class="form-group">
            <label for="content">내용:</label>
            <textarea class="form-control" rows="5" id="content" name="content"
            required></textarea>
          </div>

          <script type="text/javascript">
            var oEditors = [];

            // 추가 글꼴 목록
            //var aAdditionalFontSet = [["MS UI Gothic", "MS UI Gothic"], ["Comic Sans MS", "Comic Sans MS"],["TEST","TEST"]];

            nhn.husky.EZCreator.createInIFrame({
              oAppRef: oEditors,
              elPlaceHolder: "content",
              sSkinURI: "/SmartEditor/SmartEditor2Skin.html",	
              fOnAppLoad : function(){
                //예제 코드
                //oEditors.getById["ir1"].exec("PASTE_HTML", ["로딩이 완료된 후에 본문에 삽입되는 text입니다."]);
              },
              fCreator: "createSEditor2"
            });

            function submitContents(elClickedObj) {
              oEditors.getById["content"].exec("UPDATE_CONTENTS_FIELD", []);	// 에디터의 내용이 textarea에 적용됩니다.
              
              // 에디터의 내용에 대한 값 검증은 이곳에서 document.getElementById("ir1").value를 이용해서 처리하면 됩니다.
              
              try {
                elClickedObj.form.submit();
              } catch(e) {}
            }
          </script>

          <button type="submit" class="btn btn-primary" name="write" onclick="submitContents()">글등록</button>
          <a href="{{route('menuBurger')}}">글목록</a>
        </form>
            
        </div>
    </div>
    </div>
</section>


    
<!-- jQuery -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>


