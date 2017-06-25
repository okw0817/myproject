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
    <link rel="stylesheet" href="./css/normalize.css" />
	<link rel="stylesheet" href="./css/board.css" />
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
            top: 160px;
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
            <div>
                <div>               
                <hr>
                <article class="boardArticle">
		        <h3>자유게시판</h3>
		            <table>
			        <caption class="readHide"></caption>
			            <thead>
				<tr>
					<th scope="col" class="no">번호</th>
					<th scope="col" class="title">제목</th>
					<th scope="col" class="author">작성자</th>
					<th scope="col" class="date">작성일</th>
					<th scope="col" class="hit">조회</th>
				</tr>
			</thead> 
            <tbody>
					<?php

                        $db = new mysqli('localhost', 'root', '123456', 'member');
						$sql = 'select * from board_free order by b_no desc';
						$result = $db->query($sql);
						while($row = $result->fetch_assoc())
						{
							$datetime = explode(' ', $row['b_date']);
							$date = $datetime[0];
							$time = $datetime[1];
							if($date == Date('Y-m-d'))
								$row['b_date'] = $time;
							else
								$row['b_date'] = $date;
					?>
				<tr>
					<td class="no"><?php echo $row['b_no']?></td>
					<td class="title"><?php echo $row['b_title']?></td>
					<td class="author"><?php echo $row['b_id']?></td>
					<td class="date"><?php echo $row['b_date']?></td>
					<td class="hit"><?php echo $row['b_hit']?></td>
				</tr>
					<?php
						}
					?>
			</tbody>
            </table>
            </div>
        </div>
    </div>
</body>
</html>