<!DOCTYPE HTML>
<html lang="zh-CN">
<head>
<meta charset="UTF-8">
<title>个人博客</title>
<meta name="keywords" content="个人博客" />
<meta name="description" content="" />
<link rel="stylesheet" href="/assets/web/css/index.css"/>
<link rel="stylesheet" href="/assets/web/css/style.css"/>
<script type="text/javascript" src="/assets/web/js/jquery1.42.min.js"></script>
<script type="text/javascript" src="/assets/web/js/jquery.SuperSlide.2.1.1.js"></script>
<!--[if lt IE 9]>
<script src="js/html5.js"></script>
<![endif]-->
</head>

<body>
    <!--header start-->
    <div id="header">
      <h1>个人博客</h1>
      <p>青春是打开了,就合不上的书。人生是踏上了，就回不了头的路，爱情是扔出了，就收不回的赌注。</p>    
    </div>
     <!--header end-->
    <!--nav-->
     <div id="nav">
        <ul>
         <li><a href="/site/index">首页</a></li>
         <li><a href="/site/aboutme">关于我</a></li>
         <li><a href="/site/other">碎言碎语</a></li>
         <li><a href="/site/riji">个人日记</a></li>
         <li><a href="/site/photo">相册展示</a></li>
         <li><a href="/site/learn">学无止境</a></li>
         <li><a href="/site/message">留言板</a></li>
         <div class="clear"></div>
        </ul>
      </div>
       <!--nav end-->
    <!--content start-->
    <div id="content">
    <?php echo $content; ?>
     <!--right-->
     <div class="right" id="c_right">
      <div class="s_about">
      <h2>关于博主</h2>
       <img src="/images/1410621862312890.jpg" width="230" height="230" alt="博主"/>
       <p>博主：XX</p>
       <p>职业：web前端、视觉设计</p>
       <p>简介：</p>
       <p>
       <a href="#" title="联系博主"><span class="left b_1"></span></a><a href="#" title="加入QQ群，一起学习！"><span class="left b_2"></span></a>
       <div class="clear"></div>
       </p>
      </div>
      <!--栏目分类-->
       <div class="lanmubox">
          <div class="hd">
           <ul><li>精心推荐</li><li>最新文章</li><li class="hd_3">随机文章</li></ul>
          </div>
          <div class="bd">
            <ul>
                <li><a href="#" title="网站项目实战开发（-）">网站项目实战开发（-）</a></li>
                <li><a href="#" title="关于响应式布局">关于响应式布局</a></li>
                <li><a href="#" title="如何创建个人博客网站">如何创建个人博客网站</a></li>
                <li><a href="#" title="网站项目实战开发（二）">网站项目实战开发（二）</a></li>
                <li><a href="#" title="为什么新站前期排名老是浮动？(转)">为什么新站前期排名老是浮动？(转)</a></li>
            </ul>
             <ul>
                <li><a href="#" title="网站项目实战开发（-）">网站项目实战开发（-）</a></li>
                <li><a href="#" title="关于响应式布局">关于响应式布局</a></li>
                <li><a href="#" title="如何创建个人博客网站">如何创建个人博客网站</a></li>
                <li><a href="#" title="网站项目实战开发（二）">网站项目实战开发（二）</a></li>
                <li><a href="#" title="为什么新站前期排名老是浮动？(转)">为什么新站前期排名老是浮动？(转)</a></li>
            </ul>
             <ul>
                <li><a href="#" title="网站项目实战开发（-）">网站项目实战开发（-）</a></li>
                <li><a href="#" title="关于响应式布局">关于响应式布局</a></li>
                <li><a href="#" title="如何创建个人博客网站">如何创建个人博客网站</a></li>
                <li><a href="#" title="网站项目实战开发（二）">网站项目实战开发（二）</a></li>
                <li><a href="#" title="为什么新站前期排名老是浮动？(转)">为什么新站前期排名老是浮动？(转)</a></li>
            </ul>
             
            
          </div>
       </div>
       <!--end-->
       <div class="link">
        <h2>友情链接</h2>
        <p><a href="http://www.duanliang920.com">段亮个人博客</a></p>
        <p><a href="http://www.arebz.com/">标准互联</a></p>
        <p><a href="http://blog.sina.com.cn/u/5616565837">卢海平博客</a></p>
       </div>
     </div>
     <!--right end-->
     <div class="clear"></div>
</div>
<!--content end-->
<!--footer start-->
<div id="footer">
 <p>Design by:<a href="http://www.duanliang920.com" target="_blank">luhp</a> 2016-1-4</p>
</div>
<!--footer end-->
<script type="text/javascript">jQuery(".lanmubox").slide({easing:"easeOutBounce",delayTime:400});</script>
<script  type="text/javascript" src="/assets/web/js/nav.js"></script>
</body>
</html>