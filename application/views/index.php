
<?php
    $Music = $this -> session -> userdata('Music');
    $Music = json_decode($Music);

//    echo "<pre>";
//    var_dump($Music);
//    echo "</pre>";
//    die();
?>
<!DOCTYPE html>
<html>
<head lang="en" >
<!--    <meta Content-Type="text/json">-->
    <meta content="text/json">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"/>
    <title></title>
    <base href="<?php echo site_url();?>">
    <link rel="stylesheet" href="css/common.css"/>
    <link rel="stylesheet" href="css/carousel.css">
    <link rel="stylesheet" href="css/index.css"/>
    <link rel="stylesheet" href="css/index2.css"/>
<!--    <link rel="stylesheet" href="css/audioplayer.css">-->
</head>
<body>
<div id="big-container">
    <div id="container-box">
        <div id="nav">
            <h1 class="nav-font selected">首页</h1>
            <h1 class="nav-font">推介</h1>
            <h1 class="nav-font">歌单</h1>
            <h1 class="nav-font">我的</h1>
        </div>
        <div id="container" class="wrapper">
            <div id="banner">

            </div>
            <div id="news">
                <div id="news-ipt">
                    <input type="text" placeholder="&nbsp;&nbsp;搜索歌曲"/>
                    <img class="search" src="img/search.png" alt=""/>
                </div>
            </div>
            <div id="classify">
                <a href="javascript:void(0)">全部歌手</a>
                <a href="javascript:void(0)">歌曲分类</a>
            </div>
            <div id="content">
                <h3 id="title">新歌速递</h3>
                <div id="content-imgs">
                    <div data-star="<?php  echo $Music-> showapi_res_body -> pagebean -> songlist[8] -> url;?>">
                        <img src="<?php  echo $Music-> showapi_res_body -> pagebean -> songlist[8] -> albumpic_big;?>" alt=""/>
                        <span><?php  echo $Music-> showapi_res_body -> pagebean -> songlist[8] -> songname;?></span>
                    </div>
                    <div data-star="<?php  echo $Music-> showapi_res_body -> pagebean -> songlist[20] -> url;?>">
                        <img src="<?php  echo $Music-> showapi_res_body -> pagebean -> songlist[20] -> albumpic_big;?>" alt=""/>
                        <span><?php  echo $Music-> showapi_res_body -> pagebean -> songlist[20] -> songname;?></span>
                    </div>
                    <div data-star="<?php  echo $Music-> showapi_res_body -> pagebean -> songlist[3] -> url;?>">
                        <img src="<?php  echo $Music-> showapi_res_body -> pagebean -> songlist[3] -> albumpic_big;?>" alt=""/>
                        <span><?php  echo $Music-> showapi_res_body -> pagebean -> songlist[3] -> songname;?></span>
                    </div>
                </div>
            </div>
            <div id="marketing">
                <h3>每日推介</h3>
                <h3>更多</h3>
                <div id="marketing-content">
                    <ul>
                        <img src="<?php  echo $Music-> showapi_res_body -> pagebean -> songlist[16] -> albumpic_big;?>" alt=""/>
                    </ul>
                    <ul id="marketing-content-font">
                        <li data-star="<?php  echo $Music-> showapi_res_body -> pagebean -> songlist[8] -> url;?>"><span class="font-left"><?php  echo $Music-> showapi_res_body -> pagebean -> songlist[8] -> songname;?></span><span class="font-right"><?php  echo $Music-> showapi_res_body -> pagebean -> songlist[8] -> singername;?></span></li>
                        <li data-star="<?php  echo $Music-> showapi_res_body -> pagebean -> songlist[15] -> url;?>"><span class="font-left"><?php  echo $Music-> showapi_res_body -> pagebean -> songlist[15] -> songname;?></span><span class="font-right"><?php  echo $Music-> showapi_res_body -> pagebean -> songlist[15] -> singername;?></span></li>
                        <li data-star="<?php  echo $Music-> showapi_res_body -> pagebean -> songlist[11] -> url;?>"><span class="font-left"><?php  echo $Music-> showapi_res_body -> pagebean -> songlist[11] -> songname;?></span><span class="font-right"><?php  echo $Music-> showapi_res_body -> pagebean -> songlist[11] -> singername;?></span></li>
                    </ul>
                </div>
            </div>
        </div>
        <div id="container-second" class="wrapper">
            <div id="container-second-nav">
                <input type="text" placeholder="&nbsp;&nbsp;搜索歌曲"/>
                <img class="search" src="img/search.png" alt=""/>
            </div>
            <h3 id="container-second-nav-font">巅峰榜</h3>
            <div id="container-second-content">
                <?php for($i=0;$i<16;$i++){?>
                <div class="empty-box">
                    <img data-star="<?php  echo $Music-> showapi_res_body -> pagebean -> songlist[$i+20] -> url;?>" src='<?php  echo $Music-> showapi_res_body -> pagebean -> songlist[$i+20] -> albumpic_big;?>' alt=""/>
                    <ul>
                        <li data-star="<?php  echo $Music-> showapi_res_body -> pagebean -> songlist[$i+20] -> url;?>"><span class="font-left"><?php  echo $Music-> showapi_res_body -> pagebean -> songlist[$i+20] -> songname;?></span></br><span class="font-right"><?php  echo $Music-> showapi_res_body -> pagebean -> songlist[$i+20] -> singername;?></span></li>
                    </ul>

                </div>
                <?php }?>
            </div>
    </div>
        <div id="container-third" class="wrapper">
            <div id="container-third-nav">
                <input type="text" placeholder="&nbsp;&nbsp;搜索歌曲"/>
                <img class="search" src="img/search.png" alt=""/>
            </div>
            <div id="container-third-banner">
            </div>
            <h3 id="container-third-font">全部歌曲</h3>
            <ul id="container-third-content">
                <?php for($i=0; $i<20; $i++){?>
                    <li data-star="<?php  echo $Music-> showapi_res_body -> pagebean -> songlist[$i] -> url;?>"><img src="<?php  echo $Music-> showapi_res_body -> pagebean -> songlist[$i] -> albumpic_big;?>" alt=""/><span><?php  echo $Music-> showapi_res_body -> pagebean -> songlist[$i] -> songname;?></span></li>
                    <li data-star="<?php  echo $Music-> showapi_res_body -> pagebean -> songlist[$i+50] -> url;?>"><img src="<?php  echo $Music-> showapi_res_body -> pagebean -> songlist[$i+50] -> albumpic_big;?>" alt=""/><span><?php  echo $Music-> showapi_res_body -> pagebean -> songlist[$i+50] -> songname;?></span></li>
                <?php }?>
            </ul>
        </div>
        <div id="container-four" class="wrapper">
            <ul>
                <li><span>登录帐号</span><span>》</span></li>
                <li><span>我的歌单</span><span>》</span></li>
                <li><span>我的收藏</span><span>》</span></li>
                <li><span>设置</span><span>》</span></li>
                <li><span>问题于建议</span><span>》</span></li>
                <li><span>检测更新</span><span>》</span></li>
                <li><span>关于</span><span>》</span></li>
                <li><span>作者详情</span><span>》</span></li>
            </ul>
        </div>

        <div id="singNav">
            <audio autoplay="autoplay" controls="controls" src="<?php  echo $Music-> showapi_res_body -> pagebean -> songlist[2] -> url;?>" controls="controls"></audio>
        </div>
    </div>
</div>
<div id="music">
    <span id="music-btn">&lt;</span>
    <ul id="music-box">
    </ul>
</div>
<div id="singer-list">
    <span id="singer-btn"></span>
    <ul id="singer-box">
        <li>dsahgjdsakhgjhdsjg</li>
    </ul>
</div>

    <script src="js/jquery-1.12.4.js"></script>
    <script src="js/jquery.mobile.custom.min.js"></script>
    <script src="js/index.js"></script>
    <script src="js/require.js" data-main="js/demo.js"></script>

<script>

    $(function(){
            var flag = true;
            $(".search").on('click',function(){
               var keywords = $(this).prev().val();
               var arr = [];
               var aSingerlist = [];
                $.get('welcome/login',{
                    topid:5
                },function(data){
                    var data2 = JSON.parse(data);
                    for(var i=0; i<data2.showapi_res_body.pagebean.songlist.length; i++){
                        aSingerlist.push(data2.showapi_res_body.pagebean.songlist[i].singername);
                        if((data2.showapi_res_body.pagebean.songlist[i].songname.indexOf(keywords) != -1) || (data2.showapi_res_body.pagebean.songlist[i].singername.indexOf(keywords) != -1)){
                            arr.push(data2.showapi_res_body.pagebean.songlist[i]);
                        }
                    }
                    for(var i=0; i<arr.length; i++){
                        var str = "";
                        var sSingername ="";
                        str+="<div class='empty-box'>"+ '<img src="'+ arr[i].albumpic_big+'" alt="">'+"<li>"+ "<span>"+ arr[i].songname+"</span><span>"+arr[i].singername+"</span>"+"</li>" +"</div>"
                        sSingername += "<li>" + aSingerlist.singername+ "</li>";
                    }
                    //查找列表的隐藏于显示
                    $("#music").show();
                    $("#music-box").html(str);
                    $("#music-btn").on('click',function(){
                        $("#music").hide();
                        $("#music-box").html("");
                    });
                    $("#singer-list").show();
                    $("#singer-box").html(str);
                    $("singer-btn").on('click',function(){
                        $("#singer-list").hide();
                        $("#singer-box").html("");
                    });
                },'text');

            });
            $(".classify").on('click','a',function(){
                var aSingerlist = [];
                $.get('welcome/login',{
                    topid:5
                },function(data){
                    var data2 = JSON.parse(data);
                    for(var i=0; i<data2.showapi_res_body.pagebean.songlist.length; i++){
                        aSingerlist.push(data2.showapi_res_body.pagebean.songlist[i].singername);
                    }
                    for(var i=0; i<arr.length; i++){
                        var sSingername ="";
                        sSingername += "<li>" + aSingerlist.singername+ "</li>";
                    }
                    $("#singer-list").show();
                    $("#singer-box").html(str);
                    $("singer-btn").on('click',function(){
                        $("#singer-list").hide();
                        $("#singer-box").html("");
                    });
                },'text');
            });


            $("#content-imgs").on('click',"div",function(){
                var star = $(this).data().star;
                $("#singNav audio").get(0).src = star;
            });
            $("#marketing-content-font").on('click','li',function(){
                var star = $(this).data().star;
                $("#singNav audio").get(0).src = star;
            });
            $(".empty-box").on('click','img,li',function(){
                var star = $(this).data().star;
                $("#singNav audio").get(0).src = star;
            });
            $("#container-third-content").on('click','li',function(){
                var star = $(this).data().star;
                $("#singNav audio").get(0).src = star;
            });
            $(".nav-font").on("click",function(){
                console.log(123);
                $.get('welcome/login',{
                    topid:5
                },function(data){
                    var data2 = JSON.parse(data);
//                    console.log(data2.showapi_res_body.pagebean.songlist[0].albumpic_big);
                    //.showapi_res_body.pagebean.songlist[0].albumpic_big
                },'text');
            });
        }
    );
</script>
</body>
</html>