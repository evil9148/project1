<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="./img/icons/favicon.ico">
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Nanum+Myeongjo:wght@400;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="./css/reset.css">
  <link rel="stylesheet" href="./css/style.css">
  <link rel="stylesheet" href="./css/greet.css">
  <link rel="stylesheet" href="./css/header.css">
  <link rel="stylesheet" href="./css/footer.css">
  <link rel="stylesheet" href="./css/sub-layout.css">
  <script src="https://kit.fontawesome.com/7aac010507.js" crossorigin="anonymous"></script>
  <script src="http://code.jquery.com/jquery-latest.js" type="text/javascript"></script>
  <script src="./js/sub.js"></script>
  <script src="./js/common.js"></script>
  <script src="./js/nav.js"></script>
  <script src="./js/header.js"></script> 
  <title>Document</title>
</head>

<body>
  <header>
    <div class="top">
      <nav class="member">
        <a href="./index.php">처음으로</a>
        <a href="signup.php">로그인</a>
        <a href="register.php">회원가입</a>
      </nav>
    </div>
    <div class="center">
      <h1>
        <a href="./index.php">
          <img src="./img/icons/logo.png" alt="">
        </a>
        <span class="hidden">선샤인</span>
      </h1>
      <nav class="gnb lg">
        <?php include 'menu.php' ?>
      </nav>

      <nav class="gnb sm">
        <?php include 'menu.php' ?>
      </nav>

      <button class="mbtn">
        <i class="fa-solid fa-bars open"></i>
        <i class="fa-solid fa-xmark close"></i>
      </button>
    </div>
  </header>