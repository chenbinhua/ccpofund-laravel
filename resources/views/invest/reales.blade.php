@extends('invest.invest')
@section('menu-left')
	<div class="c-menu-left-img">
		<span style="background-image: url(http://www.ccpofund.com/img/arrows.png);"></span>
   	    <a href="{{route('real')}}" class="nav-active">{{$title}}</a>
    </div>
@stop
@section('text-content')
     <img src="http://www.ccpofund.com/img/real.jpg" alt="" class="img-responsive center-block">
     <div style="margin-top: 30px;font-size: 12.5px;line-height: 21px;"> 
        <p style="text-indent: 2em;">
          <!-- 传承基金通过投资入股为地产项目提供融资，同时协助合作伙伴提升物业、协助销售、提供资产管理服务等最终完成投资退出。 -->
          {!!$real->content!!}
        </p>
        <p style="padding-top:200px;">
            成功案例: 
            <!-- <span>
              <a href="" style="padding-left: 20px;">留学生创业大厦二期</a>
            </span> -->
            @foreach($invest as $invest)
            <span>
              <a href="{{route('invest',$invest->id)}}"  style="padding-left: 20px">{{$invest->title}}</a>
            </span>
            @endforeach
        </p>
     </div>          
	
 @stop