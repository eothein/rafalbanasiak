<?php
/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use kartik\icons\Icon;

Icon::map($this);
AppAsset::register($this);
\pavlinter\wow\WowAsset::register($this)->wow([
    'boxClass' => 'wow',
    'animateClass' => 'animated',
    'offset' => '0',
]);


?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?= Html::csrfMetaTags() ?>
        <meta name="author" content="e-quality">
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
    </head>
    <body>
        <?php $this->beginBody() ?>
        <header id="header">
            <div class="container">
                <div class="header--section">
                    <?php
                    NavBar::begin([
                        'id' => 'rafal',
                        'brandLabel' => 'Renovaties Rafal Banasiak',
                        'brandUrl' => Yii::$app->homeUrl,
                        'options' => [
                            'class' => 'navbar-default navbar-fixed-top',
                        ],
                    ]);
                    echo Nav::widget([
                        'options' => ['class' => 'navbar-nav navbar-left'],
                        'items' => [
                            ['label' => 'Home', 'url' => ['/site/index']],
                            ['label' => 'Het bedrijf', 'url' => ['/site/about']],
                            ['label' => 'Voorbeeldprojecten', 'url' => ['/site/projects']],
                            ['label' => 'Contact', 'url' => ['/site/contact']],
                        ],
                    ]);
                    NavBar::end();
                    ?>
                </div>
            </div>
        </header>
        <div class="wrap">

            <?=
            Breadcrumbs::widget([
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ])
            ?>
            <?= $content ?>
        </div>

        <footer id="contact" class="footer--section">
            <div class="row">
                <div class="container">
                    <div class="contact--block">
                        <h2>Contacteer ons</h2>

                        <div class="col-lg-4">

                            <div class="contact--block--icon rollIn animated wow"><span><?php echo Icon::show('home', ['class' => 'fa-4x'], Icon::FA); ?></span></div>
                            <p>Kapellestraat 88, 8450 Bredene </p>
                        </div>
                        <div class="col-lg-4">

                            <div class="contact--block--icon icon2 rollIn animated wow"><span><?php echo Icon::show('phone', ['class' => 'fa-4x'], Icon::FA); ?></span></div>
                            <p>+32 (0)59 / 11 11 11 </p> 
                        </div>
                        <div class="col-lg-4">

                            <div class="contact--block--icon icon3 rollIn animated wow"><span><?php echo Icon::show('pencil', ['class' => 'fa-4x'], Icon::FA); ?></span></div>
                            <span><a href="mailto:mail@rafal.com"> mail@rafal.be</a>  </span>
                        </div>

                    </div>
                </div>
                <div class="row">
                    <div class="container">
                        <div class="footer--bottom"> <span>Copyright ©  <a href="http://www.e-quality.be">e-quality</a>. </span> </div>
                    </div>
                </div>
        </footer>


        <?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>
