<?php

namespace frontend\controllers;

# Yii Base
use yii\web\Controller;

class CartController extends Controller {
    
    /* หน้าตะกร้าสินค้า */
    public function actionIndex(){
        return $this->render('index');
    }

}