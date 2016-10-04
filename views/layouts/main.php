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
        <!-- Piwik -->
        <script type="text/javascript">
            var _paq = _paq || [];
            _paq.push(["setDomains", ["*.www.renovatiesrafal.be"]]);
            _paq.push(['trackPageView']);
            _paq.push(['enableLinkTracking']);
            (function () {
                var u = "//www.piwik.e-quality.be/";
                _paq.push(['setTrackerUrl', u + 'piwik.php']);
                _paq.push(['setSiteId', '2']);
                var d = document, g = d.createElement('script'), s = d.getElementsByTagName('script')[0];
                g.type = 'text/javascript';
                g.async = true;
                g.defer = true;
                g.src = u + 'piwik.js';
                s.parentNode.insertBefore(g, s);
            })();
        </script>
    <noscript><p><img src="//www.piwik.e-quality.be/piwik.php?idsite=2" style="border:0;" alt="" /></p></noscript>
    <!-- End Piwik Code -->

    <?php $this->head() ?>
</head>
<body>
    <?php $this->beginBody() ?>
    <div class="wrapper">
        <header id="header">

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
        </header>




        <?= $content ?>
        <div class="push"></div>
    </div>
    <footer  class="footer footer--section">
        <div class="contact--block">
            <div class="container">
                <div class="row">
                    <h2>Contacteer ons</h2>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">

                        <div class="rollIn animated wow"><?php echo Icon::show('home', ['class' => 'fa-4x'], Icon::FA); ?></div>
                        <p>Kapellestraat 88/1, 8450 Bredene </p>
                        <p>BTW: 0506.998.24</p>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">

                        <div class="rollIn animated wow"><span><?php echo Icon::show('phone', ['class' => 'fa-4x'], Icon::FA); ?></div>
                        <p>+32 (0)473 / 47 78 30 </p> 
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">

                        <div class=" rollIn animated wow"><?php echo Icon::show('pencil', ['class' => 'fa-4x'], Icon::FA); ?></div>
                        <span><a href="mailto:banasiak.raf@gmail.com"> banasiak.raf@gmail.com</a>  </span>
                    </div>
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
