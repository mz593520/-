<?php /*a:3:{s:74:"E:\phpstudy\phpstudy_pro\WWW\www.study.com\app\index\view\index\index.html";i:1586228482;s:74:"E:\phpstudy\phpstudy_pro\WWW\www.study.com\app\index\view\public\head.html";i:1586226314;s:74:"E:\phpstudy\phpstudy_pro\WWW\www.study.com\app\index\view\public\foot.html";i:1586161396;}*/ ?>
<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo htmlentities($web_title); ?></title>
  <meta name="description" content="<?php echo htmlentities($web_description); ?>" />
  <meta name="keywords" content="<?php echo htmlentities($web_keywords); ?>" />

  <link href="/public/static/index/css/style.css" rel="stylesheet" type="text/css">
  <link href="/public/static/index/css/qing.css" rel="stylesheet" type="text/css">
  <link href="/public/static/index/css/swiper.css" rel="stylesheet" type="text/css">
  <script src="/public/static/index/js/jquery-1.7.1.min.js" type="text/javascript"></script>
  <script src="/public/static/index/js/swiper.min.js"></script>
  <script src="/public/static/index/js/common.js" type="text/javascript"></script>

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

    <!--焦点图 start-->
    <div class="swiper-container index_banner">
      <div class="swiper-wrapper">
        <?php if(is_array($adData) || $adData instanceof \think\Collection || $adData instanceof \think\Paginator): $i = 0; $__LIST__ = $adData;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
        <div class="swiper-slide">
          <a href="<?php echo htmlentities($vo['url']); ?>" style="background: url(<?php $vo['thumb']=str_replace('\\','/',$vo['thumb']);echo $vo['thumb']; ?>) no-repeat center center"></a>
        </div>
        <?php endforeach; endif; else: echo "" ;endif; ?>
      </div>
      <div class="swiper-pagination"></div>
      <!-- Add Arrows -->
      <div class="swiper-button-next"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
      <div class="swiper-button-prev"><i class="fa fa-angle-left" aria-hidden="true"></i></div>
    </div>

    <!-- Initialize Swiper -->

    <!--焦点图  end-->



    <div class="pro_box">

      <div class="tit">产品中心</div>
      <div class="tit_2">POPULAR RECOMMENDATION</div>

      <div class="list">
        <ul>
          <?php if(is_array($archivesData) || $archivesData instanceof \think\Collection || $archivesData instanceof \think\Paginator): $i = 0; $__LIST__ = $archivesData;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
          <li>
            <div class="pic"><a href="<?php echo url('index/index/article',array('id'=>$vo['id'])); ?>"><img src="<?php echo htmlentities($vo['thumb']); ?>" /></a></div>
            <div class="p_name"> <a href="<?php echo url('index/index/article',array('id'=>$vo['id'])); ?>"><?php echo htmlentities($vo['title']); ?></a></div>
          </li>
         
          <?php endforeach; endif; else: echo "" ;endif; ?>


        </ul>
        <div class="clear"></div>
      </div>
    </div>

    <div class="jsys_box">

      <div class="tit">技术优势</div>
      <div class="tit_2">POPULAR RECOMMENDATION</div>

      <div class="list">
        <ul>
          <li>
            <div class="pic" style=" background-image:url(/public/static/index/images/jsys_1.png)"><a href="#"><img
                  src="/public/static/index/images/blank3.png" /></a></div>
            <div class="j_name"><a href="#">业务访问更高效</a></div>
            <div class="j_txt">图片自适应转码、缓存、压缩等技术，
              有效提升业务传输效率和服务器<br />
              响应速度，用户访问速度提升30%。</div>
          </li>
          <li>
            <div class="pic" style=" background-image:url(/public/static/index/images/jsys_2.png)"><a href="#"><img
                  src="/public/static/index/images/blank3.png" /></a></div>
            <div class="j_name"><a href="#">全面的稳定性保障</a></div>
            <div class="j_txt">包含前段链路至后端数据库的检测，<br />
              通过主动与被动探测技术相结合，<br />
              更全面、更真实的检测业务健康状况。</div>
          </li>
          <li>
            <div class="pic" style=" background-image:url(/public/static/index/images/jsys_3.png)"><a href="#"><img
                  src="/public/static/index/images/blank3.png" /></a></div>
            <div class="j_name"><a href="#">业务交付更安全</a></div>
            <div class="j_txt">保障业务交付全程安全可靠<br />
              服务器漏洞实时检测技术<br />
              扫描业务潜在风险。</div>
          </li>
          <li>
            <div class="pic" style=" background-image:url(/public/static/index/images/jsys_4.png)"><a href="#"><img
                  src="/public/static/index/images/blank3.png" /></a></div>
            <div class="j_name"><a href="#">云端部署更便捷</a></div>
            <div class="j_txt">可与VMware联动实现自动化运维；<br />
              提供硬件一虚多、软件版等多种产品形态
              开放的API接口，适配云计算环境</div>
          </li>

        </ul>
        <div class="clear"></div>
      </div>
    </div>

    <div class="index_company">
      <div class="tit">公司简介</div>
      <div class="tit_2">COMPANY INFO</div>
      <div class="company_box">
        <div class="index_company_left">
          <p>重庆大力电子科技有限公司，成立于2006年，公司位于重庆市江北区新光路28号，占地20000平米，是国内封装胶膜领域的领导性企业之一。
          </p>
          <p class="mar_t_10">公司自成立以来，一直致力于是国内专业的电子开关及插座制造商，主要产品有：贴片轻触开关，插件轻触开关，SS拨动开关，SK拨动开关，微型拨动开关，贴片USB插座，USB 2.0插座，插件USB接口，MINI USB插座，USB接口，MICRO USB插座，MK USB公座等产品。</p>
          <p class="mar_t_10">秉承“以德经营，聚力创新，成就事业”的经营理念，我们将以创新为导向，持续提升产品质量，放心企业，打造一流的封装功能膜企业。</p>
      </div>
      <div class="index_company_right"><img src="/public/static/index/images/index_company.jpg"></div>
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