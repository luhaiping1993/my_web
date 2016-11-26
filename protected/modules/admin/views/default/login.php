<!DOCTYPE html>
<html>  
<head>
<title>后台登录</title>
<meta name="viewport" content="width=device-width, initial-scale=1" charset="utf-8">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<meta name="keywords" content="Flat Dark Web Login Form Responsive Templates, Iphone Widget Template, Smartphone login forms,Login form, Widget Template, Responsive Templates, a Ipad 404 Templates, Flat Responsive Templates" />
<link href="/css/style.css" rel='stylesheet' type='text/css' />
<!--webfonts-->
<link href='http://fonts.useso.com/css?family=PT+Sans:400,700,400italic,700italic|Oswald:400,300,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.useso.com/css?family=Exo+2' rel='stylesheet' type='text/css'>
<!--//webfonts-->
<script src="/assets/js/jquery.min.js"></script>
</head>
<body>
<script>$(document).ready(function(c) {
    $('.close').on('click', function(c){
        $('.login-form').fadeOut('slow', function(c){
            $('.login-form').remove();
        });
    });   
});
</script>
 <!--SIGN UP-->
 <h1>个人博客</h1>
<div class="login-form">
    <div class="close"> </div>
        <div class="head-info">
            <label class="lbl-1"> </label>
            <label class="lbl-2"> </label>
            <label class="lbl-3"> </label>
        </div>
            <div class="clear"> </div>
    <div class="avtar">
        <img src="/images/avtar.png" />
    </div>
            <form action="#" method="post">
                    <input type="text" class="text" name="login[username]" value="Username" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Username';}" >
                        <div class="key">
                    <input type="password" value="Password" name="login[password]" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}">
                        </div>
                        <?php if(!empty($message)){echo $message;} ?>
    <div class="signin">
        <input type="submit" value="Login" >
    </div>
            </form>

</div>
 <div class="copy-rights">
                    <p>Copyright &copy; <?php echo date("Y"); ?>.卢海平 <a href="http://luhaiping.pw/" target="_blank" title="个人主页">个人主页</a> -<a href="http://luhaiping.pw/admin/default/login">登录</a> - Collect from <a href="http://www.cssmoban.com/" title="网页模板" target="_blank">网页模板</a></p>
            </div>

</body>
</html>