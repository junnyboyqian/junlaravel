<!DOCTYPE HTML>
<html xmlns:wb="http://open.weibo.com/wb">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>2015战旗 . 报业传媒（ZQNC）电子竞技大赛</title>
<meta name="keywords" content="2015战旗报业传媒（ZQNC）电子竞技大赛">
<meta name="description" content="2015战旗报业传媒（ZQNC）电子竞技大赛">
<link rel="stylesheet" href="{{ asset('/') }}/match/css/style.css">
<script type="text/javascript" src="{{ asset('/') }}/match/js/jquery-1.11.1.min.js"></script>
  <style>
    .zcpop{
          position: absolute;
          top: 50%;
          left: 50%;
          background-color: white;
          border-radius: 5px;
          font: 14px simsun;
          line-height: 30px;
          z-index: 9999;
          background: url("{{ asset('/') }}/match/images/index/regbg.png");
         }
         .dlpop{
          position: absolute;
          top: 50%;
          left: 50%;
          background-color: white;
          border-radius: 5px;
          font: 14px simsun;
          line-height: 30px;
          z-index: 9999;
          background: url("{{ asset('/') }}/match/images/index/regbg.png");
         }
        .zcpop .close{
          position: absolute;
          right: 14px;
          top: 14px;
          width: 26px;
          height: 26px;
          background: url("{{ asset('/') }}/match/images/index/close_n.png");
        }
        .zcpop .close:hover{
            background: url("{{ asset('/') }}/match/images/index/close_o.png");
        }
        .zcpop1{
          display: none;
          margin-left: -235px;
          margin-top: -450px;
          width: 455px;
          height: 547px;
          overflow: hidden;
          /* padding-top: 40px; */
        }
        .dlpop1{
          display: none;
          margin-left: -235px;
          margin-top: -450px;
          width: 455px;
          height: 427px;
          overflow: hidden;
        }
        .mask{
          display: none;
          position: absolute;
          left: 0;
          top: 0;
          width: 100%;
          height: 100%;
          background-color: #000;
          opacity: 0.4;
          filter: alpha(opacity=40);
          z-index: 9998;
        }
    </style>
</head>
<body>
<div class="header">
    <div class="navbox">
        <div class="navul">
            <ul>
                <li class="active"><a href="<?php echo URL::action('PhotoController@anyProfile',array('a' => 3))?>"><span>首页</span></a></li>
                <li><a href="javascript:;"><span>介绍</span></a></li>
                <li><a href="javascript:;"><span>新闻</span></a></li>
                <li><a href="javascript:;"><span>赛程</span></a></li> <!-- echo site_url('ucenter/ecgEeport'); -->
                <li><a href="javascript:;"><span>直播</span></a></li>
                <li><a href="javascript:;"><span>回顾</span></a></li>
                <li><a href="javascript:;"><span>赛点查询</span></a></li>
            </ul>
            
                <a class="login" href="javascript:login();"></a>
                <a class="register" href="javascript:regester();"></a>
            
            <div class="clearfix"></div>
            <div class="logo"><a href="#"><img src="{{ asset('/') }}/match/images/index/logo_small.png"></a></div>
        </div>
    </div>
</div>
<div class="wrap">
    <div class="maintop">
        <div class="mwrap">
            <a class="biglogo"></a>
            <a class="theme1"></a>
            <a class="theme2"></a>
            
            <div class="zcpop dlpop1" id="popTip1">
                  <a class="close png" href="javascript:closeregbox();"></a>
                  <p style="text-align:center;color:white;font-size:30px;margin-top:50px;">登录</p>
                  <iframe style="margin-left:8px;margin-top:80px;" width="448" height="435" frameborder="no" src="" scrolling="no" marginheight="0" marginwidth="0" border="0">
                  </iframe>
            </div>
            <div class="zcpop zcpop1" id="popTip">
                  <a class="close png" href="javascript:closeregbox();"></a>
                  <p style="text-align:center;color:white;font-size:30px;margin-top:50px;">注册</p>
                  <iframe style="margin-left:8px;margin-top:80px;" width="448" height="435" frameborder="no" src="" scrolling="no" marginheight="0" marginwidth="0" border="0">
                  </iframe>
            </div>
        </div>
    </div>
    <div class="mainbottom">
        <div class="banner">
            <div class="fl">
                <ul class="fl">
                    <a class="checkarrow"></a>
                    <li class="">
                        <img src="{{ asset('/') }}/match/images/index/banner-item.png" />
                    </li>
                    <li></li>
                    <li></li>
                </ul>
                <div class="video fl"><img src="{{ asset('/') }}/match/images/index/video.png" /></div>
            </div>
            <div class="fr">
                <div class="apply"></div>
                <div class="sys"><img width="140" height="140" src="{{ asset('/') }}/match/images/index/wxcode.jpg"/></div>
            </div>
        </div>
        <div class="plan">
            <a class="scap"></a>
            <ul class="mtitle">
                <li><p class="bigw mtchecked">城市初赛</p><p class="smallw mtchecked">10月低-11月初</p></li>
                <li><p class="bigw">城市初赛</p><p class="smallw">10月低-11月初</p></li>
                <li><p class="bigw">城市初赛</p><p class="smallw">10月低-11月初</p></li>
                <li><p class="bigw">城市初赛</p><p class="smallw">10月低-11月初</p></li>
                <li><p class="bigw">城市初赛</p><p class="smallw">10月低-11月初</p></li>
            </ul>
            <p class="line"></p>
            <ul class="timeline-ul">
                <li class="cur"><div style="display:block" class="timeline-arrow"></div></li>
                <li><div class="timeline-arrow"></div></li>
                <li><div class="timeline-arrow"></div></li>
                <li><div class="timeline-arrow"></div></li>
                <li><div class="timeline-arrow"></div></li>
            </ul>
            <div class="matchconarea">
                <ul id='matchcon1' style="display:block" class="matchcon-ul">
                    <li>
                        <div class="marea fl">
                            <div class="area n1"><p style="padding-top:25px;">绵阳赛区1</p><p>海选赛</p></div>
                            <div class="mtime">2015.10.05-2015.10.09</div>
                        </div>
                        <div class="matcharrow fr"><img src="{{ asset('/') }}/match/images/index/arrow.png"/></div>
                    </li>
                    <li>
                        <div class="marea fl">
                            <div class="area n2"><p style="padding-top:25px;">绵阳赛区</p><p>海选赛</p></div>
                            <div class="mtime">2015.10.05-2015.10.09</div>
                        </div>
                        <div class="matcharrow fr"><img src="{{ asset('/') }}/match/images/index/arrow.png"/></div>
                       
                    </li>
                    <li>
                        <div class="marea fl">
                            <div class="area n3"><p style="padding-top:25px;">绵阳赛区</p><p>海选赛</p></div>
                            <div class="mtime">2015.10.05-2015.10.09</div>
                        </div>
                        <div class="matcharrow fr"><img src="{{ asset('/') }}/match/images/index/arrow.png"/></div>
                    </li>
                    <li>
                        <div class="marea fl">
                            <div class="area n4"><p style="padding-top:25px;">绵阳赛区</p><p>海选赛</p></div>
                            <div class="mtime">2015.10.05-2015.10.09</div>
                        </div>
                        <div class="matcharrow fr"><img src="{{ asset('/') }}/match/images/index/arrow.png"/></div>
                    </li>
                    <li style="margin-right:0px!important">
                        <div class="marea fl">
                            <div class="area n1"><p style="padding-top:25px;">绵阳赛区</p><p>海选赛</p></div>
                            <div class="mtime">2015.10.05-2015.10.09</div>
                        </div>
                        <div class="matcharrow fr"><img src="{{ asset('/') }}/match/images/index/arrow.png"/></div>
                    </li>
                </ul>
                <ul id='matchcon2' class="matchcon-ul">
                    <li>
                        <div class="marea fl">
                            <div class="area n1"><p style="padding-top:25px;">绵阳赛区2</p><p>海选赛</p></div>
                            <div class="mtime">2015.10.05-2015.10.09</div>
                        </div>
                        <div class="matcharrow fr"><img src="{{ asset('/') }}/match/images/index/arrow.png"/></div>
                    </li>
                    <li>
                        <div class="marea fl">
                            <div class="area n2"><p style="padding-top:25px;">绵阳赛区</p><p>海选赛</p></div>
                            <div class="mtime">2015.10.05-2015.10.09</div>
                        </div>
                        <div class="matcharrow fr"><img src="{{ asset('/') }}/match/images/index/arrow.png"/></div>
                       
                    </li>
                    <li>
                        <div class="marea fl">
                            <div class="area n3"><p style="padding-top:25px;">绵阳赛区</p><p>海选赛</p></div>
                            <div class="mtime">2015.10.05-2015.10.09</div>
                        </div>
                        <div class="matcharrow fr"><img src="{{ asset('/') }}/match/images/index/arrow.png"/></div>
                    </li>
                    <li>
                        <div class="marea fl">
                            <div class="area n4"><p style="padding-top:25px;">绵阳赛区</p><p>海选赛</p></div>
                            <div class="mtime">2015.10.05-2015.10.09</div>
                        </div>
                        <div class="matcharrow fr"><img src="{{ asset('/') }}/match/images/index/arrow.png"/></div>
                    </li>
                    <li style="margin-right:0px!important">
                        <div class="marea fl">
                            <div class="area n1"><p style="padding-top:25px;">绵阳赛区</p><p>海选赛</p></div>
                            <div class="mtime">2015.10.05-2015.10.09</div>
                        </div>
                        <div class="matcharrow fr"><img src="{{ asset('/') }}/match/images/index/arrow.png"/></div>
                    </li>
                </ul>
                <ul id='matchcon3' class="matchcon-ul">
                    <li>
                        <div class="marea fl">
                            <div class="area n1"><p style="padding-top:25px;">绵阳赛区3</p><p>海选赛</p></div>
                            <div class="mtime">2015.10.05-2015.10.09</div>
                        </div>
                        <div class="matcharrow fr"><img src="{{ asset('/') }}/match/images/index/arrow.png"/></div>
                    </li>
                    <li>
                        <div class="marea fl">
                            <div class="area n2"><p style="padding-top:25px;">绵阳赛区</p><p>海选赛</p></div>
                            <div class="mtime">2015.10.05-2015.10.09</div>
                        </div>
                        <div class="matcharrow fr"><img src="{{ asset('/') }}/match/images/index/arrow.png"/></div>
                       
                    </li>
                    <li>
                        <div class="marea fl">
                            <div class="area n3"><p style="padding-top:25px;">绵阳赛区</p><p>海选赛</p></div>
                            <div class="mtime">2015.10.05-2015.10.09</div>
                        </div>
                        <div class="matcharrow fr"><img src="{{ asset('/') }}/match/images/index/arrow.png"/></div>
                    </li>
                    <li>
                        <div class="marea fl">
                            <div class="area n4"><p style="padding-top:25px;">绵阳赛区</p><p>海选赛</p></div>
                            <div class="mtime">2015.10.05-2015.10.09</div>
                        </div>
                        <div class="matcharrow fr"><img src="{{ asset('/') }}/match/images/index/arrow.png"/></div>
                    </li>
                    <li style="margin-right:0px!important">
                        <div class="marea fl">
                            <div class="area n1"><p style="padding-top:25px;">绵阳赛区</p><p>海选赛</p></div>
                            <div class="mtime">2015.10.05-2015.10.09</div>
                        </div>
                        <div class="matcharrow fr"><img src="{{ asset('/') }}/match/images/index/arrow.png"/></div>
                    </li>
                </ul>
                <ul id='matchcon4' class="matchcon-ul">
                    <li>
                        <div class="marea fl">
                            <div class="area n1"><p style="padding-top:25px;">绵阳赛区4</p><p>海选赛</p></div>
                            <div class="mtime">2015.10.05-2015.10.09</div>
                        </div>
                        <div class="matcharrow fr"><img src="{{ asset('/') }}/match/images/index/arrow.png"/></div>
                    </li>
                    <li>
                        <div class="marea fl">
                            <div class="area n2"><p style="padding-top:25px;">绵阳赛区</p><p>海选赛</p></div>
                            <div class="mtime">2015.10.05-2015.10.09</div>
                        </div>
                        <div class="matcharrow fr"><img src="{{ asset('/') }}/match/images/index/arrow.png"/></div>
                       
                    </li>
                    <li>
                        <div class="marea fl">
                            <div class="area n3"><p style="padding-top:25px;">绵阳赛区</p><p>海选赛</p></div>
                            <div class="mtime">2015.10.05-2015.10.09</div>
                        </div>
                        <div class="matcharrow fr"><img src="{{ asset('/') }}/match/images/index/arrow.png"/></div>
                    </li>
                    <li>
                        <div class="marea fl">
                            <div class="area n4"><p style="padding-top:25px;">绵阳赛区</p><p>海选赛</p></div>
                            <div class="mtime">2015.10.05-2015.10.09</div>
                        </div>
                        <div class="matcharrow fr"><img src="{{ asset('/') }}/match/images/index/arrow.png"/></div>
                    </li>
                    <li style="margin-right:0px!important">
                        <div class="marea fl">
                            <div class="area n1"><p style="padding-top:25px;">绵阳赛区</p><p>海选赛</p></div>
                            <div class="mtime">2015.10.05-2015.10.09</div>
                        </div>
                        <div class="matcharrow fr"><img src="{{ asset('/') }}/match/images/index/arrow.png"/></div>
                    </li>
                </ul>
                <ul id='matchcon5' class="matchcon-ul">
                    <li>
                        <div class="marea fl">
                            <div class="area n1"><p style="padding-top:25px;">绵阳赛区5</p><p>海选赛</p></div>
                            <div class="mtime">2015.10.05-2015.10.09</div>
                        </div>
                        <div class="matcharrow fr"><img src="{{ asset('/') }}/match/images/index/arrow.png"/></div>
                    </li>
                    <li>
                        <div class="marea fl">
                            <div class="area n2"><p style="padding-top:25px;">绵阳赛区</p><p>海选赛</p></div>
                            <div class="mtime">2015.10.05-2015.10.09</div>
                        </div>
                        <div class="matcharrow fr"><img src="{{ asset('/') }}/match/images/index/arrow.png"/></div>
                       
                    </li>
                    <li>
                        <div class="marea fl">
                            <div class="area n3"><p style="padding-top:25px;">绵阳赛区</p><p>海选赛</p></div>
                            <div class="mtime">2015.10.05-2015.10.09</div>
                        </div>
                        <div class="matcharrow fr"><img src="{{ asset('/') }}/match/images/index/arrow.png"/></div>
                    </li>
                    <li>
                        <div class="marea fl">
                            <div class="area n4"><p style="padding-top:25px;">绵阳赛区</p><p>海选赛</p></div>
                            <div class="mtime">2015.10.05-2015.10.09</div>
                        </div>
                        <div class="matcharrow fr"><img src="{{ asset('/') }}/match/images/index/arrow.png"/></div>
                    </li>
                    <li style="margin-right:0px!important">
                        <div class="marea fl">
                            <div class="area n1"><p style="padding-top:25px;">绵阳赛区</p><p>海选赛</p></div>
                            <div class="mtime">2015.10.05-2015.10.09</div>
                        </div>
                        <div class="matcharrow fr"><img src="{{ asset('/') }}/match/images/index/arrow.png"/></div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="team">
            <div class="teaml fl">
                <ul class="tcity">
                    <li class="cur">成都</li><li>绵阳</li><li>德阳</li><li>重庆</li><li>资阳</li>
                </ul>
            </div>
            <div class="teamr fr">
                <div class="sszb">
                    <a class="tag"><p>赛事战报</p></a>
                    <div class="zblist pad60">
                        <p><a>电竞正能量 ZQNC启动抗战老兵募捐活动</a><span>05/12</span></p>
                        <p><a>电竞正能量 ZQNC启动抗战老兵募捐活动</a><span>05/12</span></p>
                        <p><a>电竞正能量 ZQNC启动抗战老兵募捐活动</a><span>05/12</span></p>
                        <p><a>电竞正能量 ZQNC启动抗战老兵募捐活动</a><span>05/12</span></p>
                        <p><a>电竞正能量 ZQNC启动抗战老兵募捐活动</a><span>05/12</span></p>
                        <p><a>电竞正能量 ZQNC启动抗战老兵募捐活动</a><span>05/12</span></p>
                        <p><a>电竞正能量 ZQNC启动抗战老兵募捐活动</a><span>05/12</span></p>
                    </div>
                </div>
                <div class="ssxw">
                    <a class="tag"><p>赛事新闻</p></a>
                    <div class="xwimg"><a>ZQNC全名娱乐化先行者</a><img src="{{ asset('/') }}/match/images/index/newsimg.png" /></div>
                    <div class="zblist">
                        <p><a>电竞正能量 ZQNC启动抗战老兵募捐活动</a><span>05/12</span></p>
                        <p><a>电竞正能量 ZQNC启动抗战老兵募捐活动</a><span>05/12</span></p>
                        <p><a>电竞正能量 ZQNC启动抗战老兵募捐活动</a><span>05/12</span></p>
                        <p><a>电竞正能量 ZQNC启动抗战老兵募捐活动</a><span>05/12</span></p>
                        <p><a>电竞正能量 ZQNC启动抗战老兵募捐活动</a><span>05/12</span></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="zhubo">
            <div class="zbad"></div>
            <div class="zbmain">
                <div class="zbleft fl"><img src="{{ asset('/') }}/match/images/index/zb-leftimg.png" /></div>
                <div class="zbright fr">
                    <div class="zbss"><a class="zbicon"></a><p>主播推荐赛事</p></div>
                    <ul>
                        <li><img src="{{ asset('/') }}/match/images/index/zb-avatar.png"/></li>
                        <li><img src="{{ asset('/') }}/match/images/index/zb-avatar.png"/></li>
                        <li><img src="{{ asset('/') }}/match/images/index/zb-avatar.png"/></li>
                        <li><img src="{{ asset('/') }}/match/images/index/zb-avatar.png"/></li>
                        <li><img src="{{ asset('/') }}/match/images/index/zb-avatar.png"/></li>
                        <li><img src="{{ asset('/') }}/match/images/index/zb-avatar.png"/></li>
                        <li><img src="{{ asset('/') }}/match/images/index/zb-avatar.png"/></li>
                        <li><img src="{{ asset('/') }}/match/images/index/zb-avatar.png"/></li>
                        <li><img src="{{ asset('/') }}/match/images/index/zb-avatar.png"/></li>
                        <li><img src="{{ asset('/') }}/match/images/index/zb-avatar.png"/></li>
                        <li><img src="{{ asset('/') }}/match/images/index/zb-avatar.png"/></li>
                        <li><img src="{{ asset('/') }}/match/images/index/zb-avatar.png"/></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="review">
            <div class="sshg"><a class="ssicon"></a><p>赛事回顾</p></div>
            <ul>
                <li>
                    <img src="{{ asset('/') }}/match/images/index/game.png"/>
                    <p style="color:white">英雄联盟：2015全球总决赛决赛</p>
                    <p style="color:#4182e3">SHR vs SSW 第4场</p>
                </li>
                <li>
                    <img src="{{ asset('/') }}/match/images/index/game.png"/>
                    <p style="color:white">英雄联盟：2015全球总决赛决赛</p>
                    <p style="color:#4182e3">SHR vs SSW 第4场</p>
                </li>
                <li>
                    <img src="{{ asset('/') }}/match/images/index/game.png"/>
                    <p style="color:white">英雄联盟：2015全球总决赛决赛</p>
                    <p style="color:#4182e3">SHR vs SSW 第4场</p>
                </li>
                <li style="margin-right:0px!important;">
                    <img src="{{ asset('/') }}/match/images/index/game.png"/>
                    <p style="color:white">英雄联盟：2015全球总决赛决赛</p>
                    <p style="color:#4182e3">SHR vs SSW 第4场</p>
                </li>
            </ul>
        </div>
    </div>
    <div class="mask" id="mask"></div>
</div>
<div class="footer">
    <div class="fmain">
        <div class="zzjg"></div>
        <ul>
            <li><a href="" target="_blank"><img src="{{ asset('/') }}/match/images/index/zblogo.png" /></a></li>
            <li><a href="" target="_blank"><img src="{{ asset('/') }}/match/images/index/zblogo.png" /></a></li>
            <li><a href="" target="_blank"><img src="{{ asset('/') }}/match/images/index/zblogo.png" /></a></li>
            <li><a href="" target="_blank"><img src="{{ asset('/') }}/match/images/index/zblogo.png" /></a></li>
            <li><a href="" target="_blank"><img src="{{ asset('/') }}/match/images/index/zblogo.png" /></a></li>
        </ul>
    </div>
</div>
<!-- <script>
    function regester() {
        $("#popTip").show();
        $(".mask").show();
    }
    function login() {
        $('#popTip1').css('margin-top','-450px');
        $(".mask").show();
        $("#popTip1").show();
    }
    function closeregbox(){
        $('#popTip,#popTip1').hide();
        $(".mask").hide();
    }
    $(function(){
        $('.logout').click(function(){
            window.location.href="<?php echo site_url('center/logout')?>";
        });
        $('.apply').click(function(){
            var isLogin = "<?php echo $_U_INFO ? 1 : 0;?>";
            if (isLogin == 1) {
                window.open("<?php echo site_url('center/applyCommon');?>");
            } else {
                $('#popTip1').css('margin-top','220px');
                $(".mask").show();
                $("#popTip1").show();
            }
        });
        $('.timeline-ul li').mouseover(function(){
            $(this).addClass('cur').siblings().removeClass('cur');
            $(this).find('div').show().end().siblings().find('div').hide();
            var index = $(this).index();
            $(".matchcon-ul:eq("+index+")").show().siblings().hide();
        });
        $('.tcity li').mouseover(function(){
            $(this).addClass('cur').siblings().removeClass('cur');
            //$(this).find('div').show().end().siblings().find('div').hide();
            //var index = $(this).index();
            //$(".matchcon-ul:eq("+index+")").show().siblings().hide();
        });
    });
</script>
</body>
</html>
