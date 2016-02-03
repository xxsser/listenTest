<?php
$fen = $_GET['fen'];
$per = intval(($fen-10000)/367)+70;
if($fen <= 13000){
    $kbps = 112;
    $cue = '你的听力好像已经没有过去那么好了，得注意保护了哟～';
    $title = '我能听到'.($fen/1000).'kHz的声音，至少得听'.$kbps.'k的mp3，击败'.$per.'%的人【点我测试】';
}else if($fen < 16000){
    $kbps = 128;
    $cue = '你不用担心你的听力，依然在正常范围内。';
    $title = '我能听到'.($fen/1000).'kHz的声音，至少得听'.$kbps.'k的mp3，击败'.$per.'%的人【点我测试】';
}else if($fen < 20000){
    $kbps = 160;
    $cue = '你的耳朵超出常人的辨识能力，当你听到了别人听不到的声音时，不必纠结，因为你的耳朵就是比他们的好。';
    $title = '我能听到'.($fen/1000).'kHz的声音，至少得听'.$kbps.'k的mp3，击败'.$per.'%的人【点我测试】';
}else{
    $kbps = 320;
    $cue = '俗称的“金耳朵” 大概指的就是你这种，辨识度已经达到了 MP3 的上限， 也许只有无损音质才配得上你的耳朵。';
    $title = '我能听到'.($fen/1000).'kHz的声音，无损音频才对得起我耳朵，击败了'.$per.'%的人【点我测试】';
}
?>
<!DOCTYPE html>
<html class="mobile">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title><?php echo $title?></title>
    <script src="./js/nr-852.min.js"></script>
    <script async="" src="./js/analytics.js"></script>
    <script type="text/javascript">window.NREUM || (NREUM = {});
    NREUM.info = {
        "beacon": "bam.nr-data.net",
        "errorBeacon": "bam.nr-data.net",
        "licenseKey": "f47a205ec3",
        "applicationID": "12970677",
        "transactionName": "IFpYTEFeXA1VRBkSBwBdV0wcVlEMVUUZDQcCR19WVG5EBENCGQENDVA=",
        "queueTime": 0,
        "applicationTime": 26,
        "agent": ""
    }</script>
    <meta content="width=device-width, minimum-scale=1, maximum-scale=1" name="viewport">
    <link rel="stylesheet" media="all"
          href="./css/application.css">
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
        gon.pageId = "wechat-games-hearing_test-done";
        gon.controller = "hearing_test";
        gon.action = "done";
        gon.variant = ["phone"];
        gon.logined = true;
        gon.is_signed_in = true;
        gon.moment_title = "\u6D4B\u8BD5";
        gon.moment_uri = "http:\/\/dianying.zggzngw.com";
        gon.moment_icon = "http:\/\/dianying.zggzngw.com\/image\/ic_moments.png";
        //]]>
    </script>
    <script src="http://res.wx.qq.com/open/js/jweixin-1.0.0.js"></script>
</head>
<body id="wechat-games-hearing_test-done" style="cursor: default;">
<div class="container">
    <div class="hide"><img
            src="./image/ic_moments.png"
            alt="Ic moments"></div>
    <div class="screen" style="margin-bottom: -195px; padding-bottom: 195px;">
        <dl class="result">
            <dt>你的耳朵能辨识的最高频率</dt>
            <dd><?php echo $_GET['fen'] ?> HZ</dd>
            <dt class="mp3">相当于辨识 MP3 的质量</dt>
            <dd class="mp3">最多能分辨 <?php echo $kbps?> kbps</dd>
        </dl>
        <div class="comparison">
            <div class="comparison-content">击败了<span class="percentage"><?php echo $per?>%</span><span class="desc">的测试者</span></div>
            <div id="bar">
                <div class="filled" data-percentage="<?php echo $per?>%" style="width: 99%;"></div>
            </div>
        </div>
        <p class="conclusion"><?php echo $cue?></p><a class="button" data-report="report.php?fen=<?php echo $fen?>" data-title="<?php echo $title?>" href="javascript:;" id="button-share">晒成绩，查看详细报告</a>
    </div>
    <div class="mask"><img width="50"
                           data-at2x="image/arrow@2x.png"
                           data-at3x="image/arrow@3x.png"
                           src="./image/arrow.png"
                           alt="Arrow">
        <p>分享成绩到朋友圈后获得详细报告。邀请朋友一起来测试吧！</p></div>
    <?php include 'init.php';?>

    <script>eum.config || (eum.config = {});
        eum.config.appid = "<?php echo $jsbag['appId']?>";
        eum.config.ts = "<?php echo $jsbag['timestamp']?>";
        eum.config.nonce = "<?php echo $jsbag['nonceStr']?>";
        eum.config.signature = "<?php echo $jsbag['signature']?>";
    </script>
</div>
</body>
</html>