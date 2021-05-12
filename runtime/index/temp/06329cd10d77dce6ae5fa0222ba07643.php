<?php /*a:4:{s:129:"/Users/liyifan/Downloads/TP6案例/TP6实战企业源码/源码和数据库/6.0.2/www.study.com/app/index/view/index/article.html";i:1620324589;s:127:"/Users/liyifan/Downloads/TP6案例/TP6实战企业源码/源码和数据库/6.0.2/www.study.com/app/index/view/public/head.html";i:1620324417;s:127:"/Users/liyifan/Downloads/TP6案例/TP6实战企业源码/源码和数据库/6.0.2/www.study.com/app/index/view/public/left.html";i:1620324417;s:127:"/Users/liyifan/Downloads/TP6案例/TP6实战企业源码/源码和数据库/6.0.2/www.study.com/app/index/view/public/foot.html";i:1620324417;}*/ ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php echo htmlentities($archivesData['title']); ?></title>
<meta name="keywords" content="<?php echo htmlentities($archivesData['keywords']); ?>"/>
<meta name="description" content="<?php echo htmlentities($archivesData['description']); ?>"/>

<link href="/static/index/css/style.css" rel="stylesheet" type="text/css">
<link href="/static/index/css/qing.css" rel="stylesheet" type="text/css">
<link href="/static/index/css/qingstyle.css" rel="stylesheet" type="text/css">
<link href="/static/index/css/layui.css" rel="stylesheet" type="text/css">
<script src="/static/index/js/jquery-1.7.1.min.js" type="text/javascript"></script>
<script src="/static/index/js/js.js" type="text/javascript"></script>
</head>
<body>
  <div class="wrap">

    <div class="header_w">
    <div class="header">
      <div class="logo"><a href="/"><img src="/static/index/images/logo.png" /></a></div>
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

        <img src="/static/index/images/home.jpg">&nbsp;当前位置：<a href='/'>首页</a> > <?php echo htmlentities($categoryData['cate_name']); ?> >

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
          <img src="/static/index/images/contactimg.jpg">
        </div>

    </div>


</div>
          
          <div class="mar_t_30 mar_b_30" id="nright_content">

            <div class="wenzhang_title"><?php echo htmlentities($archivesData['title']); ?></div>
            <div class="wenzhang_time">时间：<?php echo htmlentities(date('Y-m-d',!is_numeric($archivesData['time'])? strtotime($archivesData['time']) : $archivesData['time'])); ?>  发布：<a href="/" style="color: #aaa;">重庆大力电子科技有限公司</a></div>
            <div class="wenzhang_content"><?php echo $archivesData['content']; ?></div>

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
        <div class="pic"><img src="/static/index/images/ewm.jpg" width="87" height="87"></div>
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