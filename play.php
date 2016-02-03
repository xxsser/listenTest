<?php include 'init.php'; ?>
<!DOCTYPE html>
<html class="mobile">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>据说25岁以上就听不到这些声音了，快来测试一下耳朵听力吧</title>
    <meta content="width=device-width, minimum-scale=1, maximum-scale=1" name="viewport">
    <link rel="stylesheet" media="all" href="./css/application.css">
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
        gon.pageId = "wechat-games-hearing_test-play";
        gon.controller = "hearing_test";
        gon.action = "play";
        gon.variant = ["phone"];
        gon.logined = true;
        gon.is_signed_in = true;
        gon.moment_title = "\u636e\u8bf425\u5c81\u4ee5\u4e0a\u5c31\u542c\u4e0d\u5230\u8fd9\u4e9b\u58f0\u97f3\u4e86\uff0c\u5feb\u6765\u6d4b\u8bd5\u4e00\u4e0b\u8033\u6735\u542c\u529b\u5427\u3002";
        gon.moment_uri = "http:\/\/dianying.zggzngw.com";
        gon.moment_icon = "http:\/\/dianying.zggzngw.com\/image\/ic_moments.png";
        gon.audioPathes = {
            "10000": "http:\/\/dianying.zggzngw.com\/voice\/10000.mp3",
            "11000": "http:\/\/dianying.zggzngw.com\/voice\/11000.mp3",
            "12000": "http:\/\/dianying.zggzngw.com\/voice\/12000.mp3",
            "13000": "http:\/\/dianying.zggzngw.com\/voice\/13000.mp3",
            "14000": "http:\/\/dianying.zggzngw.com\/voice\/14000.mp3",
            "14500": "http:\/\/dianying.zggzngw.com\/voice\/14500.mp3",
            "15000": "http:\/\/dianying.zggzngw.com\/voice\/15000.mp3",
            "15500": "http:\/\/dianying.zggzngw.com\/voice\/15500.mp3",
            "16000": "http:\/\/dianying.zggzngw.com\/voice\/16000.mp3",
            "16500": "http:\/\/dianying.zggzngw.com\/voice\/16500.mp3",
            "17000": "http:\/\/dianying.zggzngw.com\/voice\/17000.mp3",
            "17500": "http:\/\/dianying.zggzngw.com\/voice\/17500.mp3",
            "18000": "http:\/\/dianying.zggzngw.com\/voice\/18000.mp3",
            "18500": "http:\/\/dianying.zggzngw.com\/voice\/18500.mp3",
            "19000": "http:\/\/dianying.zggzngw.com\/voice\/19000.mp3",
            "19500": "http:\/\/dianying.zggzngw.com\/voice\/19500.mp3",
            "19750": "http:\/\/dianying.zggzngw.com\/voice\/19750.mp3",
            "20000": "http:\/\/dianying.zggzngw.com\/voice\/20000.mp3",
            "20250": "http:\/\/dianying.zggzngw.com\/voice\/20250.mp3",
            "20500": "http:\/\/dianying.zggzngw.com\/voice\/20500.mp3",
            "20750": "http:\/\/dianying.zggzngw.com\/voice\/20750.mp3",
            "21000": "http:\/\/dianying.zggzngw.com\/voice\/21000.mp3"
        };
        //]]>
    </script>
</head>
<body id="wechat-games-hearing_test-play" style="cursor: default;">
<div class="container">
    <div class="hide"><img
            src="./image/ic_moments.png"
            alt="Ic moments"></div>
    <div class="screen"><h2 class="title">请播放以下3个音频，并选择有声音的序号</h2>
        <div class="frequency">
            <div class="hd"><span class="f-9">9k hz</span><span class="f-12">12k</span><span
                    class="f-15">15k</span><span class="f-18">18k</span><span class="f-21">21k</span></div>
            <div class="bd">
                <div class="bar" style="width: 8.33%;"></div>
            </div>
        </div>
        <p class="advice">为了结果更准确，建议测试时使用耳机<br>并且请调整音量，以免音量过高</p>
        <div class="play-buttons play-buttons-3"><a class="play-button" data-index="0" href="javascript:;"><span
                class="btn">播放</span><span class="order">1</span></a><a class="play-button" data-index="1"
                                                                        href="javascript:;"><span
                class="btn">播放</span><span class="order">2</span></a><a class="play-button" data-index="2"
                                                                        href="javascript:;"><span
                class="btn">播放</span><span class="order">3</span></a></div>
        <ul class="choices choices-3" data-url="testDone.php">
            <li><a class="button" data-index="0" href="javascript:;">1 有声音</a></li>
            <li><a class="button" data-index="1" href="javascript:;">2 有声音</a></li>
            <li><a class="button" data-index="2" href="javascript:;">3 有声音</a></li>
            <li><a class="button button-inverse" data-index="-1" href="javascript:;">听不到这题</a></li>
        </ul>
        <audio id="audio" src="voice/10000.mp3" __idm_id__="572417"></audio>
        <p class="debug"></p></div>
    <script>eum.config || (eum.config = {});
        eum.config.appid = "<?php echo $jsbag['appId']?>"
        eum.config.ts = "<?php echo $jsbag['timestamp']?>"
        eum.config.nonce = "<?php echo $jsbag['nonceStr']?>"
        eum.config.signature = "<?php echo $jsbag['signature']?>"</script>
</div>
</body>
</html>