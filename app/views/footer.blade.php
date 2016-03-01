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
<script>
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
           
        });
        $('.apply').click(function(){
            $('#popTip1').css('margin-top','220px');
            $(".mask").show();
            $("#popTip1").show();
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