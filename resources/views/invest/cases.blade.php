@extends('invest.invest')
@section('menu-left')
	<div class="c-menu-left-img">
		<span style="background-image: url(http://www.ccpofund.com/img/arrows.png);"></span>
   	    <a href="{{route('cases')}}">{{$title}}</a>
    </div>
@stop
@section('text-content')
<!-- 	<ul>
	    <li class="c-invest-case"> 
	        <img src="../img/case2.jpg" alt="" class="img-responsive">
	        <h3>
			    <a href="">民生银行大厦</a>
			</h3>    
	    </li>
	    <li class="c-invest-case"> 
	        <img src="../img/case1.jpg" alt="" class="img-responsive">
	        <h3>
		        <a href="">民生银行大厦</a>
	        </h3> 
	    </li>
	    <li class="c-invest-case"> 
	        <img src="../img/case1.jpg" alt="" class="img-responsive">
	        <h3>
	            <a href="">民生银行大厦</a>
	        </h3>   
	    </li>
	    <li class="c-invest-case"> 
	        <img src="../img/case1.jpg" alt="" class="img-responsive">
	        <h3>
		        <a href="">民生银行大厦</a>
	        </h3> 
	    </li>
	    <li class="c-invest-case"> 
	        <img src="../img/case1.jpg" alt="" class="img-responsive">
	        <h3>
		        <a href="">民生银行大厦</a>
	        </h3>
	    </li>  
	</ul>   -->              
	<ul>
		@foreach($invest11 as $invest)
		<li class="c-invest-case"> 
	        <img src="http://www.ccpofund.com/upload/{{$invest->img}}" alt="" class="img-responsive">
	        <h3>
		        <a href="{{route('invest',$invest->id)}}">{{$invest->title}}</a>
	        </h3>
	    </li>  
	    @endforeach
	</ul>

	{{ $invest11->links() }}
 @stop