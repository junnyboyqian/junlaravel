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
                <li class="active"><a href="<?php echo URL::action('PhotoController@anyProfile',array('a' => 3));?>"><span>首页</span></a></li>
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