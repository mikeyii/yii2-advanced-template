<?php
/* @var $this yii\web\View */
use yii\helpers\Html;
use yii\bootstrap\Nav;
$this->title = 'Личный кабинет';
?>
<div class="col-lg-3">
	<?=Nav::widget([
		'encodeLabels' => false,
		'options' => [
			'class' => 'nav nav-pills nav-stacked'
		],
		'items' => [
			[
				'label' => 'Личный кабинет',
				'url' => ['/dashboard/index'],
			],
			[
				'label' => 'Действие',
				'url' => ['#'],
			],
			[
				'label' => 'Ещё действие',
				'url' => ['#'],
			],
		],
	]);?>
</div>
<div class="col-lg-9">
	<h1><?= Html::encode($this->title) ?></h1>
	<p>
	   Добро пожаловать, <?=Yii::$app->user->identity->username?>
	</p>
</div>
