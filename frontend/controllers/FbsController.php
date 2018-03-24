<?php

namespace frontend\controllers;


class FbsController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
  public function actionFbs1()
    {
      $sql = "SELECT * FROM lab ";
      $data = \Yii::$app->db->createCommand($sql)->queryAll();
      $dataProvider = new \yii\data\ArrayDataProvider([
          'allModels'=>$data
      ]);
        return $this->render('fbs1',[
            'dataProvider'=>$dataProvider
        ]);
    }

}
