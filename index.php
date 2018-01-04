<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="robots" content="noindex,nofollow">
<title>Choitto!</title>
<link rel="canonical" href="https://lopan.jp/css-animation">
<meta name="viewport" content="width=device-width">
<link rel="stylesheet" href="css/normalize.min.css">
<link rel="stylesheet" href="css/lopan-tabs.css">
<link rel="stylesheet" href="css/lopan-syntax.css">
<link rel="stylesheet" href="css/sample.css">

<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

<!-- animocon CSS -->
<link rel="stylesheet" type="text/css" href="animocons.min.css" />
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" />

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
<!-- animocon のjs -->
<script src="animocons.min.js"></script>

<script type="text/javascript" src="index.js"></script>
<style>
  .bouton_4{
      width:40px;
      height:40px;
      margin-top: 5px;
      border-radius:40px;
      background-color:#CB2025;
      overflow:hidden;
      -webkit-transition:all 0.2s ease-in;
      -moz-transition:all 0.2s ease-in;
      -ms-transition:all 0.2s ease-in;
      -o-transition:all 0.2s ease-in;
      transition:all 0.2s ease-in;
  }
  .bouton_4:hover{
      width:200px;
      height:40px;
      border-radius:40px;
      background-color:#97bf0d;
  }
  .texteduboutton_4
  {
      width:70%;
      padding-right: 10px;
      float:right;
      line-height:40px;
      color:#ffffff;
      font-family:'Roboto';
      font-weight:300;
      font-size:18px;
  }
  .bouton_5{
      width:40px;
      height:40px;
      margin-top: 5px;
      border-radius:40px;
      background-color:#FF8C00;
      overflow:hidden;
      -webkit-transition:all 0.2s ease-in;
      -moz-transition:all 0.2s ease-in;
      -ms-transition:all 0.2s ease-in;
      -o-transition:all 0.2s ease-in;
      transition:all 0.2s ease-in;
  }
  .bouton_5:hover{
      width:200px;
      height:40px;
      border-radius:40px;
      background-color:#0000FF;
  }
  .texteduboutton_5
  {
      width:70%;
      padding-right: 10px;
      float:right;
      line-height:40px;
      color:#ffffff;
      font-family:'Roboto';
      font-weight:300;
      font-size:18px;
  }

  .question {
    position: absolute;
    top: 30px;
    bottom: 0;
    left: 0;
    right: 0;
    margin: auto;
  }

  .bg{
  	background: url(img/headerbg.jpg) no-repeat center;
  	background-size: cover;
  	position: relative;
  	height:100%;
  }
  .bg::before{
  	/* 透過した黒を重ねる */
  	background-color: rgba(0,0,0,0.5);
  	/* どの範囲に重ねるかを指定 */
  	position: absolute;
  	top: 0;
  	right: 0;
  	bottom: 0;
  	left: 0;
  	content: ' ';
  }
  .box{
    position: absolute;
    width: 100%;
    text-align: center;
  }

  </style>

</head>
<body>
  <div class="lopanTabs">
    <input type="radio" name="tab" id="html" checked>
    <input type="radio" name="tab" id="css">
    <input type="radio" name="tab" id="preview">
    <ul class="tab-btn">
      <li><label for="html">TOP</label></li>
      <li><label for="css">ABOUT</label></li>
      <li><label for="preview">SEARCH</label></li>

    </ul>
    <div class="tab-container">
      <div class="tab-panel" data-content="html">
        <header style="height:700px; margin:0;">
        <div class="bg">
          <div class="box text-white" style="padding-top:300px;">
            <h1 >Choitto!</h1>
            <p >〜気軽にギフトをチョイスする〜</p>
            <div class="bouton_4 mt-3" style="margin:auto;" onclick="goAbout()">
              <img src="img/logo.png" style="width:30px;
                     height:30px;margin-top:4px;"/>
              <span class="texteduboutton_4">choitto!とは？</span>
            </div>
            <div class="bouton_5 mt-3" style="margin:auto;" onclick="goSearch()">
              <i class="fa fa-search" style="font-size: 1.8em; margin-top:4px;" aria-hidden="true"></i>
              <span class="texteduboutton_5">早速調べる!</span>
            </div>

          </div>
        </div>
      </header>
        </div>

      <div class="tab-panel" data-content="css">
        <div class="lopanSyntax">
          <header>
            <div style="height:200px; margin:0;">
            <div class="bg">
              <div class="box text-white" style="padding-top:75px;">
                <h1 >Choitto!</h1>
                <p>〜気軽にギフトをチョイスする〜</p>
            </div>
          </div>
          </header>
          <main>
            <section class="py-5">
              <h2 class="text-center mb-5">Choitto!とは</h2>
              <div class="container">
                <div class="mb-5 row">
                <div class="col-sm-8">
                  <h3>毎月のプレゼント選び</h3>
                  <p>バレンタイン、ホワイトデー、母の日、父の日…これに加えて友達、家族の誕生日に恋人の記念日…</p>
                </div>
                <div class="col-sm-4">
                  <img src="img/calender.jpeg" class="2-100 rounded-circle" alt="">
                </div>
                </div>
                <div class=" row mb-3">
                <div class="col-sm-8 order-sm-2">
                  <h3>選ぶのは正直大変...</h3>
                  <p>何が好きなんだろう、あれっていくらくらいだっけ、気に入ってもらえるかな、というかもう面倒臭い！</p>
                </div>
                <div class="col-sm-4 order-sm-1">
                  <img src="img/human.jpeg" class="2-100 rounded-circle" alt="">
                </div>
                </div>
              </div>
              <div class="text-center bg-warning" style="height:500px;">
                <h2 class="text-center mb-1 pt-5">〜あなたの代わりにぴったりのギフトを探します〜</h2>
                <img src="img/Choitto!-logo.png" alt="">
                <div class="bouton_5 mt-3 pb-3" style="margin:auto;" onclick="goSearch()">
                  <i class="fa fa-search" style="font-size: 1.8em; margin-top:4px;" aria-hidden="true"></i>
                  <span class="texteduboutton_5">早速調べる!</span>
                </div>
              </div>

            </section>
          </main>
        </div>
      </div>
      <div class="tab-panel" data-content="preview">
        <header>
          <div style="height:200px; margin:0;">
          <div class="bg">
            <div class="box text-white" style="padding-top:75px;">
              <h1 >Choitto!</h1>
              <p>〜気軽にギフトをチョイスする〜</p>
          </div>
        </header>
        <main>
          <section class="py5" style="color:#2E2E2E;">
            <div class="mb-5 text-center">
        <div class="tab-content tabs slide H">
          <div id="wrapper">
            <input type="radio" name="switch" id="tab-1" checked>
            <input type="radio" name="switch" id="tab-2">
            <input type="radio" name="switch" id="tab-3">
            <input type="radio" name="switch" id="tab-4">
            <input type="radio" name="switch" id="tab-5">
            <ul class="tabBtn">
              <li><label for="tab-1">Question1</label></li>
              <li><label for="tab-2">Question2</label></li>
              <li><label for="tab-3">Question3</label></li>
              <li><label for="tab-4">Question4</label></li>
              <li><label for="tab-5">結果へ進む</label></li>
            </ul>
            <div class="tabContents">
              <section>
              <div style="position:relative" class="mb-5">
              <img src="img/q1.jpeg" alt="topimg" style="height:400px; width:400px;" class="rounded-circle">
              <div id="q1" class="question" style="margin-top:80px;">
              <h3>Q1</h3>
              <p>相手の性別は？</p>
              <button class="icobutton icobutton-3-ccc-red fa-5x">
                <span class="fa fa-female"></span>
              </button>
              <button class="icobutton icobutton-3-ccc-blue fa-5x">
                <span class="fa fa-male"></span>
              </button>
              </div>
              </div>
              <button type="button" class="btn btn-outline-info" onclick="slide1()">次の質問へ</button>
              </section>
              <section>
                <div style="position:relative" class="mb-5">
                <img src="img/q2.png" alt="topimg" style="height:400px; width:400px;" class="rounded-circle">
                <div id="q2" class="question" style="margin-top:50px;">
                <h3>Q2</h3>
                <p>相手との関係は？</p>
                <button class="icobutton icobutton-3-ccc-yellow d-inline fa-2x">
                  <span class="fa fa-star"></span>
                </button>
                <p class="d-inline mb-5"> 友達</p><br>
                <p></p>
                <button class="icobutton icobutton-3-ccc-red d-inline fa-2x">
                  <span class="fa fa-heart"></span>
                </button>
                <p class="d-inline" style="margin-bottom:10px;">恋人</p><br>
                <p></p>
                <button class="icobutton icobutton-3-ccc-green d-inline fa-2x">
                  <span class="fa fa-user"></span>
                </button>
                <p class="d-inline">  家族</p>
              </div>
            </div>
            <button type="button" class="btn btn-outline-info" onclick="slide2()">次の質問へ</button>
              </section>
              <section>
                <div style="position:relative" class="mb-5">
                <img src="img/q3.jpg" alt="topimg" style="height:400px; width:400px;" class="rounded-circle">
                <div id="q3" class="question" style="margin-top:50px;" >
                <h3>Q3</h3>
                <p>相手の年齢は？</p>
                <div class="form-group" style="width:100px; margin:auto;">
                  <select class="form-control" id="age_min">
                    <option value="">ちびっこ</option>
                    <option value="10">10代</option>
                    <option value="20">20代</option>
                    <option value="30">30代</option>
                    <option value="40">40代</option>
                    <option value="50">50代</option>
                    <option value="60">60代</option>
                  </select>
                  <p class="d-inline">〜</p>
                  <select class="form-control" id="age_max">
                    <option value="">ちびっこ</option>
                    <option value="10">10代</option>
                    <option value="20">20代</option>
                    <option value="30">30代</option>
                    <option value="40">40代</option>
                    <option value="50">50代</option>
                    <option value="60">60代</option>
                  </select>
                </div>
              </div>
              </div>
              <button type="button" class="btn btn-outline-info" onclick="slide3()">次の質問へ</button>
              </section>
              <section>
                <div style="position:relative" class="mb-5">
                <img src="img/q4.gif" alt="topimg" style="height:400px; width:400px;" class="rounded-circle">
                <div id="q4" class="question" style="margin-top:50px;">
                <h3>Q4</h3>
                <p>予算は？</p>
                <div class="form-group" style="width:100px; margin:auto;">
                  <select class="form-control" id="budget_min">
                    <option value="">下限なし</option>
                    <option value="1000">1,000円</option>
                    <option value="3000">3,000円</option>
                    <option value="5000">5,000円</option>
                    <option value="10000">10,000円</option>
                    <option value="20000">20,000円</option>
                  </select>
                  <p class="d-inline">〜</p>
                  <select class="form-control" id="budget_max">
                    <option value="1000">1,000円</option>
                    <option value="3000">3,000円</option>
                    <option value="5000">5,000円</option>
                    <option value="10000">10,000円</option>
                    <option value="20000">20,000円</option>
                    <option value="">上限なし</option>
                  </select>
                </div>
              </div>
              </div>
              <button type="button" class="btn btn-outline-info" onclick="slide4()">結果画面へ</button>
              </section>
              <section>
                <p>
                <a class="btn btn-secondary" id="resultbutton" >
                  結果を見る
                </a>
              </p>
              <div id="result" style="display: none;"></div>
              </section>
            </div>
          </div>
          </div>
      </div>
      </section>
      </main>
      </div>
    </div>
  </div>
</body>
</html>
