<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Video</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/gh/jquery/jquery@3.2.1/dist/jquery.min.js"></script>
    <script src="js/swiper-bundle.min.js"></script>
    <link rel="stylesheet" href="css/swiper-bundle.min.css">
</head>
<body style="background-color: #343434">
    <!--导航栏-->
    <style>
        .beautifulFont{
            font-family: Edwardian Script ITC;
        }
    </style>
    <nav class="navbar navbar-expand-lg navbar-light  navbar navbar-fixed-top navbar-transparent" role="navigation" >
        <a class="navbar-brand" href="index.php"><font class="beautifulFont" color="white" size="20px">Video</font></a>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="Register.php"><font color="white">Register</font></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Login.php"><font color="white">Login</font></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.php"><font color="white">About</font></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"></a>
                </li>
            </ul>
        </div>
    </nav>
    <!--导航栏-->


    <!--轮播图-->
    <style>
        .swiper-container {
            width: 60%;
            height: 100%;
        }
        .indexImg{
            width: 100%;
            height: 100%;
        }
    </style>
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide ac"><img class="indexImg" src="images/video.jpg"></div>
            <div class="swiper-slide ac"><img class="indexImg" src="images/video.jpg"></div>
            <div class="swiper-slide ac"><img class="indexImg" src="images/video.jpg"></div>
            <div class="swiper-slide ac"><img class="indexImg" src="images/video.jpg"></div>
        </div>
        <!-- 如果需要分页器 -->
        <div class="swiper-pagination"></div>

        <!-- 如果需要导航按钮 -->
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>

        <!-- 如果需要滚动条 -->
        <div class="swiper-scrollbar"></div>
    </div>
    <script>
        var mySwiper = new Swiper ('.swiper-container', {
            loop: true, // 循环模式选项

            // 如果需要分页器
            pagination: {
                el: '.swiper-pagination',
            },

            // 如果需要前进后退按钮
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },

            // 如果需要滚动条
            scrollbar: {
                el: '.swiper-scrollbar',
            },
        })
    </script>
    <!--轮播图-->

    <br><br>

    <!--视频-->
    <style>
        .videoImg{
            width: 100%;
            height: 100%;
            border-radius: 10px;
        }
    </style>
    <div class="container">
        <p>
            <h3 style="color: white"><b>最近更新</b></h3>
            <h6 style="text-align:right;"><a href="#" style="color: darkgrey">更多-></a></h6>
        </p>
        <div class="row">
            <div class="col-sm">
                <img class="videoImg" src="images/video.jpg">
            </div>
            <div class="col-sm">
                <img class="videoImg" src="images/video.jpg">
            </div>
            <div class="col-sm">
                <img class="videoImg" src="images/video.jpg">
            </div>
            <div class="col-sm">
                <img class="videoImg" src="images/video.jpg">
            </div>
        </div>
        <br><br>
        <div class="row">
            <div class="col-sm">
                <img class="videoImg" src="images/video.jpg">
            </div>
            <div class="col-sm">
                <img class="videoImg" src="images/video.jpg">
            </div>
            <div class="col-sm">
                <img class="videoImg" src="images/video.jpg">
            </div>
            <div class="col-sm">
                <img class="videoImg" src="images/video.jpg">
            </div>
        </div>
    </div>
<br><br>
    <div class="container">
        <p>
            <h3 style="color: white"><b>观看最多</b></h3>
            <h6 style="text-align:right;"><a href="#" style="color: darkgrey">更多-></a></h6>
        </p>
        <div class="row">
            <div class="col-sm">
                <img class="videoImg" src="images/video.jpg">
            </div>
            <div class="col-sm">
                <img class="videoImg" src="images/video.jpg">
            </div>
            <div class="col-sm">
                <img class="videoImg" src="images/video.jpg">
            </div>
            <div class="col-sm">
                <img class="videoImg" src="images/video.jpg">
            </div>
        </div>
        <br><br>
        <div class="row">
            <div class="col-sm">
                <img class="videoImg" src="images/video.jpg">
            </div>
            <div class="col-sm">
                <img class="videoImg" src="images/video.jpg">
            </div>
            <div class="col-sm">
                <img class="videoImg" src="images/video.jpg">
            </div>
            <div class="col-sm">
                <img class="videoImg" src="images/video.jpg">
            </div>
        </div>
    </div>
    <!--视频-->


    <!--底部-->
    <style>
        a:link {text-decoration:none;}
    </style>
    <br><br><br>
    <footer class="footer navbar-fixed-bottom ">
        <div class="container">
            <div class="row">
                <div class="col-sm">
                    <br><br><br>
                    <font class="beautifulFont" size="30px" color="#808080">Video</font>
                    <br><br><br>
                </div>
                <div class="col-sm">
                    <br><br><br>
                    <center><font color="#808080"><a href="#" style="color: grey">提交反馈</a></font></center>
                    <br><br><br>
                </div>
            </div
        </div>
        <center><font color="#2b2b2b">Power By  micly2</font></center>
    </footer>
    <!--底部-->
</body>
</html>