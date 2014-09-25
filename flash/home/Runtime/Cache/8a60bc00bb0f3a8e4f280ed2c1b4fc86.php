<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE HTML>
<html>
<head>
    <title><?php echo ($html_title); ?></title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="" />
    <script src="<?php echo ($base_url); ?>/flash/home/js/jquery.min.js"></script>
    <link href="<?php echo ($base_url); ?>/flash/home/css/style.css" media="all" rel="stylesheet" >
    <link href="<?php echo ($base_url); ?>/flash/home/css/style_popular.css" media="all" rel="stylesheet" >

</head>


<body>


<div class="background" ></div>
<div class="body">

    <div class="centerbox">
        
        <div class="left_content">
            <div class="logo">
                <img style="width: 80px" src="<?php echo ($base_url); ?>/flash/home/images/logo1.png">
            </div>
            <div class="blank"></div>
            <ul id="menu">
    <li>
        <a href="#">Info</a>

    </li>
    <li>
        <a href="#">Original Works</a>
        <ul>
            <li><a href="#">2014.9</a></li>
            <li><a href="#">2014.10</a></li>
            <li><a href="#">2014.11</a></li>
        </ul>
    </li>
    <li>
        <a href="#">Contact</a>
    </li>
    <li>
        <a href="#">Shop</a>
    </li>
</ul>
<script src="<?php echo ($base_url); ?>/flash/admin/js/tendina.js"></script>
<script>


    $('#menu').tendina({
        animate: true,
        speed: 500,
        openCallback: function($clickedEl) {
            console.log($clickedEl);
        },
        closeCallback: function($clickedEl) {
            console.log($clickedEl);
        }
    });
</script>
        </div>
        <div class="right_content">
            <div class="right_content_left">
                <div class="info_article item1">
                    I was graduated from qingdao university. my major is electronic.and i got my bachelor degree after my graduation in the year of 2003.

                    I spend most of my time on study,i have passed CET4/6 . and i have acquired basic knowledge of my major during my school time.

                    In July 2003, I begin work for a small private company as a technical support engineer in QingDao city.Because I'm capable of more responsibilities, so I decided to change my job.

                    And in August 2004,I left QingDao to BeiJing and worked for a foreign enterprise as a automation software test engineer.Because I want to change my working environment, I'd like to find a job which is more challenging. Morover Motorola is a global company, so I feel I can gain the most from working in this kind of company ennvironment. That is the reason why I come here to compete for this position.

                    I think I'm a good team player and I'm a person of great honesty to others. Also I am able to work under great pressure.
                </div>
            </div>
            <div class="right_content_right">
                <img src="<?php echo ($base_url); ?>/flash/home/images/right_pic1.jpg">
            </div>

            <div class="works item2" style="display: none"></div>
            <div class="contact item3" style="display: none"></div>
            <div class="other item4" style="display: none">暂未开通</div>
        </div>
    </div>
</div>


</body>
</html>