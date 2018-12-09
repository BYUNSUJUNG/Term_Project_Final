@extends('layouts.template')

@section('content')
@include('bbs/storeSidebar')
	@foreach($store as $stores)
    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
        <a class="thumbnail" href="storeChickenView/{{$stores->id}}">
        <img height="200" width="200" src="/img/{{$stores->file}}"/>
        
        </a>
    </div>
	@endforeach
	{{$store->links()}}
		<article>
			<div class="store">
				<img height="350" width="350" src="/img/{{$storeId->file}}"/>
			</div>
			<div> 
				<h1>{{$storeId->title}}</h1>
				{{$storeId->content}}
			</div>
			
	<div class="container">
  		<h2>게시글 상세 정보</h2>
  	</div>	


	<div class="container">
		<table class="table">
			<tr> 
				<th>제목</th>
				<td>{{$storeId->title}}</td>
			</tr>	
			<tr> 
				<th>작성자</th>
				<td>{{$storeId->writer}}</td>
			</tr>	
			<tr> 
				<th>작성일시</th>
				<td>{{$storeId->created_at}}</td>				
			</tr>	
			<tr> 
				<th>내용</th>
				<td>{{$storeId->content}}</td>				
			</tr>				
		</table>	
	</div>	
	<div class="container">
		<div class="row">
			<a href="{{route('storeChicken')}}">목록보기</a>
			<a href="{{route('modify_form',$storeId->id)}}">글수정</a>
			<a href="{{route('delete',$storeId->id)}}">글삭제</a>
		</div>	
	</div>
    
<!-- jQuery -->
<script src="/js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="/js/bootstrap.min.js"></script>

@endsection
