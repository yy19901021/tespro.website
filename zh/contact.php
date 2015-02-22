<?php 
	$title = "联系我们";
?>
<?php 
	$BaseUrl = "";
	include("../includes/universal.php");
    $CurrentTab = 4;
	include("header.php");
?>
<!--Start of content-->
<div id="content">
    <div id="contact-page-title" class="jumbo-title"><!-- Jumbo Title -->
        <div class="PageTitleBrg container">
            <div id="tp-intro" class="row">
              <div class="col-md-7 col-sm-7">
                    <h1><?php echo $title ?></h1>
                    <p><br /><br /><br /><br /><br /><br /></p>
              </div>
              <div class="col-md-4 col-sm-5">
                <!-- <img src="images/banners/reading-meter.png" /> -->
              </div>
            </div>      
        </div>
    </div><!-- ./Jumbo Title -->
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h3>公司总部</h3>
                <p>
                地址：广东省 珠海市 吉大<br />白莲路184号 立体科技大厦二楼
                <br />邮政编码：519015
                <br />电话：+86-756-3233800 
                <br />传真：+86-756-3233900
                <br />电子邮件：<a href="m&#97;ilto:&#115;&#97;&#108;&#101;&#115;&#64;&#116;&#101;&#115;&#112;&#114;&#111;&#46;&#99;&#111;&#109;&#46;&#99;&#110;" title="Contact Tespro">&#115;&#97;&#108;&#101;&#115;&#64;&#116;&#101;&#115;&#112;&#114;&#111;&#46;&#99;&#111;&#109;&#46;&#99;&#110;</a>
                </p>
            </div>
            <div class="col-md-6">
<!--引用百度地图API-->
<style type="text/css">
    html,body{margin:0;padding:0;}
    .iw_poi_title {color:#CC5522;font-size:14px;font-weight:bold;overflow:hidden;padding-right:13px;white-space:nowrap}
    .iw_poi_content {font:12px arial,sans-serif;overflow:visible;padding-top:4px;white-space:-moz-pre-wrap;word-wrap:break-word}
</style>
<script type="text/javascript" src="http://api.map.baidu.com/api?key=&v=1.1&services=true"></script>
<!--百度地图容器-->
<div style="width:425px;height:350px;border:#ccc solid 1px;" id="dituContent"></div>
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
        var point = new BMap.Point(113.572153,22.252788);//定义一个中心点坐标
        map.centerAndZoom(point,14);//设定地图的中心点和坐标并将地图显示在地图容器中
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
    var ctrl_nav = new BMap.NavigationControl({anchor:BMAP_ANCHOR_TOP_LEFT,type:BMAP_NAVIGATION_CONTROL_SMALL});
    map.addControl(ctrl_nav);
                //向地图中添加比例尺控件
    var ctrl_sca = new BMap.ScaleControl({anchor:BMAP_ANCHOR_BOTTOM_LEFT});
    map.addControl(ctrl_sca);
    }
    
    //标注点数组
    var markerArr = [{title:"珠海泰易自动化设备有限公司",content:"广东省&nbsp;珠海市&nbsp;吉大&nbsp;白莲路184号&nbsp;立体科技大厦二楼",point:"113.575|22.254259",isOpen:0,icon:{w:21,h:21,l:0,t:0,x:6,lb:5}}
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
        var iw = new BMap.InfoWindow("<b class='iw_poi_title' title='" + json.title + "'>" + json.title + "</b><div class='iw_poi_content'>"+json.content+"</div>");
        return iw;
    }
    //创建一个Icon
    function createIcon(json){
        var icon = new BMap.Icon("http://app.baidu.com/map/images/us_mk_icon.png", new BMap.Size(json.w,json.h),{imageOffset: new BMap.Size(-json.l,-json.t),infoWindowOffset:new BMap.Size(json.lb+5,1),offset:new BMap.Size(json.x,json.h)})
        return icon;
    }
    
    initMap();//创建和初始化地图
</script>
            </div>
        </div>
    </div>
</div><!--End of content-->
<?php include("footer.php") ?>