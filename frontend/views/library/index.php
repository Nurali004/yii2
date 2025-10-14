<?php

/**
 * @var $dataProvider \frontend\controllers\LibraryController
 */

use yii\grid\GridView;

echo GridView::widget([
    'dataProvider' => $dataProvider,
    'pager' => [
        'class' => yii\bootstrap5\LinkPager::class,
        'firstPageLabel' => 'Oldinga',
        'lastPageLabel' => 'Oxirgi',
    ],
    'options' => [
        'style' => 'overflow: auto',

    ]

]);
