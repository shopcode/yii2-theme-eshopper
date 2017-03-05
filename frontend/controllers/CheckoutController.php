<?php

namespace frontend\controllers;

# Yii Base
use yii\web\Controller;

class CheckoutController extends Controller {
    
    /* หน้าชำระเงิน */
    public function actionIndex(){
        return $this->render('index');
    }

}