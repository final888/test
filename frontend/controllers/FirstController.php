<?php

namespace frontend\controllers;

class FirstController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
 public function actionTest1()
    {
        return $this->render('test1');
    }
 public function actionTest2()
    {
     $qq ="Hiiiiiiii";
     $a = "bb";
     return $this->render('test2',[
         'qq' =>$qq,
          'b' =>$a   
           ]);
    }
 public function actionTest3()
    {
        return $this->render('test3');
    }
    
    public function actionTest4(
            $xname = null,
            $yname = null
            )
    {           
        $fname = $xname;
        $lname = $yname;
        $name = $fname." ".$lname;
        return $this->render('test4',[
            'name'=>$name, ]);
    }
    
    
    
}
