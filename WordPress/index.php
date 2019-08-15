<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php wp_title();?></title>

    <link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/4.1.0/css/bootstrap.min.css">
    <script src="https://cdn.staticfile.org/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdn.staticfile.org/popper.js/1.12.5/umd/popper.min.js"></script>
    <script src="https://cdn.staticfile.org/twitter-bootstrap/4.1.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="<?php bloginfo(’stylesheet_url’); ?>">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-white">
      <div class="container" style="position: relative;">
        <a class="navbar-brand" href="#">
          <img src="images/logo.png" alt="">
          <span><img src="images/logo2.png" alt="" class="mr-2">加拿大加安国际学院</span>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample07" aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExample07">
          
          <ul class="navbar-nav mr-auto nav-list">
            <li class="nav-item active">
              <a class="nav-link" href="#">本站首页 <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">学校简历</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">师资力量</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">项目介绍</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">办学优势</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">合作学校</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">校园新闻</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">办学成就</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">联系我们</a>
            </li>
          </ul>
          <ul class="list-unstyled lang">
            <li class=" mr-3"><a href="#">简体中文</a></li>
            <li><a href="#">ENGLISH</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="first-slide" src="images/banner.jpg" alt="First slide">
          <div class="container">
            <div class="carousel-caption text-left">
              <h1>Example headline.</h1>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img class="second-slide" src="images/banner.jpg" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Another example headline.</h1>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img class="third-slide" src="images/banner.jpg" alt="Third slide">
          <div class="container">
            <div class="carousel-caption text-right">
              <h1>One more for good measure.</h1>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
            </div>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
    <div class="container">
      <div class="teacher">
        <h2>校长寄语</h2>
        <p>
            加安国际学校是一所在加拿大注册的私立学校，主要为中国学生提供加拿大安省高中课程。学生完成中国高中课程和必修的加拿大安省高中学分课程后可以同时获得加拿大安省中学高中毕业证书和中国高中毕业证明。安省高中证书的颁发要以学生在中国的学习背景为准，学生必须修够学分，由加拿大校长审定后颁发。
        </p>
        <a href="#" class="btn more">MORE</a>
      </div>
    </div>
    <div class="container news-box">
      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12 news">
          <h2>新闻资讯</h2>
          <ul class="list-unstyled">
            <li>
              <a href="#">五湖及中加班学生近期收到的大批名校录取通知</a>
              <p>五湖及中加班学生近期收到的大批名校录取通知书，恭喜同学们！五湖及中加班学生近期收到的大批名校录取通知书，恭喜同学们！五湖及中加班学生近期收到的大批名校录取通知书...</p>
            </li>
            <li>
              <a href="#">五湖及中加班学生近期收到的大批名校录取通知</a>
              <p>五湖及中加班学生近期收到的大批名校录取通知书，恭喜同学们！五湖及中加班学生近期收到的大批名校录取通知书，恭喜同学们！五湖及中加班学生近期收到的大批名校录取通知书...</p>
            </li>
            <li>
              <a href="#">五湖及中加班学生近期收到的大批名校录取通知</a>
              <p>五湖及中加班学生近期收到的大批名校录取通知书，恭喜同学们！五湖及中加班学生近期收到的大批名校录取通知书，恭喜同学们！五湖及中加班学生近期收到的大批名校录取通知书...</p>
            </li>
            <li>
              <a href="#">五湖及中加班学生近期收到的大批名校录取通知</a>
              <p>五湖及中加班学生近期收到的大批名校录取通知书，恭喜同学们！五湖及中加班学生近期收到的大批名校录取通知书，恭喜同学们！五湖及中加班学生近期收到的大批名校录取通知书...</p>
            </li>
          </ul>
          <a href="#" class="btn more">MORE</a>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 news">
          <h2>往届毕业生</h2>
          <ul class="list-unstyled">
            <li>
              <a href="#">五湖及中加班学生近期收到的大批名校录取通知</a>
              <p>五湖及中加班学生近期收到的大批名校录取通知书，恭喜同学们！五湖及中加班学生近期收到的大批名校录取通知书，恭喜同学们！五湖及中加班学生近期收到的大批名校录取通知书...</p>
            </li>
            <li>
              <a href="#">五湖及中加班学生近期收到的大批名校录取通知</a>
              <p>五湖及中加班学生近期收到的大批名校录取通知书，恭喜同学们！五湖及中加班学生近期收到的大批名校录取通知书，恭喜同学们！五湖及中加班学生近期收到的大批名校录取通知书...</p>
            </li>
            <li>
              <a href="#">五湖及中加班学生近期收到的大批名校录取通知</a>
              <p>五湖及中加班学生近期收到的大批名校录取通知书，恭喜同学们！五湖及中加班学生近期收到的大批名校录取通知书，恭喜同学们！五湖及中加班学生近期收到的大批名校录取通知书...</p>
            </li>
            <li>
              <a href="#">五湖及中加班学生近期收到的大批名校录取通知</a>
              <p>五湖及中加班学生近期收到的大批名校录取通知书，恭喜同学们！五湖及中加班学生近期收到的大批名校录取通知书，恭喜同学们！五湖及中加班学生近期收到的大批名校录取通知书...</p>
            </li>
          </ul>
          <a href="#" class="btn more">MORE</a>
        </div>
      </div>
    </div>
    <div class="container-fluid shizi text-white text-center">
      <h4 class=" font-weight-bold">师资力量</h4>
      <p>我校聘请教学经验丰富，并具有加拿大安省教师资格认证的外籍教师到中国各校区执教，<br>
                以下是部分教师教育背景，教学经验的介绍，以及他们的教学感言</p>
      <a href="#" class="btn more">查看更多</a>
    </div>
    <div class="container partner">
      <h4>合作学校</h4>
      <p class=" text-center">加拿大加安国际学院是由加拿大多伦多五湖学院申请并获得加拿大安大略省教育厅批准，在加拿大海外（中国）设立的高级中学。学校开设加拿大安大略省教育厅规定的ESL课程，中学10-12年级英文及申请大学必须的大学预科课程。这些课程均遵循加拿大安大略省教育厅教育大纲，由具有安省教育资格的加籍教师用全英文授课，学校同时接受安省教育厅督学处的定期考核。所有合格毕业生将获得中、加高中双文凭——中国高中文凭和加拿大安大略省教育厅颁发的安省高中文凭。</p>
      <div class="row school-box">
        <div class="col-lg-4 school">
          <div>
            <h3>浙江省金华第一中学</h3>
            <div class="line"></div>
            <p>浙江省金华第一中学 浙江金华一中是浙江省一级重点中学，创建于1902年，学校坐落...</p>
            <a href="#" class="btn more">查看更多</a>
          </div>  
        </div>
        <div class="col-lg-4 school">
          <div>
            <h3>浙江省金华第一中学</h3>
            <div class="line"></div>
            <p>浙江省金华第一中学 浙江金华一中是浙江省一级重点中学，创建于1902年，学校坐落...</p>
            <a href="#" class="btn more">查看更多</a>
          </div>  
        </div>
        <div class="col-lg-4 school">
          <div>
            <h3>浙江省金华第一中学</h3>
            <div class="line"></div>
            <p>浙江省金华第一中学 浙江金华一中是浙江省一级重点中学，创建于1902年，学校坐落...</p>
            <a href="#" class="btn more">查看更多</a>
          </div>  
        </div>
      </div>
    </div>
    <div class="container dynamics">
      <h4>最新动态</h4>
      <div class="row">
        <div class=" col-lg-6 dynamics-box">
          <div class="media">
            <img src="images/media.png" alt="John Doe" class="mr-3">
            <div class="media-body">
              <h6 class=" font-weight-bold mb-3">五湖及中加班学生近期收到的大批名校...</h6>
              <p style="font-size:14px;">五湖及中加班学生近期收到的大批名校录取通知书，恭喜同学们！五湖及中加班学生近期收到的大批名校录取通知书，恭喜同学们！五湖及中加班学生近期收到的大批名校录取通知书...</p>      
            </div>
          </div>
        </div>
        <div class=" col-lg-6">
          <div class="media">
            <img src="images/media.png" alt="John Doe" class="mr-3">
            <div class="media-body">
              <h6 class=" font-weight-bold mb-3">五湖及中加班学生近期收到的大批名校...</h6>
              <p style="font-size:14px;">五湖及中加班学生近期收到的大批名校录取通知书，恭喜同学们！五湖及中加班学生近期收到的大批名校录取通知书，恭喜同学们！五湖及中加班学生近期收到的大批名校录取通知书...</p>      
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container contact">
      <h4>联系我们</h4>
      <div class="row">
        <div class="col-xl-4 col-md-6 pl-5 pb-3">
          电话: 1-905-572-7883
        </div>
        <div class="col-xl-4 col-md-6 pl-5 pb-3">
          邮箱 ：query@glctschool.com

        </div>
        <div class="col-xl-4 col-md-6 pl-5 pb-3">
          地址：北京朝阳区千鹤家园3号楼608室
        </div>
        <div class="col-xl-4 col-md-6 pl-5 pb-3">
          传真: 1-905-572-9332
        </div>
        <div class="col-xl-4 col-md-6 pl-5 pb-3">
          邮箱 ：glctbjoffice@glctschool.com.cn
        </div>
      </div>
    </div>
    <div class="container-fluid footer text-center mt-5 pt-5 pb-5">
        <a href="#">本站首页</a>
        <span>|</span>
        <a href="#">学校简介</a>
        <span>|</span>
        <a href="#">项目介绍</a>
        <span>|</span>
        <a href="#">本校特色</a>
        <span>|</span>
        <a href="#">办学优势</a>
        <span>|</span>
        <a href="#">分校介绍</a>
        <span>|</span>
        <a href="#">校园新闻</a>
        <span>|</span>
        <a href="#">教学成就</a>
        <span>|</span>
        <a href="#">联系我们</a>
        <p>Copyright ©加拿大多伦多五湖学院 All Rights Reserved. 管理中心</p>
        
    </div>
</body>
</html>
