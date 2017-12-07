<?php include 'dictionary.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">

  <title><?= __('Scrum Poker') ?></title>
  <meta name="description" content="<?= __('歡迎使用Scrum Poker！這是一個不需要安裝的免費Web Application. 使用方式非常簡單。') ?>">
  <meta name="keywords" content="scrum,poker,scrumtime,plane,planning poker,cards,team,work">
  <meta name="author" content="Yu-Chun Chang">

  <link rel="shortcut icon" href="assets/images/favicon.ico">
  <link rel="apple-touch-icon" href="assets/images/apple-touch-icon.png">
  <meta name="apple-mobile-web-app-title" content="Scrum Poker">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
  <meta name="format-detection" content="telephone=no">

  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="Scrum Poker">
  <meta name="twitter:description" content="歡迎使用Scrum Poker！這是一個不需要安裝的免費Web Application. 使用方式非常簡單。">
  <meta name="twitter:image" content="http://app.boggy.tw/scrum_poker/assets/images/sns_share_img.jpg">
  
  <meta property="og:type" content="website">
  <meta property="og:title" content="Scrum Poker">
  <meta property="og:description" content="歡迎使用Scrum Poker！這是一個不需要安裝的免費Web Application. 使用方式非常簡單。">
  <meta property="og:url" content="http://app.boggy.tw/scrum_poker">
  <meta property="og:site_name" content="Scrum Poker">
  <meta property="og:image" content="http://app.boggy.tw/scrum_poker/assets/images/sns_share_img.jpg">
  
  <link rel="stylesheet" href="//static.boggy.tw/vendor/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="//static.boggy.tw/vendor/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="//static.boggy.tw/vendor/OwlCarousel2/2.2.0/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="//static.boggy.tw/vendor/OwlCarousel2/2.2.0/assets/owl.theme.green.min.css">
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">

  <link rel="stylesheet" href="assets/css/app.css?v=<?= filemtime('assets/css/app.css'); ?>">
</head>
<body>
  <div class="app" v-bind:class="{fadeout: isHideStage}" @touchstart="hideStage" @mousedown="hideStage" @touchmove="holdMove" @mousemove="holdMove" @touchend="showStage" @mouseup="showStage">
    <div v-show="pokes.length" class="pokes owl-carousel">
      <div v-for="p in pokes">
        <div class="poke"><span class="text" v-html="p"></span></div>
      </div>
    </div>
  </div>

  <a href="#" class="toggle-help-modal-btn question-btn"><i class="fa fa-question-circle"></i></a>

  <div class="help-modal">
    <div class="modal-overlay"></div>
    <div class="help-content">
      <div class="owl-carousel owl-theme helps">
        <div class="help-item">
          <img src="assets/images/help/step1.jpg">
          <div class="text"><?= __('歡迎使用Scrum Poker！這是一個不需要安裝的免費Web Application. 使用方式非常簡單。') ?></div>
        </div>
        <div class="help-item">
          <img src="assets/images/help/step2.jpg">
          <div class="text"><?= __('您可以左右滑動畫面選擇需要的牌。') ?></div>
        </div>
        <div class="help-item">
          <img src="assets/images/help/step3.jpg">
          <div class="text"><?= __('按住畫面大約半秒，即可隱藏所選的牌。') ?></div>
        </div>
        <div class="help-item">
          <img src="assets/images/help/step4.jpg">
          <div class="text">
            <?= __('放開螢幕後即可顯示您所選擇的牌。') ?><br><br>
            <a href="#" class="btn btn-success toggle-help-modal-btn"><?= __('開始使用') ?></a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="copyright">Copyright © <?= date("Y"); ?> Boggy Jang. All rights reserved.</div>
  
  <script src="//static.boggy.tw/vendor/jquery/jquery-3.1.1.min.js"></script>
  <script src="//static.boggy.tw/vendor/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="//static.boggy.tw/vendor/vue.js/2.1.10/vue.min.js"></script>
  <script src="//static.boggy.tw/vendor/OwlCarousel2/2.2.0/owl.carousel.min.js"></script>
  <script src="assets/js/app.php?v=<?= filemtime('assets/js/app.php'); ?>"></script>
</body>
</html>
