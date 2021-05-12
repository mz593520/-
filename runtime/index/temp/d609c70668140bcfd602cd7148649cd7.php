<?php /*a:4:{s:73:"E:\phpstudy\phpstudy_pro\WWW\www.study.com\app\index\view\index\list.html";i:1586226903;s:74:"E:\phpstudy\phpstudy_pro\WWW\www.study.com\app\index\view\public\head.html";i:1586226314;s:74:"E:\phpstudy\phpstudy_pro\WWW\www.study.com\app\index\view\public\left.html";i:1586228891;s:74:"E:\phpstudy\phpstudy_pro\WWW\www.study.com\app\index\view\public\foot.html";i:1586161396;}*/ ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php echo htmlentities($categoryData['seo_title']); ?></title>
<meta name="keywords" content="<?php echo htmlentities($categoryData['seo_keywords']); ?>"/>
<meta name="description" content="<?php echo htmlentities($categoryData['seo_description']); ?>"/>

<link href="/public/static/index/css/style.css" rel="stylesheet" type="text/css">
<link href="/public/static/index/css/qing.css" rel="stylesheet" type="text/css">
<link href="/public/static/index/css/qingstyle.css" rel="stylesheet" type="text/css">
<link href="/public/static/index/css/layui.css" rel="stylesheet" type="text/css">
<script src="/public/static/index/js/jquery-1.7.1.min.js" type="text/javascript"></script>
<script src="/public/static/index/js/js.js" type="text/javascript"></script>

</head>
<body>
  <div class="wrap">

    <div class="header_w">
    <div class="header">
      <div class="logo"><a href="/"><img src="/public/static/index/images/logo.png" /></a></div>  
      <div class="h_txt">
        专业拨动开关轻触开关USB插座生产厂家
      </div>
      <div class="h_tel"><span class="tel_tit">全国服务热线</span><span class="tel_num"><?php echo htmlentities($tel1); ?></span></div>
      <div class="btn_menu"></div>
      <div class="clear"></div>
    </div>
</div>

<!--手机版 导航菜单遮罩层 start-->
<div class="mask"></div>
  <div class="nav_w">
  <div class="close"></div>
  <div class="nav">
    <ul>
      <li  <?php if($menu_id == 0): ?>class='current'<?php endif; ?>>
        <a href="/">网站首页</a>
      </li>
      <li <?php if($menu_id == 1): ?>class='current'<?php endif; ?>>
        <a href="<?php echo url('index/index/company'); ?>">企业简介</a>
        
      </li>
      <li>
        <a href="<?php echo url('index/index/product'); ?>">产品中心</a>
        
      </li>
      <li>
        <a href="<?php echo url('index/index/list',array('id'=>5)); ?>">解决方案</a>
        
      </li>
      <li>
        <a href="<?php echo url('index/index/list',array('id'=>6)); ?>">资讯动态</a>
        
      </li>
       <li <?php if($menu_id == 7): ?>class='current'<?php endif; ?>>
        <a href="<?php echo url('index/index/contact'); ?>">联系我们</a>
      </li> 
      </ul>
      <div class="clear"></div>
  </div>
  </div> 


  <div class="solutionbg" style="background: url(<?php $categoryData['thumb']=str_replace('\\','/',$categoryData['thumb']);echo $categoryData['thumb']; ?>) no-repeat center center; width: 100%;height: 348px"></div>
  <div class="positionbg">
    
      <div class="layui-container">  

        <img src="/public/static/index/images/home.jpg">&nbsp;当前位置：<a href='/'>首页</a> > <?php echo htmlentities($categoryData['cate_name']); ?> > 

      </div>

  </div>

  <div class="layui-container"> 


    <div class="mar_t_30 mar_b_30" id="nleft_content">
  
    <div class="nleft_title fb f16 color1">产品中心</div>
    <div class="nleft_boder">
      
        <ul class="chanpin_logo">

          <?php if(is_array($leftProductData) || $leftProductData instanceof \think\Collection || $leftProductData instanceof \think\Paginator): $i = 0; $__LIST__ = $leftProductData;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
          <li><a href="<?php echo url('index/index/article',array('id'=>$vo['id'])); ?>"><img src="<?php echo htmlentities($vo['thumb']); ?>"></a></li>
          <?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>

    </div>
    <div class="nleft_title fb f16 mar_t_20 color1">联系我们</div>
    <div class="nleft_boder line30">
        <div style="padding:20px 30px">
          <div class="fb"><?php echo htmlentities($web_title); ?></div> 
          全国咨询热线：<?php echo htmlentities($tel1); ?>
          <img src="/public/static/index/images/contactimg.jpg">
        </div>

    </div>


</div>
          <div class="mar_t_30 mar_b_30" id="nright_content">

              <ul class="nsolution">
                 <?php if(is_array($archivesData) || $archivesData instanceof \think\Collection || $archivesData instanceof \think\Paginator): $i = 0; $__LIST__ = $archivesData;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                  <li>

                      <div class="title"><a href="<?php echo url('index/index/article',array('id'=>$vo['id'])); ?>"><?php echo htmlentities($vo['title']); ?></a></div>
                      <div class="time"><?php echo htmlentities(date('Y-m-d',!is_numeric($vo['time'])? strtotime($vo['time']) : $vo['time'])); ?></div>
                      

                  </li>
                  <?php endforeach; endif; else: echo "" ;endif; ?>

              </ul>

              <div class="fenye"> <?php echo $archivesData; ?></div>


          </div>



  </div>

  <div class="footer_w">
    <div class="footer">
      <div class="txt">
         <div class="t_1"><?php echo htmlentities($web_title); ?></div>
      
         <div class="t_2">全国统一咨询热线：<?php echo htmlentities($tel1); ?> &nbsp;<br>
  <span>联系地址：<?php echo htmlentities($address); ?> &nbsp;<?php echo htmlentities($beian); ?></span>
          </div>
      </div>
      <div class="ewm">
        <div class="pic"><img src="/public/static/index/images/ewm.jpg" width="87" height="87"></div>
        <div class="ewm_txt">
        微信扫一扫<br>
  即时与客服沟通
        </div>
      </div>
      <div class="clear"></div>
    </div>
  </div>
  
</div>

</body>
</html>