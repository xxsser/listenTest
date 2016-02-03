<!DOCTYPE html>
<html class="mobile">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>据说25岁以上就听不到这些声音了，快来测试一下耳朵听力吧。</title>
    <meta content="width=device-width, minimum-scale=1, maximum-scale=1" name="viewport">
    <link rel="stylesheet" media="all"
          href="./css/application.css">
    <script src="http://res.wx.qq.com/open/js/jweixin-1.0.0.js"></script>
    <?php include 'init.php'; ?>
    <script type="text/javascript">
        wx.config({
            "debug": false,
            "beta": false,
            "appId": "<?php echo $jsbag['appId']?>",
            "nonceStr": "<?php echo $jsbag['nonceStr']?>",
            "timestamp":<?php echo $jsbag['timestamp']?>,
            "url": "<?php echo $jsbag['url']?>",
            "signature": "<?php echo $jsbag['signature']?>",
            "jsApiList": ["onMenuShareTimeline", "onMenuShareAppMessage"]
        });
        wx.ready(function () {
            wx.onMenuShareTimeline(setShare());
            //“分享给朋友”按钮点击状态及自定义分享内容接口
            wx.onMenuShareAppMessage(setShare());
        });
        function setShare() {
            return {
                title: '据说25岁以上就听不到这些声音了，快来测试一下耳朵听力吧。', // 分享标题
                desc: '据说25岁以上就听不到这些声音了，快来测试一下耳朵听力吧。', // 分享描述
                link: '<?php echo $jsbag['url']?>', // 分享链接
                imgUrl: 'http://http://dianying.zggzngw.com/image/ic_moments.png', // 分享图标
                type: 'link', // 分享类型,music、video或link，不填默认为link
                dataUrl: '', // 如果type是music或video，则要提供数据链接，默认为空
                success: function () {
                    // 用户确认分享后执行的回调函数
                }, cancel: function () {
                }
            }
        }
    </script>
</head>
<body id="wechat-games-hearing_test-show" style="cursor: default;">
<div class="container">
    <div class="hide"><img
            src="./image/ic_moments.png"
            alt="Ic moments"></div>
    <div class="screen"><h1 class="title">你知道吗？</h1>
        <p class="ability-reduce">听力受损是永久性无法恢复的<br>耳朵分辨高音的能力会持续下降</p><img class="chart" width="345" height="207"
                                                                          src="./image/chart.png">
        <p class="come-on">很多人在25岁后已经听不到这些声音了<br>快来测试一下吧</p>
        <p class="arrow"><i class="icon-arrow"></i></p><a class="button" href="play.php">开始测试</a>
        <p class="participant"><span class="count">2456029</span>已参加测试</p></div>
</div>
</body>
</html>