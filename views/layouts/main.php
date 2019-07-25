<?php

use yii\bootstrap4\NavBar;
use yii\bootstrap4\Nav;

?>

<?php $this->beginPage(); ?>

  <!doctype html>
  <html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Hello, world!</title>
    <?php $this->head(); ?>
  </head>
  <body>
  <?php $this->beginBody(); ?>
  <div class="container">
    <?php
    NavBar::begin([
      'brandLabel' => 'School',
      'brandUrl' => Yii::$app->homeUrl,
      'brandOptions' => ['class' => 'navbar-default navbar-fixed-top']
    ]);

    $menu = [
      ['label' => 'Join', 'url' => ['/site/join']],
      ['label' => 'Login', 'url' => ['/site/login']]
    ];

    echo Nav::widget([
      'items' => $menu,
      'options' => ['class' => 'navbar-nav ml-auto'],
    ]);
    NavBar::end();
    ?>
    <h1>Hello</h1>
    <?= $content ?>
  </div>
  <?php $this->endBody(); ?>
  </body>
  </html>
<?php $this->endPage(); ?>