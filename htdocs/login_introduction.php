﻿<?
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

        body {
            position: relative;
        }

        ul.nav-pills {
            top: 190px;
            position: fixed;
        }


        @media screen and (max-width: 810px) {
            #section1, #section2, #section3 {
                margin-left: 100px;
            }
        }
    </style>
</head>
<body data-spy="scroll" data-target="#myScrollspy" data-offset="20">
    <div class="container">
        <h1 class="header" style="text-align:center">Kwangwon Home</h1>
        <div>
            <?php 
            session_start();
            echo $_SESSION['ses_username'].'님 어서오세요!<p/>';                  
            echo '<a href="./index.html">로그아웃 하기</a>'; 
            ?>
        </div>
        <div>
            <nav class="navbar navbar-inverse">
                <ul class="nav nav-tabs nav-justified">
                    <li class="menu"><a href="./login_index.php">Main</a></li>
                    <li class="menu"><a href="./login_introduction.php">Introduction</a></li>
                    <li class="menu"><a href="./login_career.php">Career</a></li>
                    <li class="menu"><a href="./login_portfolio.php">Portfolio</a></li>
                    <li class="menu"><a href="./login_more.php">More</a></li>
                </ul>
            </nav>
        </div>

        <div class="row">
            <nav class="col-sm-3" id="myScrollspy">
                <ul class="nav nav-pills nav-stacked">
                    <li class="active"><a href="#section1">듣기 좋은 노래</a></li>
                    <li><a href="#section2">공부 영상</a></li>
                    <li><a href="#section3">영감 받은 게임</a></li>
                </ul>
            </nav>
            <div class="col-sm-9">
                <div class="panel panel-success" id="section1">
                    <div class="panel-heading">듣기 좋은 노래</div>
                    <div class="panel-body">재생 목록은 트와이스 'TT' ~ 나얼 '귀로' </div>
                </div>
                <iframe width="840" height="480" src="https://www.youtube.com/embed/OX8PNEkUX68?list=RDva5rf20Un24" frameborder="0" allowfullscreen></iframe>
                <hr>
                <br>
                <div class="panel panel-info" id="section2">
                    <div class="panel-heading">공부 영상</div>
                    <div class="panel-body">더 이상 자세한 설명은 생략한다.</div>
                </div>
                <iframe width="840" height="480" src="https://www.youtube.com/embed/oK_NzdVSxaQ?list=PLq3pyCh4J1B2uSvypNOK_nxYKBt5mMCJt" frameborder="0" allowfullscreen></iframe>
                <hr>
                <br>
                <div class="panel panel-warning" id="section3">
                    <div class="panel-heading">영감 받은 게임-슈퍼미트보이-</div>
                    <div class="panel-body">
                        팀 미트(Team Meat)의 에드먼드 맥밀런과 토미 레펜스 제작. 2008년 플래시 판은 Newgrounds, 2010년 정식 버전은 스팀이 유통한 PC, XBLA로 발매된 인디 게임. 한국에선 모르는 사람이 있을수 있는데, 
                        인디 게임 더 무비를 보면 알수있듯이 발매 후 반응은 대호평.
                        그야말로 폭발적이었다. 인디 게임 역사에 길이 남을 작품.
                        스팀과 험블 스토어에서 14.99달러에 판매중. 또한 이 게임의 프로토타입인 '미트 보이(플래시버전)'는 같은 제작자의 인디 게임 모음집인 Basement Collection에 포함되어 있다.
                    </div>
                </div>
                <iframe width="840" height="480" src="https://www.youtube.com/embed/CINnncaJBrc" frameborder="0" allowfullscreen></iframe>
                <hr>
                <br>
            </div>
        </div>
    </div>
</body>
</html>