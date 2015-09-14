<?php

namespace frontend\controllers;

use Yii;
use yii\web\Controller;

class DashboardController extends Controller
{
    public function actionIndex()
    {
    	if (Yii::$app->user->isGuest) {
    		return $this->goHome();
    	}
        return $this->render('index');
    }

}
