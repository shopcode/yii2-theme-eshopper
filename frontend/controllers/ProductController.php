<?php

namespace frontend\controllers;

# Yii Base
use yii\web\Controller;

class ProductController extends Controller {
    
    /* หน้าสินค้า */
    public function actionIndex(){
        return $this->render('index');
    }
	
    /* หน้าประเภทสินค้า */
    public function actionCategory($category_id = null){
        $this->layout = 'product'; // เรียกใช้ Layout ชื่อว่า product 
        return $this->render('category');
    }
	
    /* หน้ารายละเอียดสินค้า */
    public function actionView($product_id = null){
        $this->layout = 'product'; // เรียกใช้ Layout ชื่อว่า product 
        return $this->render('view');
    }

}