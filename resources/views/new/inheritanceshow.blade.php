@extends('common.layouts')
@section('title','传承动态')
@section('style')
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:300italic,400italic,700italic,400,300,700&amp;subset=all' rel='stylesheet' type='text/css'>
    <!--<link href="css/socicon.css" rel="stylesheet" type="text/css" /> -->
    <link href="http://localhost/css/bootstrap-social.css" rel="stylesheet" type="text/css" />
    <link href="http://localhost/css/font-awesome.min.css"" rel="stylesheet" type="text/css" />
    <link href="http://localhost/css/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
    <link href="http://localhost/css/animate.min.css" rel="stylesheet" type="text/css" />
    <link href="http://localhost/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->
    <!-- BEGIN: BASE PLUGINS  -->
    <link href="http://localhost/css/settings.css" rel="stylesheet" type="text/css" />
    <link href="http://localhost/css/layers.css" rel="stylesheet" type="text/css" />
    <link href="http://localhost/css/navigation.css" rel="stylesheet" type="text/css" />
    <link href="http://localhost/css/cubeportfolio.min.css" rel="stylesheet" type="text/css" />
    <link href="http://localhost/css/owl.carousel.css" rel="stylesheet" type="text/css" />
    <link href="http://localhost/css/jquery.fancybox.css" rel="stylesheet" type="text/css" />
    <link href="http://localhost/css/slider.css" rel="stylesheet" type="text/css" />
    <!-- END: BASE PLUGINS -->
    <!-- BEGIN: PAGE STYLES -->
    <link href="http://localhost/css/ilightbox.css" rel="stylesheet" type="text/css" />
    <!-- END: PAGE STYLES -->
    <!-- BEGIN THEME STYLES -->
    <link href="http://localhost/css/plugins.css" rel="stylesheet" type="text/css" />
    <link href="http://localhost/css/components.css" id="style_components" rel="stylesheet" type="text/css" />
    <link href="http://localhost/css/default.css" rel="stylesheet" id="style_theme" type="text/css" />
    <link href="http://localhost/css/custom.css" rel="stylesheet" type="text/css" />
    @stop
    @section('banner')
    <div class="c-subtitle c-fonts-uppercase c-fonts-bold c-bg-img-center" >
      <img src="http://localhost/img/social.jpg" alt="Image-1" width="100%" height="auto">
    </div>       
    @stop
    @section('content')
    <div class="c-content-box  c-bg-white" style="padding-top: 45px;">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                   	<div class="row c-menu-left">
                     	<div class="c-menu-left-img">
                            <span style="background-image: url(http://localhost/img/home.png);"></span>
                     	    <a href="{{url('/')}}">首页</a>
                        </div>
                     	<div class="c-menu-left-img">
                            <span style="background-image: url(http://localhost/img/arrows.png);"></span>
                            <a href="{{route('inheritance')}}">新闻中心</a>
                        </div>
                   	</div>
                </div>
                <div class="col-md-6">
                   	<div class="row">
                     	<div class="c-menu-right">
                     	
                     	</div>
                   	</div>
                </div>
            </div>
        </div>              
    </div>
    <div class="c-content-box c-bg-white" style="padding-top: 15px;">
        <div class="container" >
            <div class="col-md-12" >
                <div class="row" style="border-top: 1px solid #c9caca;">   
                    <div class="c-text-content">
                        <div class="c-title-center">
                            <h1>{{$news->title}}</h1>
                            <p>{{$news->created_at}}</p>
                        </div>
                      
                        <p style="font-size: 12.5px;color: #727171;text-align: center;">
                         {!!$news->content!!}</p>
                                 
                    </div>
                            
                           
                       
                    </div>
                </div>
            </div>
        </div>       
    </div>
    @stop