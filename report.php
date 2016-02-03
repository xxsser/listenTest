<?php include 'init.php'; ?>
<!DOCTYPE html>
<html class="mobile">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>据说25岁以上就听不到这些声音了，快来测试一下耳朵听力吧。</title>
    <script type="text/javascript" src="./js/f47a205ec3"></script>
    <script src="./js/nr-852.min.js"></script>
    <script async="" src="./js/analytics.js"></script>
    <meta content="width=device-width, minimum-scale=1, maximum-scale=1" name="viewport">
    <link rel="stylesheet" media="all"
          href="./css/application.css">
    <script src="http://res.wx.qq.com/open/js/jweixin-1.0.0.js"></script>
    <script src="./js/application.js"></script>
    <script type="text/javascript">
        //<![CDATA[
        window.gon = {};
        gon.env = "production";
        gon.locale = "zh-CN";
        gon.inIOS = false;
        gon.inWechat = true;
        gon.withoutApp = true;
        gon.using_ios_comment = false;
        gon.pageId = "wechat-games-hearing_test-report";
        gon.controller = "hearing_test";
        gon.action = "report";
        gon.variant = ["phone"];
        gon.logined = true;
        gon.current_user = {"uuid": "e437f8c9af084bf3ad30affa0d652487"};
        gon.is_signed_in = true;
        //]]>
    </script>
</head>
<body id="wechat-games-hearing_test-report" style="cursor: default;">
<div class="container">
    <div class="hide"><img
            src="./image/ic_moments.png"
            alt="Ic moments"></div>
    <div class="screen screen-report"><a class="app_banner"
                                         href="https://jita.im/apps/eumgm/get?ref=hearing_test%2Freport.banner"
                                         target="_blank"><img
            src="./image/app_banner.png"
            alt="App banner"></a>
        <ul class="board">
            <li><span class="icon"><i class="<?php echo 12000<=$_GET['fen']?'icon-check':'icon-close' ?>"></i></span><span class="frequency">12000 HZ</span></li>
            <li><span class="icon"><i class="<?php echo 14000<=$_GET['fen']?'icon-check':'icon-close' ?>"></i></span><span class="frequency">14000 HZ</span></li>
            <li><span class="icon"><i class="<?php echo 15000<=$_GET['fen']?'icon-check':'icon-close' ?>"></i></span><span class="frequency">15000 HZ</span></li>
            <li><span class="icon"><i class="<?php echo 16000<=$_GET['fen']?'icon-check':'icon-close' ?>"></i></span><span class="frequency">16000 HZ</span></li>
            <li><span class="icon"><i class="<?php echo 17000<=$_GET['fen']?'icon-check':'icon-close' ?>"></i></span><span class="frequency">17000 HZ</span></li>
            <li><span class="icon"><i class="<?php echo 18000<=$_GET['fen']?'icon-check':'icon-close' ?>"></i></span><span class="frequency">18000 HZ</span></li>
            <li><span class="icon"><i class="<?php echo 19000<=$_GET['fen']?'icon-check':'icon-close' ?>"></i></span><span class="frequency">19000 HZ</span></li>
            <li><span class="icon"><i class="<?php echo 20000<=$_GET['fen']?'icon-check':'icon-close' ?>"></i></span><span class="frequency">20000 HZ</span></li>
        </ul>
    </div>
    <div class="screen screen-wechat">
        <ul class="examples">
            <li>回复<em>报告</em>查看你专属的听力测试报告</li>
            <li>回复<em>听力保护</em>了解如何保护听力</li>
        </ul>
        <p class="or">或者也可以试试回复这些关键字</p>
        <p class="keywords"><em>调音</em><em>音阶</em><em>绝对音高</em><em>贝斯是不是吉他</em><em>卡农</em><em>独立音乐</em></p>
        <div class="qrcode"><img
                src="./image/qrcode.jpg"
                alt="Qrcode">
            <p class="press-extract-qrcode">长按二维码关注公众号</p></div>
        <p class="or">或者</p><a class="button button-primary"
                               href="play.html">再测一次</a></div>
    <script>eum.config || (eum.config = {});
        eum.config.appid = "<?php echo $jsbag['appId']?>"
        eum.config.ts = "<?php echo $jsbag['timestamp']?>"
        eum.config.nonce = "<?php echo $jsbag['nonceStr']?>"
        eum.config.signature = "<?php echo $jsbag['signature']?>"</script>
</div>
</body>
</html>