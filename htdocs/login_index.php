<?
include"session.php";
?>


<!DOCTYPE html>
<!-- saved from url=(0071)file:///C:/Users/kwangwon%20oh/Desktop/bootstrap-3.3.7-dist/index.html# -->
<html lang="ko">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./index_files/bootstrap.min.css">
    <script src="./index_files/jquery.min.js.다운로드"></script>
    <script src="./index_files/bootstrap.min.js.다운로드"></script>
    <style>
        @import url('https://fonts.googleapis.com/css?family=Cormorant+SC');
        @import url('https://fonts.googleapis.com/css?family=Rouge+Script');

        .affix {
            top: 0;
            width: 60%;
        }

            .affix + .container {
                padding-top: 70px;
            }

        .carousel-inner > .item > img,
        .carousel-inner > .item > a > img {
            width: 50%;
            height: 100%;
            margin: auto;
        }

        div.container {
            background-color: white;
        }

        div.mytalk {
            padding: 10px;
            margin: 20px;
        }

        div.end {
            padding: 5px;
            margin: 5px;
        }

        li.menu {
            font-weight: bold;
            font-size: 20px;
            color: gray;
        }

        a {
            color: gray;
        }

        p.my {
            font-size: 40px;
            font-family: 'Rouge Script', cursive;
        }

        h1.header {
            font-family: 'Cormorant SC', serif;
            padding: 10px;
            margin: 10px;
        }

        article {
            margin-left: 170px;
            border-left: 1px solid gray;
            padding: 1em;
            overflow: hidden;
        }

        ul.nav-pills {
            top: 20px;
            position: fixed;
        }

        div.col-sm-9 div {
            height: 250px;
            font-size: 28px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="header" style="text-align:center">Kwangwon Home</h1>
        <div>
            <?php 
            session_start();
             $host = 'localhost'; 
              $user = 'root';
              $pw = '123456';
              $dbName = 'member';
              $mysqli = new mysqli($host, $user, $pw, $dbName); 
              $memberId = $_POST['id'];
             $memberPw = $_POST['pwd'];
             $sql = "SELECT * FROM memberinfo3 where id = '$memberId' && pwd = '$memberPw'";             
             $result = $mysqli->query($sql);
             $row = $result->fetch_array(MYSQLI_ASSOC);

             if($result->num_rows == 1)
             {
                  $_SESSION['ses_username'] = $row['id'];    
            echo $_SESSION['ses_username'].'님 어서오세요!<p/>';                  
            echo '<a href="./logout.php">로그아웃 하기</a>'; 
             }
             else
             echo("<script>location.href='RSDB_starterror.php';</script>");

            $mysqli->close();
            ?>
        </div>
        <div>
            <nav class="navbar navbar-inverse" data-spy="affix" data-offset-top="197">
                <ul class="nav nav-tabs nav-justified">
                    <li class="menu"><a href="./login_index.php">Main</a></li>
                    <li class="menu"><a href="./login_introduction.php">Introduction</a></li>
                    <li class="menu"><a href="./login_career.php">Career</a></li>
                    <li class="menu"><a href="./login_portfolio.php">Portfolio</a></li>
                    <li class="menu"><a href="./login_more.php">More</a></li>
                </ul>
            </nav>
        </div>
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class=""></li>
                <li data-target="#myCarousel" data-slide-to="1" class=""></li>
                <li data-target="#myCarousel" data-slide-to="2" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="3" class=""></li>
            </ol>
            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item">
                    <img src="./index_files/game1-1.jpg" class="img-rounded" alt="Chania" width="460" height="258">
                    <div class="carousel-caption">
                        <h3>시한부 용사</h3>
                        <p>메인화면</p>
                    </div>
                </div>
                <div class="item">
                    <img src="./index_files/game2-2.jpg" class="img-rounded" alt="Chania" width="460" height="258">
                    <div class="carousel-caption">
                        <h3>시한부 용사</h3>
                        <p>프롤로그 화면</p>
                    </div>
                </div>
                <div class="item active">
                    <img src="./index_files/005.jpg" class="img-rounded" alt="Flower" width="460" height="345">
                    <div class="carousel-caption">
                        <h3>벚꽃 사진</h3>
                        <p>그냥 넣은 사진</p>
                    </div>
                </div>
                <div class="item">
                    <img src="./index_files/006.jpg" class="img-rounded" alt="Flower" width="460" height="345">
                    <div class="carousel-caption">
                        <h3>기린</h3>
                        <p>그냥 넣은 사진</p>
                    </div>
                </div>
            </div>
            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <div class="mytalk">
            <p class="my" style="text-align:center">To Sin By Silence When We Should Protest</p>
            <p class="my" style="text-align:center">Protest Makes Cowards Out Of Men</p>
        </div>
        <div class="end" style="text-align:center">
            <p style="color:black">©2017 Kwangwon Home. Tell:010-4928-8612 Email: okw0817@gmail.com </p>
        </div>
    </div>
    <script>
        $(document).ready(function () {
            // Activate Carousel
            $("#myCarousel").carousel();

            // Enable Carousel Indicators
            $(".item1").click(function () {
                $("#myCarousel").carousel(0);
            });
            $(".item2").click(function () {
                $("#myCarousel").carousel(1);
            });
            $(".item3").click(function () {
                $("#myCarousel").carousel(2);
            });
            $(".item4").click(function () {
                $("#myCarousel").carousel(3);
            });

            // Enable Carousel Controls
            $(".left").click(function () {
                $("#myCarousel").carousel("prev");
            });
            $(".right").click(function () {
                $("#myCarousel").carousel("next");
            });
        });
    </script>

</body>
</html>