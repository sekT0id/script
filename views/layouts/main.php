<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use app\assets\AppAsset;

use app\extended\widgets\base;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?php echo Yii::$app->language;?>">
<head>
    <meta charset="<?php echo Yii::$app->charset;?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php echo Html::csrfMetaTags();?>
    <title><?php echo Html::encode($this->title);?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

    <div class="wrap">

        <?php echo base::widget(['show' => 'nav']);?>

        <div class="content container-fluid">

            <?php echo $content;?>

        </div>


    </div>

    <footer class="footer">
        <div class="container">
            <p class="pull-left">&copy; My Company <?php echo date('Y');?></p>

            <p class="pull-right"><?php echo Yii::powered();?></p>
        </div>
    </footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
