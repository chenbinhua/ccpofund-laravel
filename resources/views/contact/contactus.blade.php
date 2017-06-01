@extends('contact.contact')
@section('menu-left')
	<div class="c-menu-left-img">
		<span style="background-image: url(../img/arrows.png);"></span>
   	    <a href="{{route('contactus')}}">联系我们</a>
    </div>
@stop
@section('text-content')

	<script type="text/javascript" src="http://api.map.baidu.com/api?key=&v=1.1&services=true"></script><!--百度地图容器-->
	<div style="background-color: #efefef;padding:25px;" class="clearfix">
	<div class="col-md-8">
		<div id="dituContent" class="ditu-content">
	&nbsp;</div>
	</div>
	<div class="col-md-4" >
	<div class="row" style=" display: table-cell;
    vertical-align: middle; /*定义body的元素垂直居中*/
           width: 333px;
            height: 360px;padding-left:20px;
            ">
		<img src="../img/contactlg.png" alt="">
		<h2>深圳市传承基金管理有限公司</h2>
		<p>
			地址：深圳市福田区卓越时代广场44层<br />
			邮编：518000 <br />
			电话：0755-22941400<br />
			网址：www.ccpofund.com
		</p>
	</div>
	</div>
</div>
<script type="text/javascript">
    //创建和初始化地图函数：
    function initMap(){
        createMap();//创建地图
        setMapEvent();//设置地图事件
        addMapControl();//向地图添加控件
        addMarker();//向地图中添加marker
    }
    //创建地图函数：
    function createMap(){
        var map = new BMap.Map("dituContent");//在百度地图容器中创建一个地图
        var point = new BMap.Point(114.063464,22.54015);//定义一个中心点坐标
        map.centerAndZoom(point,2338);//设定地图的中心点和坐标并将地图显示在地图容器中
        window.map = map;//将map变量存储在全局
    }
    //地图事件设置函数：
    function setMapEvent(){
        map.enableDragging();//启用地图拖拽事件，默认启用(可不写)
        map.enableScrollWheelZoom();//启用地图滚轮放大缩小
        map.enableDoubleClickZoom();//启用鼠标双击放大，默认启用(可不写)
        map.enableKeyboard();//启用键盘上下左右键移动地图
    }
    //地图控件添加函数：
    function addMapControl(){
        //向地图中添加缩放控件
	var ctrl_nav = new BMap.NavigationControl({anchor:BMAP_ANCHOR_TOP_LEFT,type:BMAP_NAVIGATION_CONTROL_LARGE});
	map.addControl(ctrl_nav);
        //向地图中添加缩略图控件
	var ctrl_ove = new BMap.OverviewMapControl({anchor:BMAP_ANCHOR_BOTTOM_RIGHT,isOpen:1});
	map.addControl(ctrl_ove);
        //向地图中添加比例尺控件
	var ctrl_sca = new BMap.ScaleControl({anchor:BMAP_ANCHOR_BOTTOM_LEFT});
	map.addControl(ctrl_sca);
    }
    //标注点数组
    var markerArr = [{title:"深圳传承基金管理有限公司",content:"公司地址：深圳市福田区卓越时代广场4408室<br/>电话：0755-22941400",point:"114.063464|22.54015",isOpen:1,icon:{w:21,h:21,l:0,t:0,x:6,lb:5}}
		 ];
//创建marker
    function addMarker(){
        for(var i=0;i<markerArr.length;i++){
            var json = markerArr[i];
            var p0 = json.point.split("|")[0];
            var p1 = json.point.split("|")[1];
            var point = new BMap.Point(p0,p1);
			var iconImg = createIcon(json.icon);
            var marker = new BMap.Marker(point,{icon:iconImg});
			var iw = createInfoWindow(i);
			var label = new BMap.Label(json.title,{"offset":new BMap.Size(json.icon.lb-json.icon.x+10,-20)});
			marker.setLabel(label);
            map.addOverlay(marker);
            label.setStyle({
                        borderColor:"#808080",
                        color:"#333",
                        cursor:"pointer"
            });
			(function(){
				var index = i;
				var _iw = createInfoWindow(i);
				var _marker = marker;
				_marker.addEventListener("click",function(){
				    this.openInfoWindow(_iw);
			    });
			    _iw.addEventListener("open",function(){
				    _marker.getLabel().hide();
			    })
			    _iw.addEventListener("close",function(){
				    _marker.getLabel().show();
			    })
				label.addEventListener("click",function(){
				    _marker.openInfoWindow(_iw);
			    })
				if(!!json.isOpen){
					label.hide();
					_marker.openInfoWindow(_iw);
				}
			})()
        }
    }
//创建InfoWindow
    function createInfoWindow(i){
        var json = markerArr[i];
        var iw = new BMap.InfoWindow("<b class='iw_poi_title' title='"+ json.title + "'>" + json.title + "</b><div class='iw_poi_content'>"+json.content+"</div>");
        return iw;
    }
    //创建一个Icon
    function createIcon(json){
        var icon = new BMap.Icon("http://app.baidu.com/map/images/us_mk_icon.png", new BMap.Size(json.w,json.h),{imageOffset: new BMap.Size(-json.l,-json.t),infoWindowOffset:new BMap.Size(json.lb+5,1),offset:new BMap.Size(json.x,json.h)})
        return icon;
    }
    initMap();//创建和初始化地图
</script>

 @stop