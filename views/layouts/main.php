<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use simpleprojects\sbadmin\assets\SbAsset;

SbAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
<?php $this->beginBody() ?>

<div class="wrapper">
    <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
    <?php 
        //If we have custom top naviagation, we use it
        if(file_exists(Yii::getAlias('@app') . DIRECTORY_SEPARATOR . 'views/layouts/top_navigation.php')) {
            echo $this->render('@app/views/layouts/top_navigation.php');
        } else {
            echo $this->render('_top_navigation');
        }
        
        if(file_exists(Yii::getAlias('@app') . DIRECTORY_SEPARATOR . 'views/layouts/left_navigation.php')) {
            echo $this->render('@app/views/layouts/left_navigation.php');
        } else {
            echo $this->render('_left_navigation');
        }        
    ?>
    </nav>
    <div id="page-wrapper">
        <?= $content ?>
    </div>
</div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
