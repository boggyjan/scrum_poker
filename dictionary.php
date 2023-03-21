<?php
  $lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
  // $lang = 'ja';
  
  $dictionary = [
    '歡迎使用Scrum Poker！這是一個不需要安裝的免費Web Application. 使用方式非常簡單。' => [
      'ja' => 'ようこそ Scrum Poker. これは無料ウェブアップ、装置する必要がありません。しかも簡単です。',
      'en' => 'Welcome to Scrum Poker. This is a free web application without installtion. And Easy to use.'
    ],
    '您可以左右滑動畫面選擇需要的牌。' => [
      'ja' => '画面を横にいじると、必要なポーカーを選んでください。',
      'en' => 'You can choose a poker by sliding screen.'
    ],
    '按住畫面大約半秒，即可隱藏所選的牌。' => [
      'ja' => '画面を押し止め反秒くらい、選んだポーカーを隠すできます。',
      'en' => 'Hold the screen to hide the poker.'
    ],
    '放開螢幕後即可顯示您所選擇的牌。' => [
      'ja' => '指を離したら、選んだポーカーがもう一度見せます。',
      'en' => 'Release screen to re-display poker.'
    ],
    '開始使用' => [
      'ja' => '始めましょう',
      'en' => 'Start'
    ]
  ];

  function __($str) {
    global $dictionary, $lang;

    if (isset($dictionary[$str][$lang])) return $dictionary[$str][$lang];
    else return $str;
  }
?>