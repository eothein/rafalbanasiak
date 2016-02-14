<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

use metalguardian\fotorama\Fotorama;

$schilderwerken = [
    'items' => [
        ['img' => 'images/schilder/schilderwerken1.jpg', 'id' => 'schilderwerken 1',],
        ['img' => 'images/schilder/schilderwerken2.jpg', 'id' => 'schilderwerken 2',],
        ['img' => 'images/schilder/schilderwerken3.jpg', 'id' => 'schilderwerken 3',],
    ],
    'options' => [
        'nav' => 'thumbs',
        'allowfullscreen' => 'true',
        'width' => '100%',
        'height' => '300',
    ]
];

$gyproc = [
    'items' => [
        ['img' => 'images/gyproc/gyproc1.jpg', 'id' => 'gyproc 1',],
        ['img' => 'images/gyproc/gyproc2.jpg', 'id' => 'gyproc 2',],
        ['img' => 'images/gyproc/gyproc3.jpg', 'id' => 'gyproc 3',],
    ],
    'options' => [
        'nav' => 'thumbs',
        'allowfullscreen' => 'true',
        'width' => '100%',
        'height' => '300'
    ]
];

$betegeling = [
    'items' => [
        ['img' => 'images/betegeling/betegeling1.jpg', 'id' => 'betegeling 1',],
        ['img' => 'images/betegeling/betegeling2.jpg', 'id' => 'betegeling 2',],
    ],
    'options' => [
        'nav' => 'thumbs',
        'allowfullscreen' => 'true',
        'width' => '100%',
        'height' => '300'
    ]
];

$renovaties = [
    'items' => [
        ['img' => 'images/renovatie/renovaties1.jpg', 'id' => 'renovaties1 1',],
        ['img' => 'images/renovatie/renovaties2.jpg', 'id' => 'renovaties1 2',],
        ['img' => 'images/renovatie/renovaties3.jpg', 'id' => 'renovaties1 3',],
    ],
    'options' => [
        'nav' => 'thumbs',
        'allowfullscreen' => 'true',
        'width' => '100%',
        'height' => '300',
        'lazyloading' => 'true'
    ]
];

$this->title = 'Voorbeeldprojecten';
$this->params['breadcrumbs'][] = $this->title;
?>
<section class="project">
    <div class="container">
        <div class="row ">
            <div class="col-md-6  col- project__item">
                <?php echo Fotorama::widget($schilderwerken); ?>
                <div class="portfolio-caption">
                    <h4>Behang- & schilderwerken</h4>
                </div>
            </div>

            <div class="col-md-6 project__item ">
                <?php echo Fotorama::widget($betegeling); ?>
                <div class="portfolio-caption">
                    <h4>Betegeling</h4>
                </div>
            </div>
        </div>
        <div class="row ">
            <div class="col-md-6  project__item">
                <?php echo Fotorama::widget($gyproc); ?>
                <div class="portfolio-caption">
                    <h4>Gyproc</h4>
                </div>
            </div>
            <div class="col-md-6  project__item">
                <?php echo Fotorama::widget($renovaties); ?>
                <div class="portfolio-caption">
                    <h4>Renovaties</h4>
                </div>
            </div>
        </div>
    </div>
</div>
</section>

