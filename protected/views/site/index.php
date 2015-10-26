<!DOCTYPE html>
<html>
<head>
<title>Count Down HTML Template</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<!--favicons-->
<link rel="shortcut icon" href="./favicon.ico" />
<!-- Bootstrap -->
<link href="./assets/css/bootstrap.css" rel="stylesheet" media="screen" />
<link href="./assets/css/style.css" rel="stylesheet" media="screen" />
<link href="./assets/css/bootstrap-responsive.css" rel="stylesheet" media="screen" />

<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="./assets/js/html5shiv.js"></script>
    <![endif]-->
<style>
@font-face {
	font-family: 'JournalRegular';
	src: url('./assets/fonts/journal-webfont.eot');
	src: url('./assets/fonts/journal-webfont_162a16fe.eot') format('embedded-opentype'), url('./assets/fonts/journal-webfont.woff') format('woff'), url('./assets/fonts/journal-webfont.ttf') format('truetype'), url('./assets/fonts/journal-webfont.svg') format('svg');
	font-weight: normal;
	font-style: normal;
}
</style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- Original URL: http://freshcreations.nl/themeforest/count/
Date Downloaded: 4/19/2013 3:42:35 PM !-->
</head>
<body class="page-bg">

<div class="container">
  <div class="hero-unit">
    <h1> </h1>
  </div>
  <div class="social-links">
    <div class="span9">
      <ul id="social-icons">
        <li class="facebook"><a href="#" data-toggle="tooltip" title="FACEBOOK">Facebook</a></li>
        <li class="twitter"><a href="#" data-toggle="tooltip" title="TWITTER">Twitter</a></li>
        <li class="flickr"><a href="#" data-toggle="tooltip" title="FLICKR">Flickr</a></li>
        <li class="pinterest"><a href="#" data-toggle="tooltip" title="PINTEREST">Pinterest</a></li>
        <li class="dribble"><a href="#" data-toggle="tooltip" title="DRIBBLE">Dribble</a></li>
        <li class="gplus"><a href="#" data-toggle="tooltip" title="GOOGLE PLUS">gplus</a></li>
        <li class="instagram"><a href="#" data-toggle="tooltip" title="INSTAGRAM">instagram</a></li>
        <li>
          <!-- JiaThis Button BEGIN -->
<div id="ckepop">
<span class="jiathis_txt">分享到：</span>
<a class="jiathis_button_qzone">QQ空间</a>
<a href="http://www.jiathis.com/share" class="jiathis jiathis_txt jiathis_separator jtico jtico_jiathis" target="_blank">更多</a>
<a class="jiathis_counter_style"></a>
</div>
<script type="text/javascript" src="http://v2.jiathis.com/code/jia.js" charset="utf-8"></script>
<!-- JiaThis Button END -->
        </li>
      </ul>
    </div>
  </div>
  <div class="clock">
    <div class="span6"> <img class="img-clock" src="./images/bg-clock.png" alt="clock counter" />
      <div id="countdown">
        <div class="days"><span id="days"></span><ins>/</ins> <em>天 /</em></div>
        <div class="hours"><span id="hours"></span> <ins>/</ins> <em>小时 /</em></div>
        <div class="minutes"><span id="minutes"></span> <ins>/</ins> <em>分 /</em></div>
        <div class="seconds"><span id="seconds"></span><em>秒</em> </div>
      </div>
    </div>
  </div>
</div>
<div class="addthis"> 
  <!-- AddThis Button BEGIN -->
  <div class="addthis_toolbox addthis_default_style "> <a class="addthis_button_tweet"></a> <a class="addthis_button_facebook_like"></a> </div>

  <!-- AddThis Button END --> 
</div>

<!-- Modal -->
<div id="subscribe" class="modal hide fade">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
  </div>
  <div class="modal-body">
    <div class="form-container">
      <form class="form-horizontal" />
        <h2>Fill in your 
          email address 
          &amp; we'll let you know when we launch!</h2>
        <div class="control-group">
          <div class="controls">
            <input type="text" id="inputName" value="Name" onFocus="if(this.value==this.defaultValue) this.value='';" onBlur="if(this.value=='') this.value=this.defaultValue;" />
          </div>
        </div>
        <div class="control-group">
          <div class="controls">
            <input type="text" id="inputEmail" value="Email" onFocus="if(this.value==this.defaultValue) this.value='';" onBlur="if(this.value=='') this.value=this.defaultValue;" />
          </div>
        </div>
        <div class="control-group">
          <div class="controls">
            <button type="submit" class="btn">NOTIFY ME</button>
          </div>
        </div>
      </form>
    </div>
    <div id="map_canvas" style="width: 100%; height: 262px;"></div>
  </div>
</div>

<!-- Le javascript
    ================================================== --> 
<!-- Placed at the end of the document so the pages load faster --> 
<script src="./assets/js/jquery.js"></script>
<script src="./assets/js/bootstrap-transition.js"></script> 
<script src="./assets/js/bootstrap-modal.js"></script> 
<script src="./assets/js/bootstrap-tooltip.js"></script> 
<script type="text/javascript" src="./assets/js/jquery.countdown.min.js"></script> 

<script type="text/javascript" src="./assets/js/jquery.ui.map.min.js"></script> 
<script type="text/javascript" src="./assets/js/jquery.custom.js"></script>

</body>
</html>

<script>
  
var runtime = 0;
function GetRTime(){
  var end = <?php echo $end_time; ?>;
  var now = <?php echo time();?>;
  var Ms = (end-now)*1000;
  var nMs=Ms-runtime*1000;
  var nD=Math.floor(nMs/(60*60*24*1000));
  var nH=Math.floor(nMs/(60*60*1000))%24;
  var nM=Math.floor(nMs/(60*1000))%60;
  var nS=Math.floor(nMs/1000)%60;
    $("#days").html(nD);
    $("#hours").html(nH);
    $("#minutes").html(nM);
    $("#seconds").html(nS);
    runtime++;

setTimeout("GetRTime()",1000);
}
window.onload=GetRTime;
</script>



