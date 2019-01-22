<?php
$this->title = 'Панель управления Devortix'
?>
<div class="clearfix"></div>


<div class="x_panel">
    <div class="x_title">
        <h1> <i class="fa fa-home"></i> Добро пожаловать</h1>
    </div>
    <div class="x_content">
        <?
    $filename = '../composer.lock';
    if (file_exists($filename)) {
        echo "Последнее обновление панели: <code>" . \Yii::$app->formatter->asDate(filemtime($filename), 'php:Y-m-d H:i').'</code>';
    }
    ?>
    </div>
</div>



<div class="clearfix"></div>
<div class="admin-default-index">

    <div class="row">
        <div class="col-xs-12 col-md-6">
            <?=
\yiister\gentelella\widgets\StatsTile::widget(
    [
        'icon' => 'info-circle',
        'header' => 'Версия панели ',

        'number' => '1.0.0 22.12.18',
    ]
)
?>
        </div>

        <div class="col-xs-12 col-md-6">
            <?=
\yiister\gentelella\widgets\StatsTile::widget(
    [
        'icon' => 'sign-in',
        'header' => 'Последний вход',

        'number' => \Yii::$app->formatter->asDate(\Yii::$app->user->identity->last_login_at, 'php:Y-m-d H:i'),
    ]
)
?>
        </div>

    </div>
</div>
<div class="clearfix"></div>
<div class="x_panel">
    <div class="x_title">
        <h3> <i class="fa fa-th-list" aria-hidden="true"></i>
            Журнал обновлений</h3>
    </div>
    <div class="x_content">
        <?=
\yiister\gentelella\widgets\Timeline::widget(
    [
        'items' => [

            [
                'title' => 'Added Russian localization',
                'byline' => '<span>29.12.18</span> ',

            ],

        ],
    ]
)
?>
    </div>
</div>